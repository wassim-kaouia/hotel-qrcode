<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Imageapp;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Nette\Utils\Json;

class SettingController extends Controller
{
    public function index()
    {
        $appData = auth()->user()->app;
        $appSetting = auth()->user()->app->setting;
        return view('modules.index', [
            'app' => $appData,
            'setting' => $appSetting,
        ]);
    }

    public function settings(Request $request)
    {
        //validate inputs
        $validator = Validator::make($request->all(), [
            'wifi_state' => '',
            'digicode_state' => '',
            'livre_state' => '',
            'arround_state' => '',
            'info_state' => '',
            'gallery_images' => 'image|mimes:jpeg,png,jpg|max:2048',
            'avatar' => 'image|mimes:jpeg,png,jpg|max:2048',
            'nums_state' => '',
            'app_link' => '',
            'app_title' => 'required',
            'app_description' => 'required',
            'icons_color' => 'required',
            'title_color' => 'required',
            'background_color' => 'required',
            'notes_color' => 'required',
        ]);

        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation..');
            return redirect()->back();
        }

        // store data coming from modules view in app model
        $user = auth()->user();
        $appId = $user->app->id;
        $app = App::findOrFail($appId);

        $app->title = $request->app_title == '' ? $app->title : $request->app_title;
        $app->description = $request->app_description == '' ? $app->description : $request->app_description;
        //upload avatar
        if ($request->hasFile('avatar')) {
            //get image extension and add time to its name 
            $imageName = time() . '.' . $request->avatar->extension();
            //move the image to public folderin the desired path with the name generated above ($imageName)
            $request->avatar->move(public_path('imagesApp/images/' . Auth::user()->id), $imageName);
            //get the path of the uploaded image in order to delete it in case new image is being uploaded to avoid having many images stored in the app without using them
            $imagePathPublicFolder = public_path('imagesApp/images/' . Auth::user()->id . '/' . $app->avatar);
            //check wether the image exists in the folder of application 
            if (File::exists($imagePathPublicFolder)) {
                // delete it
                File::delete($imagePathPublicFolder);
            }
            //store path in DB:
            $app->avatar = $imageName;
        }

        $app->urlName = $request->app_link == '' ? $app->urlName : $request->app_link;



        //add carousel image - gallery 
        if ($request->hasFile('gallery_images')) {
            //get image extension and add time to its name 
            $imageName = time() . '.' . $request->gallery_images->extension();
            //move the image to public folderin the desired path with the name generated above ($imageName)
            $request->gallery_images->move(public_path('imagesApp/gallery/' . Auth::user()->id), $imageName);

            if (count($app->images) == 4) {
                Alert::error('Erreur', 'Vous avez dépassé le nombre max des images ..');
                return redirect()->back();
            } else {
                //instanciate ImageApp
                $image = new Imageapp();
                $image->title = '';
                $image->url = $imageName;
                $image->app_id = $app->id;
                $image->save();
            }
        }

        $app->save();

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
        $deserializedModules = json_decode($serializedModules, true);

        $appTheme = [
            'icons_color' => $request->icons_color,
            'background_color' => $request->background_color,
            'title_color' => $request->title_color,
            'notes_color' => $request->notes_color,
        ];

        //convert array to json
        $serializedAppTheme =  json_encode($appTheme);
        //convert json to array
        $deserializedAppTheme = json_decode($serializedAppTheme, true);

        $settingId = $app->setting->id;
        $setting = Setting::findOrFail($settingId);

        $setting->modules_state = $deserializedModules;
        $setting->app_theme = $deserializedAppTheme;

        $setting->save();

        Alert::success('Modification', 'Modifié avec succès !');

        return redirect()->back();
    }
}
