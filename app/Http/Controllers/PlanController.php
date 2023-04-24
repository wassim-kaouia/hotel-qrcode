<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PlanController extends Controller
{
    public function index(Request $request){
        $plans = Plan::all();       
        return view('plans.edit',[
            'plans' => $plans
        ]);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        
        if($validator->fails()){
            Alert::error('Erreur', "Probleme de validation... ");
            return redirect()->back();
        }
      
        $plan = new Plan();
        $plan->title = $request->title;
        $plan->price = $request->price;
        $plan->description = $request->description;
        $plan->save();

        Alert::success('Success', "Le plan est crée avec succée ... ");

        return redirect()->back();
    }
    
    public function edit(Request $request,$id){
        $plan = Plan::find($id);
        $plans= Plan::all();
        return view('plans.update',[
            'plan' => $plan,
            'plans'=> $plans
        ]);
    }

    public function update(Request $request){

        $plan = Plan::find($request->plan_id);

        $validator = Validator::make($request->all(),[
            'title' => '',
            'price' => '',
            'description' => '',
        ]);
        
        if($validator->fails()){
            Alert::error('Erreur', "Probleme de validation... ");
            return redirect()->back();
        }

        $plan->title = $request->title;
        $plan->price = $request->price;
        $plan->description = $request->description;
        $plan->save();
        
        Alert::success('Success', "Le plan est mise à jour ... ");
        
        return redirect()->back();
    }

    public function delete($id){
        $plan = Plan::find($id);

        $plan->delete();

        Alert::success('Success', "Le plan est supprimé ... ");

        return count(Plan::all()) <= 0 ? redirect('/plans') : redirect()->back(); 

    }
}