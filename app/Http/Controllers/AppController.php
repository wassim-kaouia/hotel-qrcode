<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{

    public function indexModules(){

        return view('modules.module.index');
    }

    public function manageModules(){
        return view('modules.index');
    }

    public function index($userName){

        $user = User::where('user_name','=',$userName)->first();

        if(!$user){
           abort(404);
        }
        
        return view('welcome',[
            'user' => $user
        ]);    
    }


    public function goWifi($userName){
        $user = User::where('user_name','=',$userName)->first();

        if(!$user){
           abort(404);
        }
        return view('modules.pages.wifi',[
            'user' => $user
        ]);
    }

    public function goDigicode($userName){
        $user = User::where('user_name','=',$userName)->first();

        if(!$user){
           abort(404);
        }

        return view('modules.pages.digicode',[
            'user' => $user
        ]);
    }

    public function goGeo($userName){
        $user = User::where('user_name','=',$userName)->first();

        if(!$user){
           abort(404);
        }

        return view('modules.pages.geo',[
            'user' => $user
        ]);
    }

    public function goInfos($userName){
        $user = User::where('user_name','=',$userName)->first();

        if(!$user){
           abort(404);
        }

        return view('modules.pages.infos',[
            'user' => $user
        ]);
    }

    public function goNums($userName){
        $user = User::where('user_name','=',$userName)->first();

        if(!$user){
           abort(404);
        }

        return view('modules.pages.num',[
            'user' => $user
        ]);
    }

    public function goLivre($userName){
        $user = User::where('user_name','=',$userName)->first();

        if(!$user){
           abort(404);
        }

        return view('modules.pages.livre',[
            'user' => $user
        ]);
    }
}
