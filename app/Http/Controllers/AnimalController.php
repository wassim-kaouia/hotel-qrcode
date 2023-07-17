<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Plant;
use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AnimalController extends Controller
{
    public function addAnimal(Request $request){
        //validate inputs
        $validator = Validator::make($request->all(), [
            'animal_title' => 'required',
            'animal_info' => 'required',
        ]);     

        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation..');
            return redirect()->back();
        }

        $animal = new Animal();
        $animal->title = $request->animal_title;
        $animal->animal_info = $request->animal_info;
        $animal->app_id = Auth::user()->app->id;

        $animal->save();

        Alert::success('Ajout', "L'ajout est fait avec succée !");

        return redirect()->back();
    }

    public function showUpdateAnimal(Request $request,$id){
        $animal = Animal::findOrFail($id);
        $infos = Info::paginate(5);  
        $animals = Animal::where('id','=',$id)->get();
        
        return view('modules.module.infos_update',[
            'animal' => $animal,
            'infos' => $infos,
            'animals' => $animals,
            'oneinfos' => '3'
        ]);
    }

    public function updateAnimal(Request $request){
        //validate inputs
        $validator = Validator::make($request->all(), [
            'animal_title' => 'required',
            'animal_info' => 'required',
        ]);     

        //if validations fails
        if ($validator->fails()) {
            Alert::error('Erreur', 'Problème de validation.. :(');
            return redirect()->back();
        }

        $animal =  Animal::find($request->animal_id);
        $animal->title = $request->animal_title;
        $animal->animal_info = $request->animal_info;

        $animal->save();

        Alert::success('Mise à jour', "Mise à jour est faite avec succée !");

        return redirect()->back();        
    }
}