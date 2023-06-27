<?php

namespace App\Http\Controllers;

use App\Models\App;
use Nette\Utils\Json;
use App\Models\Category;
use App\Models\Interest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class InterestController extends Controller
{
    public function index(Request $request){
        $user = auth()->user();
        $appId = $user->app->id;
        $interests = Interest::all();
        $app = $user->app;
        $categories = Category::all();

        return view('modules.interest',
        [
            'interests' => $interests,
            'app' => $app, 
            'categories' => $categories
        ]
    );
    }
    
    public function addInterest(Request $request){
        // dd($request->all());
        $user = auth()->user();
        $appId = $user->app->id;
        $app = App::findOrFail($appId);
        
         //validate inputs
         $validator = Validator::make($request->all(), [
            'interest' => 'required',
            'category'=> 'required',
        ]);
        
        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation..Merci de vérifier les champs !');
            return redirect()->back();
        }

        
        $interest = new Interest();
        $interest->title = $request->interest;  
        $interest->category_id = $request->category;
    
        $interest->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();
    }

    public function deleteInterest($id){
        // dd($id);
        $interest = Interest::findOrFail($id);
        $interest->delete();

        Alert::success('Suppression', "Supression de du point d'interet est faite avec succée !");

       
        return redirect()->route('interest.index');
        
    }

    public function showUpdateInterest($id){
        $oneinterest = Interest::findOrFail($id);
        $interests = Interest::paginate(5);  
        $categories = Category::all();

        return view('modules.interest_update',[
            'oneinterest' => $oneinterest,
            'interests' => $interests,
            'categories' => $categories
        ]);
    }

    public function updateInterest(Request $request){
        // dd($request->all());
        $interest = Interest::findOrFail($request->interest_id);
        $interest->title = $request->interest;
        $interest->category_id = $request->category;

        Alert::success('Modification', "Modification du point d'interet est faite avec succée !");
        $interest->save();
        return redirect()->back();
    }

    public function getInterests(Request $request,$category){
        $interests = Interest::where('category_id','=',$category)->get();
        
        return response()->json(['interests'=> $interests],200);
    }
}