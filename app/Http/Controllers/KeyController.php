<?php

namespace App\Http\Controllers;

use App\Models\Key;
use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class KeyController extends Controller
{
    public function addKey(Request $request){
        //validate inputs
        $validator = Validator::make($request->all(), [
            'key_title' => 'required',
            'key_info' => 'required',
        ]);     

        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation..');
            return redirect()->back();
        }

        $key = new Key();
        $key->title = $request->key_title;
        $key->key_info = $request->key_info;
        $key->app_id = Auth::user()->app->id;

        $key->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();
    }

    public function showUpdateKey(Request $request,$id){
        $key = Key::findOrFail($id);
        $infos = Info::paginate(5);  
        $keys = Key::where('id','=',$id)->get();
        
        return view('modules.module.infos_update',[
            'key' => $key,
            'infos' => $infos,
            'keys' => $keys,
            'oneinfos' => '3'
        ]);
    }

    public function updateKey(Request $request){
        //validate inputs
        $validator = Validator::make($request->all(), [
            'key_title' => 'required',
            'key_info' => 'required',
        ]);     

        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation.. :(');
            return redirect()->back();
        }

        $key =  Key::find($request->key_id);
        $key->title = $request->key_title;
        $key->key_info = $request->key_info;

        $key->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();        
    }
}