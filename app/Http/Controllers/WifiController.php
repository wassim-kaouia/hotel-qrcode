<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Models\Wifi;
use Illuminate\Support\Facades\Auth;
use App\Models\App;


use Illuminate\Http\Request;

class WifiController extends Controller
{
    
    public function index(Request $request){
        $user = auth()->user();
        $appId = $user->app->id;
        $wifis = Wifi::where('app_id','=',$appId)->paginate(5);

        return view('modules.module.wifi',
        [
            'wifis' => $wifis 
        ]
    );
    }

    public function addWifi(Request $request){

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

        $wifi = new Wifi();
        $wifi->wifi_name = $request->wifi_name;
        $wifi->type = $request->type;
        $wifi->code = $request->wifi_pass;
        $wifi->app_id = $app->id;
        
        $wifi->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();
    }

    public function deleteWifi($id){
        
        $wifi = Wifi::findOrFail($id);
        $wifi->delete();

        Alert::success('Suppression', "Supression du wifi est faite avec succée !");

        return redirect()->route('wifi.index');

    }

    public function updateWifi($id){
        $onewifi = Wifi::findOrFail($id);
        $wifis = Wifi::paginate(5);  
        return view('modules.module.wifi_update',[
            'onewifi' => $onewifi,
            'wifis' => $wifis
        ]);
    }


    public function update(Request $request){
        
        $wifi = Wifi::findOrFail($request->wifi_id);
        $wifi->wifi_name = $request->wifi_name;
        $wifi->code = $request->wifi_pass;
        $wifi->type = $request->type;
        Alert::success('Modification', "Modification du wifi est faite avec succée !");
        $wifi->save();
        return redirect()->back();
        
    }
    
}