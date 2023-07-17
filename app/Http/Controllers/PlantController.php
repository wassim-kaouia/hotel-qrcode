<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PlantController extends Controller
{
    public function addPlant(Request $request){
        //validate inputs
        $validator = Validator::make($request->all(), [
            'plant_title' => 'required',
            'plant_info' => 'required',
        ]);     

        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation..');
            return redirect()->back();
        }

        $plant = new Plant();
        $plant->title = $request->plant_title;
        $plant->plant_info = $request->plant_info;
        $plant->app_id = Auth::user()->app->id;

        $plant->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();
    }

    public function showUpdatePlant(Request $request,$id){
        $plant = Plant::findOrFail($id);
        $infos = Info::paginate(5);  
        $plants = Plant::where('id','=',$id)->get();
        
        return view('modules.module.infos_update',[
            'plant' => $plant,
            'infos' => $infos,
            'plants' => $plants,
            'oneinfos' => '3'
        ]);
    }

    public function updatePlant(Request $request){
        //validate inputs
        $validator = Validator::make($request->all(), [
            'plant_title' => 'required',
            'plant_info' => 'required',
        ]);     

        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation.. :(');
            return redirect()->back();
        }

        $plant =  Plant::find($request->plant_id);
        $plant->title = $request->plant_title;
        $plant->plant_info = $request->plant_info;

        $plant->save();

        Alert::success('Mise à jour', "Mise à jour est faite avec succée !");

        return redirect()->back();        
    }
}