<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Partenariat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;


class PartenariatController extends Controller
{
    public function index(Request $request){
        $user = auth()->user();
        $appId = $user->app->id;
        $partenariats = Partenariat::where('app_id','=',$appId)->paginate(5);
        // $partenariat  = Partenariat::find(Auth::user()->)

        return view('modules.module.partenariat',
        [
            'partenariats' => $partenariats
        ]
    );
    }
    
    public function addPartenariat(Request $request){
        $user = auth()->user();
        $appId = $user->app->id;
        $app = App::findOrFail($appId);
        
         //validate inputs
         $validator = Validator::make($request->all(), [
            'partenariat_name' => 'required',
            'partenariat_website' => 'required',
            'partenariat_icon' => '',
        ]);
        
        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation..Merci de vérifier les champs !');
            return redirect()->back();
        }
        
        $partenariat = new Partenariat();
        $partenariat->name = $request->partenariat_name;
        $partenariat->partenariat_website = $request->partenariat_website;
    
        //upload icon
        if ($request->hasFile('partenariat_icon')){
            //get image extension and add time to its name 
            $imageName_partenariat = time() . '.' . $request->partenariat_icon->extension();
            //move the image to public folder in the desired path with the name generated above ($imageName)
            $request->partenariat_icon->move(public_path('imagesApp/images/partenariats/'), $imageName_partenariat);
            //get the path of the uploaded image in order to delete it in case new image is being uploaded to avoid having many images stored in the app without using them
            $imagePathPublicFolder_partenariat = public_path('imagesApp/images/partenariats/' . $partenariat->partenariat_icon);
            //check wether the image exists in the folder of application 
            if (File::exists($imagePathPublicFolder_partenariat)) {
                // delete it
                File::delete($imagePathPublicFolder_partenariat);
            } 
            //store path in DB:
            $partenariat->partenariat_icon = $imageName_partenariat;
        }

        $partenariat->app_id = $app->id;
        
        $partenariat->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();
    }

    public function deletePartenariat($id){
        
        $partenariat = Partenariat::findOrFail($id);
        $partenariat->delete();

        Alert::success('Suppression', "Supression du wifi est faite avec succée !");

        return redirect()->route('partenariat.index');
    }

    public function updatePartenariat($id){
        $partenariat = Partenariat::findOrFail($id);
        $partenariats = Partenariat::paginate(5);  
        return view('modules.module.partenariat_update',[
            'partenariat' => $partenariat,
            'partenariats' => $partenariats
        ]);
    }


    public function update(Request $request){
        $partenariat = Partenariat::findOrFail($request->partenariat_id);
        $partenariat->name = $request->partenariat_name;
        $partenariat->partenariat_website = $request->partenariat_website;
        //upload icon
        if ($request->hasFile('partenariat_icon')){
            //get image extension and add time to its name 
            $imageName_partenariat = time() . '.' . $request->partenariat_icon->extension();
            //move the image to public folder in the desired path with the name generated above ($imageName)
            $request->partenariat_icon->move(public_path('imagesApp/images/partenariats/'), $imageName_partenariat);
            //get the path of the uploaded image in order to delete it in case new image is being uploaded to avoid having many images stored in the app without using them
            $imagePathPublicFolder_partenariat = public_path('imagesApp/images/partenariats/' . $partenariat->partenariat_icon);
            //check wether the image exists in the folder of application 
            if (File::exists($imagePathPublicFolder_partenariat)) {
                // delete it
                File::delete($imagePathPublicFolder_partenariat);
            } 
            //store path in DB:
            $partenariat->partenariat_icon = $imageName_partenariat;
        }
        Alert::success('Modification', "Modification du digicode est faite avec succée !");
        $partenariat->save();
        return redirect()->back();
    }
}