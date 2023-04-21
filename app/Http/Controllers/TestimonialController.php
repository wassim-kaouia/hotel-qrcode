<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class TestimonialController extends Controller
{
    public function index(Request $request){
        $comments = Testimonial::all();       
        return view('testimonials.edit',[
            'comments' => $comments
        ]);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'avatar' => 'image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required',
            'description' => 'required',
            'comment' => 'required',
        ]);
        
        if($validator->fails()){
            Alert::error('Erreur', "Probleme de validation... ");
            return redirect()->back();
        }
        if ($request->hasFile('avatar')){
            //get image extension and add time to its name 
            $imageName = time() . '.' . $request->avatar->extension();
            //move the image to public folder in the desired path with the name generated above ($imageName)
            $request->avatar->move(public_path('imagesApp/frontend/avatars/'), $imageName);    
        }

        $comment = new Testimonial();
        $comment->name = $request->name;
        $comment->avatar = $imageName;
        $comment->description = $request->description;
        $comment->comment = $request->comment;
        $comment->save();

        Alert::success('Success', "Le commentaire est crée avec succée ... ");

        return redirect()->back();
    }
    public function edit(Request $request,$id){
        $comment = Testimonial::find($id);
        $comments= Testimonial::all();
        return view('testimonials.update',[
            'comment' => $comment,
            'comments'=> $comments
        ]);
    }


    public function update(Request $request){
        // dd($request->all());

        $comment = Testimonial::find($request->comment_id);

        $validator = Validator::make($request->all(),[
            'avatar' => 'image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required',
            'description' => 'required',
            'comment' => 'required',
        ]);
        
        if($validator->fails()){
            Alert::error('Erreur', "Probleme de validation... ");
            return redirect()->back();
        }

        if ($request->hasFile('avatar')){
            //get image extension and add time to its name 
            $imageName = time() . '.' . $request->avatar->extension();
            //move the image to public folder in the desired path with the name generated above ($imageName)
            $request->avatar->move(public_path('imagesApp/frontend/avatars/'), $imageName);
            //get the path of the uploaded image in order to delete it in case new image is being uploaded to avoid having many images stored in the app without using them
            $imagePathPublicFolder = public_path('imagesApp/frontend/avatars/'. $comment->avatar);
            //check wether the image exists in the folder of application 
            if (File::exists($imagePathPublicFolder)) {
                // delete it
                File::delete($imagePathPublicFolder);
            } 
            
        }
        
        $comment->name = $request->name;
        $comment->avatar = $request->avatar ? $imageName : $comment->avatar;
        $comment->description = $request->description;
        $comment->comment = $request->comment;
        $comment->save();

        Alert::success('Success', "Le commentaire est mise à jour ... ");
        
        return redirect()->back();
    }

    public function delete($id){
        $comment = Testimonial::find($id);

        $comment->delete();

        Alert::success('Success', "Le commentaire est supprimé ... ");

        return count(Testimonial::all()) <= 0 ? redirect('/testimonials') : redirect()->back(); 

    }
}