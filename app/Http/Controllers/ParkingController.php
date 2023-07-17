<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Parking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ParkingController extends Controller
{
    public function addParking(Request $request){
        //validate inputs
        $validator = Validator::make($request->all(), [
            'parking_title' => 'required',
            'parking_info' => 'required',
        ]);     

        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation..');
            return redirect()->back();
        }

        $parking = new Parking();
        $parking->title = $request->parking_title;
        $parking->parking_info = $request->parking_info;
        $parking->app_id = Auth::user()->app->id;

        $parking->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();
    }

    public function showUpdateParking(Request $request,$id){
        $parking = Parking::findOrFail($id);
        $infos = Info::paginate(5);  
        $parkings = Parking::where('id','=',$id)->get();
        
        return view('modules.module.infos_update',[
            'parking' => $parking,
            'infos' => $infos,
            'parkings' => $parkings,
            'oneinfos' => '3'
        ]);
    }

    public function updateParking(Request $request){
        //validate inputs
        $validator = Validator::make($request->all(), [
            'parking_title' => 'required',
            'parking_info' => 'required',
        ]);     

        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation.. :(');
            return redirect()->back();
        }

        $parking =  Parking::find($request->parking_id);
        $parking->title = $request->parking_title;
        $parking->parking_info = $request->parking_info;

        $parking->save();

        Alert::success('Mise à jour', "Mise à jour est faite avec succée !");

        return redirect()->back();        
    }
}