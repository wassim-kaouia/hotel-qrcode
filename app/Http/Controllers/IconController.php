<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Icon;
use Nette\Utils\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class IconController extends Controller{
    
    public function index(Request $request){
        $user = auth()->user();
        $appId = $user->app->id;

        $icons = Icon::all();

        return view('modules.icons_front',
        [
            'icons' => $icons,
        ]
    );
    }

    public function addIconFront(Request $request){
          //validate inputs
          $validator = Validator::make($request->all(), [
             'title_icone' => 'required',
             'myicone'=> 'required|image|mimes:jpeg,png,jpg|max:2048',
         ]);
         
         //if validations fails
         if ($validator->fails()) {
             Alert::error('Erreur', 'Problème de validation..Merci de vérifier les champs !');
             return redirect()->back();
         }
 
         $icon = new Icon();
         $icon->title = $request->title_icone;
         
         //upload icon
         if ($request->hasFile('myicone')){
            //get image extension and add time to its name 
            $imageName = time() . '.' . $request->myicone->extension();
            //move the image to public folder in the desired path with the name generated above ($imageName)
            $request->myicone->move(public_path('imagesApp/fronticons/'), $imageName);
            //get the path of the uploaded image in order to delete it in case new image is being uploaded to avoid having many images stored in the app without using them
            // $imagePathPublicFolder = public_path('imagesApp/fronticons/' . '/' . $app->avatar);
            //check wether the image exists in the folder of application 
            // if (File::exists($imagePathPublicFolder)) {
            //     // delete it
            //     File::delete($imagePathPublicFolder);
            // } 
            //store path in DB:
            $icon->icon_path = $imageName;
        }
        
         $icon->save();
 
         Alert::success('Ajout', "L'ajout est fait avec succée !");
 
         return redirect()->back();
    }

    public function showUpdateIconFront(Request $request){
        
    }

    public function deleteIconFront(Request $request){
        
    }

    public function updateIconFront(Request $request){

    }

}