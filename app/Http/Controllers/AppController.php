<?php

namespace App\Http\Controllers;
use App\Models\App;
use App\Models\User;
use App\Models\Wifi;
use App\Models\Livre;
use App\Models\Arround;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Digicode;
use App\Models\Interest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{   
    public function index($profile){
        //get data based on profile name 
        $app = App::where('urlName','=',$profile)->first();
        $appGeneral = App::first();
        $settingGeneral = Setting::first();
        // $livres = Livre::where('app_id','=',$app->id)->paginate(4);
        if($app){
            return view('welcome3',[
                'app' => $app,
                'setting' => $appGeneral,
                'settingGeneral' => $settingGeneral
                // 'livres' => $livres
            ]);
        }else{
            return 'non';
        }
        return view('welcome3',[
            'app' => $app,
        ]);
    }
    
    public function categoryByApp($app){
        
        $app = App::find($app);
        $categories = Category::all();
        
        return view('welcome_categories',[
            'app' => $app,
            'categories' => $categories,
        ]);
    }
    
    public function interestsByCategory($appId,$category){
        // dd($appId);
        $category = Category::find($category);
        $interests = $category->interests;
        $app = $appId;
        // $interests = 
        // dd($category->app);
        // dd(Arround::where('app_id','=',1)->);
        // $interestsBycategory = [];

        // foreach($category->arrounds as $arround){
        //     array_push($interestsBycategory,$arround->interest);
        // }
        // dd($interestsBycategory);
        // $interests = Arround::where('category_id');
        return view('welcome_interests',[ 
            'category' => $category,
            'interests' => $interests,
            'app' => $app
        ]);
    }

    public function arroundsByInterest($appId,$interest){
        // dd('app id :'.$appId.' and interest id :'.$interest);
        $interest = Interest::find($interest);
        $app = $appId;
        $arrounds = Arround::where('app_id','=',$appId)->where('interest_id','=',$interest->id)->get();
        // dd($arrounds);
        return view('welcome_arrounds',[ 
            'arrounds' => $arrounds,
            'interest' => $interest
        ]);
    }

    public function generateQrCode(){
        $urlName = Auth::user()->app->urlName;
        $fullLink = request()->getSchemeAndHttpHost().'/app/'.$urlName;
        return view('qrcode.index',
        [
            'link' => $fullLink
        ]);
    }

    
    public function indexModules(){
        $wifis = Wifi::paginate(5);  
        $digicodes =  Digicode::paginate(5); 
        $settingGeneral = Setting::first();
 
        return view('modules.module.index',[
            'wifis' => $wifis,
            'digicodes' => $digicodes,
            'settingGeneral' => $settingGeneral
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