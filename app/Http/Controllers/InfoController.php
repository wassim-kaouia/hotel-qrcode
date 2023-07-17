<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Key;
use App\Models\Info;
use App\Models\Plant;
use App\Models\Animal;

use App\Models\Rappel;
use App\Models\Reglement;
use App\Models\ArrivalInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class InfoController extends Controller
{
    public function index(Request $request){
        
        $user = auth()->user();
        $appId = $user->app->id;
        $infos = Info::where('app_id','=',$appId)->paginate(5);

        $arrivalinfos = ArrivalInfo::where('app_id','=',$appId)->get();
        $reglements = Reglement::where('app_id','=',$appId)->get();
        $keys = Key::where('app_id','=',$appId)->get();
        $rappels = Rappel::where('app_id','=',$appId)->get();
        $plants = Plant::where('app_id','=',$appId)->get();
        $animals = Animal::where('app_id','=',$appId)->get();

        return view('modules.module.infos',
        [
            'infos' => $infos,
            'arrivalinfos' => $arrivalinfos,
            'reglements' => $reglements,
            'keys' => $keys,
            'rappels' => $rappels,
            'plants' => $plants,
            'animals' => $animals
        ]
    );
    }
    
    public function addInfos(Request $request){

        $user = auth()->user();
        $appId = $user->app->id;
        $app = App::findOrFail($appId);
        
         //validate inputs
         $validator = Validator::make($request->all(), [
            'info_name' => 'required',
            'info_description' => 'required',
        ]);
        
        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation..Merci de vérifier les champs !');
            return redirect()->back();
        }

        $info = new Info();
        $info->title = $request->info_name;
        $info->description = $request->info_description;
        $info->app_id = $app->id;
        
        $info->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();
    }

    public function deleteInfos($id){
        // dd($id);
        $info = Info::findOrFail($id);
        $info->delete();

        Alert::success('Suppression', "Supression du info est faite avec succée !");

       
        return redirect()->route('infos.index');
        
    }

    public function updateInfos($id){
        $oneinfos = Info::findOrFail($id);
        $infos = Info::paginate(5);  
        return view('modules.module.infos_update',[
            'oneinfos' => $oneinfos,
            'infos' => $infos,
        ]);
    }


    public function update(Request $request){
        // dd($request->all());
        $info = Info::findOrFail($request->infos_id);
        $info->title = $request->info_name;
        $info->description = $request->info_description;
        Alert::success('Modification', "Modification du info est faite avec succée !");
        $info->save();
        return redirect()->back();
    }
    
}