<?php

namespace App\Http\Controllers;
use App\Models\Frontend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class FrontendController extends Controller
{

    public function index(){
        $frontend = Frontend::first();
        return view('frontend.index',[
            'frontend' => $frontend
        ]);
    }

    public function editPage(Request $request)
    {   
        $frontend = Frontend::first();
        // return $frontend;
        return view('vitrine.index',[
            'frontend' => $frontend
        ]);
    }

    public function editForms(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'image_section1' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if(!$validator){
            Alert::error('Erreur', 'Problème de validation..');
            return redirect()->back();
        }

        $frontend = Frontend::updateOrCreate(['id' => 1],[
            'title_s1' => $request->title_s1,
            'description_s1' => $request->description_s1,
            'title_s2' => $request->title_s2,
            'description_s2' => $request->description_s2,
            'title_icon1_s2' => $request->title_icon1_s2,
            'title_icon2_s2' => $request->title_icon2_s2,
            'title_icon3_s2' => $request->title_icon3_s2,
            'title_icon4_s2' => $request->title_icon4_s2,
            'description_icon1_s2' => $request->description_icon1_s2,
            'description_icon2_s2' => $request->description_icon2_s2,
            'description_icon3_s2' => $request->description_icon3_s2,
            'description_icon4_s2' => $request->description_icon4_s2,
        ]);

        Alert::success('success', 'Problème de validation..');
        return redirect()->back();
    }
}