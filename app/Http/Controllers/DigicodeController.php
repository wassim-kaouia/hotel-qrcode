<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Models\Digicode;
use Illuminate\Support\Facades\Auth;
use App\Models\App;


use Illuminate\Http\Request;

class DigicodeController extends Controller
{
    public function index(Request $request){
        $user = auth()->user();
        $appId = $user->app->id;
        $digicodes = Digicode::where('app_id','=',$appId)->paginate(5);

        return view('modules.module.digicode',
        [
            'digicodes' => $digicodes
        ]
    );
    }
    
    public function addDigicode(Request $request){

        $user = auth()->user();
        $appId = $user->app->id;
        $app = App::findOrFail($appId);
        
         //validate inputs
         $validator = Validator::make($request->all(), [
            'digicode_titre' => 'required',
            'digicode_key' => 'required',
        ]);
        
        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation..Merci de vérifier les champs !');
            return redirect()->back();
        }
        
        $digicode = new Digicode();
        $digicode->title = $request->digicode_titre;
        $digicode->access_code = $request->digicode_key;
        $digicode->app_id = $app->id;
        
        $digicode->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();
    }

    public function deleteDigicode($id){
        
        $digicode = Digicode::findOrFail($id);
        $digicode->delete();

        Alert::success('Suppression', "Supression du wifi est faite avec succée !");

        return redirect()->route('digicode.index');
    }

    public function updateDigicode($id){
        $onedigicode = Digicode::findOrFail($id);
        $digicodes = Digicode::paginate(5);  
        return view('modules.module.digicode_update',[
            'onedigicode' => $onedigicode,
            'digicodes' => $digicodes
        ]);
    }


    public function update(Request $request){
        $digicode = Digicode::findOrFail($request->digicode_id);
        $digicode->title = $request->digicode_titre;
        $digicode->access_code = $request->digicode_key;
        Alert::success('Modification', "Modification du digicode est faite avec succée !");
        $digicode->save();
        return redirect()->back();
    }
    
}