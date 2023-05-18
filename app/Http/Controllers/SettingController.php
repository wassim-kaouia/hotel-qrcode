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
        if ($request->hasFile('avatar')){
            //get image extension and add time to its name 
            $imageName = time() . '.' . $request->avatar->extension();
            //move the image to public folder in the desired path with the name generated above ($imageName)
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

    public function deleteImage($id){
        
        $imageApp = Imageapp::findOrFail($id);

        $imagePathPublicFolder = public_path('imagesApp/gallery/' . Auth::user()->id . '/' . $imageApp->url);
        //check wether the image exists in the folder of application 
        if (File::exists($imagePathPublicFolder)) {
            // delete it
            File::delete($imagePathPublicFolder);
        } 

        $imageApp->delete();

        Alert::success('Suppression', 'Image Supprimé avec succès !');

        return redirect()->back();
    }

    public function updateIcons(Request $request){
        $user = auth()->user();
        $appId = $user->app->id;
        $app = App::findOrFail($appId);

        $settingId = $app->setting->id;
        $setting = Setting::findOrFail($settingId);

        return view('modules.update_icons',[
            'setting' => $setting
        ]);
    }

    public function iconsUpdating(Request $request){
        //validate inputs
        $validator = Validator::make($request->all(), [
            'title_wifi' => 'required',
            'icon_wifi'  => 'image|mimes:jpeg,png,jpg|max:2048',
            'title_digicode' => 'required',
            'icon_digicode'  => 'image|mimes:jpeg,png,jpg|max:2048',
            'title_livre' => 'required',
            'icon_livre'  => 'image|mimes:jpeg,png,jpg|max:2048',
            'title_info' => 'required',
            'icon_info'  => 'image|mimes:jpeg,png,jpg|max:2048',
            'title_arround' => 'required',
            'icon_arround'  => 'image|mimes:jpeg,png,jpg|max:2048',
            'title_numero' => 'required',
            'icon_numero'  => 'image|mimes:jpeg,png,jpg|max:2048',
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

        $settingId = $app->setting->id;
        $setting = Setting::findOrFail($settingId);

        //wifi title and icon 
        $setting->wifi_text = $request->title_wifi;

        if ($request->hasFile('icon_wifi')){
            //get image extension and add time to its name 
            $imageName_wifi = time() . '.' . $request->icon_wifi->extension();
            //move the image to public folder in the desired path with the name generated above ($imageName)
            $request->icon_wifi->move(public_path('imagesApp/images/icons/'), $imageName_wifi);
            //get the path of the uploaded image in order to delete it in case new image is being uploaded to avoid having many images stored in the app without using them
            $imagePathPublicFolder_wifi = public_path('imagesApp/images/icons/'. $setting->wifi_path);
            //check wether the image exists in the folder of application 
            if (File::exists($imagePathPublicFolder_wifi)) {
                // delete it
                File::delete($imagePathPublicFolder_wifi);
            } 
            //store path in DB:
            $setting->wifi_path = $imageName_wifi;
        }

         //digicode title and icon 
         $setting->digicode_text = $request->title_digicode;

         if ($request->hasFile('icon_digicode')){
             //get image extension and add time to its name 
             $imageName_digicode = time() . '.' . $request->icon_digicode->extension();
             //move the image to public folder in the desired path with the name generated above ($imageName)
             $request->icon_digicode->move(public_path('imagesApp/images/icons/'), $imageName_digicode);
             //get the path of the uploaded image in order to delete it in case new image is being uploaded to avoid having many images stored in the app without using them
             $imagePathPublicFolder_digicode = public_path('imagesApp/images/icons/'. $setting->digicode_path);
             //check wether the image exists in the folder of application 
             if (File::exists($imagePathPublicFolder_digicode)) {
                 // delete it
                 File::delete($imagePathPublicFolder_digicode);
             } 
             //store path in DB:
             $setting->digicode_path = $imageName_digicode;
         }

        //livre title and icon 
        $setting->livre_text = $request->title_livre;

        if ($request->hasFile('icon_livre')){
            //get image extension and add time to its name 
            $imageName_livre = time() . '.' . $request->icon_livre->extension();
            //move the image to public folder in the desired path with the name generated above ($imageName)
            $request->icon_livre->move(public_path('imagesApp/images/icons/'), $imageName_livre);
            //get the path of the uploaded image in order to delete it in case new image is being uploaded to avoid having many images stored in the app without using them
            $imagePathPublicFolder_livre = public_path('imagesApp/images/icons/'. $setting->livre_path);
            //check wether the image exists in the folder of application 
            if (File::exists($imagePathPublicFolder_livre)) {
                // delete it
                File::delete($imagePathPublicFolder_livre);
            } 
            //store path in DB:
            $setting->livre_path = $imageName_livre;
        }

         //info title and icon 
         $setting->info_text = $request->title_info;

         if ($request->hasFile('icon_info')){
             //get image extension and add time to its name 
             $imageName_info = time() . '.' . $request->icon_info->extension();
             //move the image to public folder in the desired path with the name generated above ($imageName)
             $request->icon_info->move(public_path('imagesApp/images/icons/'), $imageName_info);
             //get the path of the uploaded image in order to delete it in case new image is being uploaded to avoid having many images stored in the app without using them
             $imagePathPublicFolder_info = public_path('imagesApp/images/icons/' . $setting->info_path);
             //check wether the image exists in the folder of application 
             if (File::exists($imagePathPublicFolder_info)) {
                 // delete it
                 File::delete($imagePathPublicFolder_info);
             } 
             //store path in DB:
             $setting->info_path = $imageName_info;
         }

          //alenours title and icon 
        $setting->arround_text = $request->title_arround;

        if ($request->hasFile('icon_arround')){
            //get image extension and add time to its name 
            $imageName_arround = time() . '.' . $request->icon_arround->extension();
            //move the image to public folder in the desired path with the name generated above ($imageName)
            $request->icon_arround->move(public_path('imagesApp/images/icons/'), $imageName_arround);
            //get the path of the uploaded image in order to delete it in case new image is being uploaded to avoid having many images stored in the app without using them
            $imagePathPublicFolder_arround = public_path('imagesApp/images/icons/'. $setting->arround_path);
            //check wether the image exists in the folder of application 
            if (File::exists($imagePathPublicFolder_arround)) {
                // delete it
                File::delete($imagePathPublicFolder_arround);
            } 
            //store path in DB:
            $setting->arround_path = $imageName_arround;
        }

         //numero title and icon 
         $setting->numero_text = $request->title_numero;

         if ($request->hasFile('icon_numero')){
             //get image extension and add time to its name 
             $imageName_numero = time() . '.' . $request->icon_numero->extension();
             //move the image to public folder in the desired path with the name generated above ($imageName)
             $request->icon_numero->move(public_path('imagesApp/images/icons/'), $imageName_numero);
             //get the path of the uploaded image in order to delete it in case new image is being uploaded to avoid having many images stored in the app without using them
             $imagePathPublicFolder_numero = public_path('imagesApp/images/icons/' . $setting->numero_path);
             //check wether the image exists in the folder of application 
             if (File::exists($imagePathPublicFolder_numero)) {
                 // delete it
                 File::delete($imagePathPublicFolder_numero);
             } 
             //store path in DB:
             $setting->numero_path = $imageName_numero;
         }

        $setting->save();

        Alert::success('Upload des icons', 'Upload des icons est fait avec succée !');

        return redirect()->back();
         
    }
}