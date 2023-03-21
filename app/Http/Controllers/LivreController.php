<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Models\Livre;
use Illuminate\Support\Facades\Auth;
use App\Models\App;

use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index(Request $request){
        $user = auth()->user();
        $appId = $user->app->id;
        $livres = Livre::where('app_id','=',$appId)->paginate(5);

        return view('modules.module.livre',
        [
            'livres' => $livres 
        ]
    );
    }

    public function addLivre(Request $request){

        $user = auth()->user();
        $appId = $user->app->id;
        $app = App::findOrFail($appId);
        
         //validate inputs
         $validator = Validator::make($request->all(), [
            'wifi_name' => 'required',
            'type' => 'required',
            'wifi_pass' => 'required',
        ]);

        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation..Merci de vérifier les champs !');
            return redirect()->back();
        }

        $livre = new Livre();
        $livre->wifi_name = $request->wifi_name;
        $livre->type = $request->type;
        $livre->code = $request->wifi_pass;
        $livre->app_id = $app->id;
        
        $livre->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();
    }

    public function deleteLivre($id){
        
        $livre = Livre::findOrFail($id);
        $livre->delete();

        Alert::success('Suppression', "Supression du livre est faite avec succée !");

        return redirect()->route('livre.index');
    }

    public function updateLivre($id){
        $onelivre = Livre::findOrFail($id);
        $livres = Livre::paginate(5);  
        return view('modules.module.livre_update',[
            'onelivre' => $onewifi,
            'livres' => $livres
        ]);
    }


    public function update(Request $request){
        
        $livre = Livre::findOrFail($request->wifi_id);
        $livre->wifi_name = $request->wifi_name;
        $livre->code = $request->wifi_pass;
        $livre->type = $request->type;
        Alert::success('Modification', "Modification du livre est faite avec succée !");
        $livre->save();
        return redirect()->back();
        
    }
}