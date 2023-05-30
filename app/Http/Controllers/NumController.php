<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Num;
use App\Models\Emergency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;


class NumController extends Controller
{
    public function index(Request $request){
        $user = auth()->user();
        $appId = $user->app->id;
        $numeros = Num::where('app_id','=',$appId)->paginate(5);
        $emergencies = Emergency::where('app_id','=',$appId)->get();

        return view('modules.module.numero',
        [
            'numeros' => $numeros,
            'emergencies' => $emergencies
        ]
    );
    }

    
    public function addNumeros(Request $request){

        $user = auth()->user();
        $appId = $user->app->id;
        $app = App::findOrFail($appId);
        
         //validate inputs
         $validator = Validator::make($request->all(), [
            'numero_title' => 'required',
            'numero_description' => '',
            'numero' => '',
        ]);
        
        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation..Merci de vérifier les champs !');
            return redirect()->back();
        }

        $numero = new Num();
        $numero->title = $request->numero_title;
        $numero->description = $request->numero_description;
        $numero->numero = $request->numero;
        $numero->app_id = $app->id;
        
        $numero->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();
    }

    public function deleteNumeros($id){
        // dd($id);
        $numero = Num::findOrFail($id);
        $numero->delete();

        Alert::success('Suppression', "Supression du numero est faite avec succée !");

       
        return redirect()->route('numeros.index');
        
    }

    public function updateNumeros($id){
        $onenumeros = Num::findOrFail($id);
        $numeros = Num::paginate(5);  
        $emergencies = Emergency::where('id','=',$id)->get();

        return view('modules.module.numero_update',[
            'onenumeros' => $onenumeros,
            'numeros' => $numeros,
            'emergencies' => $emergencies
        ]);
    }


    public function update(Request $request){
        // dd($request->all());
        $numero = Num::findOrFail($request->numero_id);
        $numero->title = $request->numero_title;
        $numero->description = $request->numero_description;
        $numero->numero = $request->numero;
        Alert::success('Modification', "Modification du numero est faite avec succée !");
        $numero->save();
        return redirect()->back();
    }
}