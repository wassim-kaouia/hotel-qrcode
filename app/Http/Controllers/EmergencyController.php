<?php

namespace App\Http\Controllers;

use App\Models\Num;
use App\Models\Emergency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;



class EmergencyController extends Controller
{
    public function addEmergency(Request $request){
        //validate inputs
        $validator = Validator::make($request->all(), [
            'emergency_title' => 'required',
            'emergency_numero' => 'required',
        ]);     

        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation..');
            return redirect()->back();
        }

        $emergency = new Emergency();
        $emergency->title = $request->emergency_title;
        $emergency->emergency_numero= $request->emergency_numero;
        $emergency->app_id = Auth::user()->app->id;

        $emergency->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();
    }

    public function showUpdateEmergency(Request $request,$id){
        $emergency = Emergency::findOrFail($id);
        $numeros = Num::paginate(5);  
        $emergencies = Emergency::where('id','=',$id)->get();
        
        return view('modules.module.numero_update',[
            'emergency' => $emergency,
            'numeros' => $numeros,
            'emergencies' => $emergencies,
            'onenumeros' => '3'
        ]);
    }

    public function updateEmergency(Request $request){
        //validate inputs
        $validator = Validator::make($request->all(), [
            'emergency_title' => 'required',
            'emergency_numero' => 'required',
        ]);     

        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation..');
            return redirect()->back();
        }

        $emergency = Emergency::find($request->emergency_id);
        $emergency->title = $request->emergency_title;
        $emergency->emergency_numero= $request->emergency_numero;

        $emergency->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();        
    }
}