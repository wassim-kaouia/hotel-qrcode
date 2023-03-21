<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\App;
use App\Models\Wifi;
use App\Models\Digicode;
use Illuminate\Http\Request;

class AppController extends Controller
{   
    public function index($profile){
        //get data based on profile name 
        $app = App::where('urlName','=',$profile)->first();
        
        if($app){
            return view('welcome',[
                'app' => $app,
            ]);
        }else{
            return 'non';
        }
        return view('welcome',[
            'app' => $app,
        ]);
    }


    
    public function indexModules(){
        $wifis = Wifi::paginate(5);  
        $digicodes =  Digicode::paginate(5);  
        return view('modules.module.index',[
            'wifis' => $wifis,
            'digicodes' => $digicodes
        ]);
    }

    public function indexFactures(){

        return view('factures.index');
    }

    public function indexQrcodes(){

        return view('modules.module.index');
    }
    
    public function indexCommandes(){

        return view('modules.module.index');
    }

    public function manageModules(){
        return view('modules.index');
    }

    // public function index($userName){

    //     $user = User::where('user_name','=',$userName)->first();

    //     if(!$user){
    //        abort(404);
    //     }
        
    //     return view('welcome',[
    //         'user' => $user
    //     ]);    
    // }

  
}