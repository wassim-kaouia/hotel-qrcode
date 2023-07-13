<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Arround;
use App\Models\Category;
use App\Models\Interest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ArroundController extends Controller
{
    public function index(Request $request){
        
        $user = auth()->user();
        $appId = $user->app->id;
        $alentours = Arround::where('app_id','=',$appId)->paginate(5);
        $app = $user->app;
        $interests = Interest::all();
        $categories = Category::all();

        return view('modules.module.alentour',
        [
            'alentours' => $alentours,
            'app' => $app, 
            'interests' => $interests,
            'categories' => $categories
        ]
    );
    }
    
    public function addAlentours(Request $request){
        // dd($request->all());
        $user = auth()->user();
        $appId = $user->app->id;
        $app = App::findOrFail($appId);
        
         //validate inputs
         $validator = Validator::make($request->all(), [
            'alentour_name' => 'required',
            // 'alentour_gallery' => 'required',
            'distance' => '',
            'link' => '',
            'interest_id',
            'category_id',
        ]);
        
        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation..Merci de vérifier les champs !');
            return redirect()->back();
        }

        
        $alentour = new Arround();
        $alentour->site_name = $request->alentour_name;
        $alentour->distance = $request->distance;
        $alentour->address = $request->address;        
        $alentour->link = $request->link;
        $alentour->interest_id = $request->interest;
        $alentour->category_id = $request->category;
        $alentour->app_id = $app->id;

        //upload arrounds gallery

       //add carousel image - gallery 
    //    if ($request->hasFile('alentour_gallery')) {
    //     //get image extension and add time to its name 
    //     $imageName = time() . '.' . $request->alentour_gallery->extension();
    //     //move the image to public folderin the desired path with the name generated above ($imageName)
    //     $request->alentour_gallery->move(public_path('imagesApp/alentour_gallery/' . Auth::user()->id), $imageName);

    //     if (count($app->images) == 4) {
    //         Alert::error('Erreur', 'Vous avez dépassé le nombre max des images ..');
    //         return redirect()->back();
    //     } else {
    //         //instanciate ImageApp
    //         $image = new Imageapp();
    //         $image->title = '';
    //         $image->arroundimage_id = $imageName;
    //         $image->app_id = $app->id;
    //         $image->save();
    //     }
    // }
        
        $alentour->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();
    }

    public function deleteAlentours($id){
        // dd($id);
        $alentour = Arround::findOrFail($id);
        $alentour->delete();

        Alert::success('Suppression', "Supression de l'alentour est faite avec succée !");

       
        return redirect()->route('alentours.index');
        
    }

    public function updateAlentours($id){
        $onealentours = Arround::findOrFail($id);
        $alentours = Arround::paginate(5);  
        $interests = Interest::all();

        return view('modules.module.alentour_update',[
            'onealentours' => $onealentours,
            'alentours' => $alentours,
            'interests' => $interests
        ]);
    }

    public function update(Request $request){
        // dd($request->all());
        $alentour = Arround::findOrFail($request->alentour_id);
        $alentour->site_name = $request->alentour_name;
        $alentour->distance = $request->distance;
        $alentour->link = $request->link;
        $alentour->address = $request->address;        
        $alentour->interest_id = $request->interest;
        $alentour->category_id = $request->category;

        Alert::success('Modification', "Modification de l'alentour est faite avec succée !");
        $alentour->save();
        return redirect()->back();
    }

    public function getArrounds(Request $request,$interest){
        $arrounds = Arround::where('interest_id','=',$interest)->get();

        return response()->json(['arrounds' => $arrounds],200);
    }
}