<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Rappel;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class RappelController extends Controller
{
    public function addRappel(Request $request){
        //validate inputs
        $validator = Validator::make($request->all(), [
            'rappel_title' => 'required',
            'rappel_info' => 'required',
        ]);     

        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation..');
            return redirect()->back();
        }

        $rappel = new Rappel();
        $rappel->title = $request->rappel_title;
        $rappel->rappel_info = $request->rappel_info;
        $rappel->app_id = Auth::user()->app->id;

        $rappel->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();
    }

    public function showUpdateRappel(Request $request,$id){
        $rappel = Rappel::findOrFail($id);
        $infos = Info::paginate(5);  
        $rappels = Rappel::where('id','=',$id)->get();
        
        return view('modules.module.infos_update',[
            'rappel' => $rappel,
            'infos' => $infos,
            'rappels' => $rappels,
            'oneinfos' => '3'
        ]);
    }

    public function updateRappel(Request $request){
        //validate inputs
        $validator = Validator::make($request->all(), [
            'rappel_title' => 'required',
            'rappel_info' => 'required',
        ]);     

        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation.. :(');
            return redirect()->back();
        }

        $rappel =  Rappel::find($request->rappel_id);
        $rappel->title = $request->rappel_title;
        $rappel->rappel_info = $request->rappel_info;

        $rappel->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();        
    }
}