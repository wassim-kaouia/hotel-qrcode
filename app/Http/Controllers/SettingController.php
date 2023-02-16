<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Json;

class SettingController extends Controller
{
    public function index(){
        $appData = auth()->user()->app;
        $appSetting = auth()->user()->app->setting;
        return view('modules.index',[
            'app' => $appData,
            'setting' => $appSetting,
        ]);
    }

    public function settings(Request $request){

        $validate = $request->validate([
            'wifi_state' => '',
            'digicode_state' => '',
            'livre_state' => '',
            'arround_state' => '',
            'info_state' => '',
            'gallery_images' => '',
            'avatar' => '',
            'nums_state' => '',
            'app_link' => '',
            'app_title' => 'required',
            'app_description' => 'required',
            'icons_color' => 'required',
            'title_color' => 'required',
            'background_color' => 'required',
            'notes_color' => 'required', 
        ]);
        // dd($request->all());

        // store data coming from modules view in app model
        $user = auth()->user(); 
        $appId = $user->app->id;
        $app = App::findOrFail($appId);
        
        $app->title = $request->app_title == '' ? $app->title : $request->app_title;
        $app->description = $request->app_description == '' ? $app->description : $request->app_description;
        //upload avatar
        $app->urlName = $request->app_link == '' ? $app->urlName : $request->app_link;
        $app->save();

        // dd('done');
        //store data setting modele
        $modules = [
            'wifi' => $request->wifi_state,
            'digicode' => $request->digicode_state,
            'livre' => $request->livre_state,
            'arround' => $request->arround_state,
            'info' => $request->info_state,
            'nums' => $request->nums_state,
        ];

        
        //convert array to json
        $serializedModules =  json_encode($modules);
        //convert json to array
        $deserializedModules = json_decode($serializedModules,true);

        $appTheme = [
            'icons_color' => $request->icons_color,
            'background_color' => $request->background_color,
            'title_color' => $request->title_color,
            'notes_color' => $request->notes_color,
        ];

        //convert array to json
        $serializedAppTheme =  json_encode($appTheme);
        //convert json to array
        $deserializedAppTheme = json_decode($serializedAppTheme,true);

        $settingId = $app->setting->id;
        $setting = Setting::findOrFail($settingId);

        $setting->modules_state = $deserializedModules;
        $setting->app_theme = $deserializedAppTheme;

        $setting->save();

        return redirect()->back();
    }
}
