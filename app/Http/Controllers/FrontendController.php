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
        $front = Frontend::first();
        $imageName = '';
        
        $validator = Validator::make($request->all(),[
            'image_section1' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if(!$validator){
            Alert::error('Erreur', 'Problème de validation..');
            return redirect()->back();
        }
        if ($request->hasFile('image_s3')){
            //get image extension and add time to its name 
            $imageName = time() . '.' . $request->image_s3->extension();
            //move the image to public folder in the desired path with the name generated above ($imageName)
            $request->image_s3->move(public_path('imagesApp/frontend/images/'), $imageName);
            //get the path of the uploaded image in order to delete it in case new image is being uploaded to avoid having many images stored in the app without using them
            $imagePathPublicFolder = public_path('imagesApp/frontend/images/'. $front->image_s3);
            //check wether the image exists in the folder of application 
            if (File::exists($imagePathPublicFolder)) {
                // delete it
                File::delete($imagePathPublicFolder);
            } 
            
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
            'title_s3' => $request->title_s3,
            'description_s3' => $request->description_s3,
            'bullet1_s3' => $request->bullet1_s3,
            'bullet2_s3' => $request->bullet2_s3,
            'bullet3_s3' => $request->bullet3_s3,
            'bullet4_s3' => $request->bullet4_s3,
             //store path in DB:
            'image_s3' => $imageName,
            'title_s4' => $request->title_s4,
            'description_s4' => $request->description_s4,
            'title_s5' => $request->title_s5,
            'description_s5' => $request->description_s5,
            'title_num1_s6' => $request->title_num1_s6,
            'title_num2_s6' => $request->title_num2_s6,
            'title_num3_s6' => $request->title_num3_s6,
            'title_num4_s6' => $request->title_num4_s6,
            'num1_s6' => $request->num1_s6,
            'num2_s6' => $request->num2_s6,
            'num3_s6' => $request->num3_s6,
            'num4_s6' => $request->num4_s6,
            'description_footer' => $request->description_footer,
            'footer' => $request->footer,
            'address' => $request->address,
        ]);

        Alert::success('success', 'Problème de validation..');
        return redirect()->back();
    }
}