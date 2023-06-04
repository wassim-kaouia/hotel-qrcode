<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\ArrivalInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;


class ArrivalInfoController extends Controller
{
    public function addArrivalInfo(Request $request){
        //validate inputs
        $validator = Validator::make($request->all(), [
            'arrivalinfo_title' => 'required',
            'arrivalinfo_message' => 'required',
        ]);     

        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation..');
            return redirect()->back();
        }

        $arrivalinfo = new ArrivalInfo();
        $arrivalinfo->title = $request->arrivalinfo_title;
        $arrivalinfo->arrival_message = $request->arrivalinfo_message;
        $arrivalinfo->app_id = Auth::user()->app->id;

        $arrivalinfo->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();
    }

    public function showUpdateArrivalInfo(Request $request,$id){
        $arrivalinfo = ArrivalInfo::findOrFail($id);
        $infos = Info::paginate(5);  
        $arrivaleinfos = ArrivalInfo::where('id','=',$id)->get();
        
        return view('modules.module.infos_update',[
            'arrivalinfo' => $arrivalinfo,
            'infos' => $infos,
            'arrivalinfos' => $arrivaleinfos,
            'oneinfos' => '3'
        ]);
    }

    public function updateArrivalInfo(Request $request){
        //validate inputs
        $validator = Validator::make($request->all(), [
            'arrivalinfo_title' => 'required',
            'arrivalinfo_message' => 'required',
        ]);     

        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation.. :(');
            return redirect()->back();
        }

        $arrivalinfo = ArrivalInfo::find($request->arrivalinfo_id);
        $arrivalinfo->title = $request->arrivalinfo_title;
        $arrivalinfo->arrival_message = $request->arrivalinfo_message;

        $arrivalinfo->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();        
    }
}