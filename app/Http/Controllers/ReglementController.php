<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Reglement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;


class ReglementController extends Controller
{
    public function addReglement(Request $request){
        //validate inputs
        $validator = Validator::make($request->all(), [
            'reglement_title' => 'required',
            'reglement_message' => 'required',
        ]);     

        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation..');
            return redirect()->back();
        }

        $reglement = new Reglement();
        $reglement->title = $request->reglement_title;
        $reglement->reglement = $request->reglement_message;
        $reglement->app_id = Auth::user()->app->id;

        $reglement->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();
    }

    public function showUpdateReglement(Request $request,$id){
        $reglement = Reglement::findOrFail($id);
        $infos = Info::paginate(5);  
        $reglements = Reglement::where('id','=',$id)->get();
        
        return view('modules.module.infos_update',[
            'reglement' => $reglement,
            'infos' => $infos,
            'reglements' => $reglements,
            'oneinfos' => '3'
        ]);
    }

    public function updateReglement(Request $request){
        //validate inputs
        $validator = Validator::make($request->all(), [
            'reglement_title' => 'required',
            'reglement_message' => 'required',
        ]);     

        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation.. :(');
            return redirect()->back();
        }

        $reglement = Reglement::find($request->reglement_id);
        $reglement->title = $request->reglement_title;
        $reglement->reglement = $request->reglement_message;

        $reglement->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();        
    }
}