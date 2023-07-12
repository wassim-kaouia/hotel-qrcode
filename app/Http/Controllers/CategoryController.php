<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Icon;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(Request $request){
        $user = auth()->user();
        $appId = $user->app->id;
        $categories = Category::where('app_id','=',$appId)->get();
        $app = $user->app;
        $icones  = Icon::all();

        return view('modules.category',
        [
            'categories' => $categories,
            'app' => $app, 
            'icones' => $icones
        ]
    );
    }
    
    public function addCategory(Request $request){
        // dd($request->all());
        $user = auth()->user();
        $appId = $user->app->id;
        $app = App::findOrFail($appId);
        
         //validate inputs
         $validator = Validator::make($request->all(), [
            'category' => 'required',
            'app_id'=> '',
        ]);
        
        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation..Merci de vérifier les champs !');
            return redirect()->back();
        }

        $category = new Category();
        $category->title = $request->category;  
        $category->app_id = $app->id;
        $category->icon_id = $request->icone;
    
        $category->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();
    }

    public function deleteCategory($id){
        // dd($id);
        $category = Category::findOrFail($id);
        $category->delete();

        Alert::success('Suppression', "Supression de categorie est faite avec succée !");

       
        return redirect()->route('category.index');
        
    }

    public function showUpdateCategory($id){
        $user = auth()->user();
        $appId = $user->app->id;
        
        $onecategory = Category::findOrFail($id);
        // $categories = Category::paginate(5);  
        $categories = Category::where('app_id','=',$appId)->get();
        $icones = Icon::all();

        return view('modules.category_update',[
            'onecategory' => $onecategory,
            'categories' => $categories,
            'icones' => $icones
        ]);
    }

    public function updateCategory(Request $request){
        // dd($request->all());
        $category = Category::findOrFail($request->category_id);
        $category->title = $request->category;
        $category->app_id = Auth::user()->app->id;
        $category->icon_id = $request->icone;

        Alert::success('Modification', "Modification de Categorie est faite avec succée !");
        $category->save();
        return redirect()->back();
    }
}