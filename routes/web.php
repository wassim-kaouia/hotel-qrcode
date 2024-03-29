<?php

use App\Models\User;
use App\Models\Category;
use App\Models\ArrivalInfo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\KeyController;
use App\Http\Controllers\NumController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\WifiController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\RappelController;
use App\Http\Controllers\ArroundController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AlentourController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DigicodeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\EmergencyController;
use App\Http\Controllers\ReglementController;
use App\Http\Controllers\ArrivalInfoController;
use App\Http\Controllers\PartenariatController;
use App\Http\Controllers\TestimonialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/wassim',function(){
    $app = auth()->user()->app;

    return $app->arrounds->first()->interest;
});

Route::get('/imagecopy',function(){
    $photo_to_paste='assets/images/manque.png';  //image 321 x 400
    $white_image= 'assets/images/frame.png'; //873 x 622 

     $im = imagecreatefrompng($white_image);
     $condicion = GetImageSize($photo_to_paste); // image format?

     if($condicion[2] == 1) //gif
     $im2 = imagecreatefromgif("$photo_to_paste");
     if($condicion[2] == 2) //jpg
     $im2 = imagecreatefromjpeg("$photo_to_paste");
     if($condicion[2] == 3) //png
     $im2 = imagecreatefrompng("$photo_to_paste");

     imagecopy($im, $im2, (imagesx($im)/2)-(imagesx($im2)/2), (imagesy($im)/2)-(imagesy($im2)/2), 0, 0, imagesx($im2), imagesy($im2));

     imagepng($im,public_path('assets/wassim.png'));
     imagedestroy($im);
     imagedestroy($im2);

     return 'ok';
});

 Route::get('/test',function(){
    $adress  = "rua do carmo N83 Braga";

    return "<a href='https://www.google.com/maps/place/$adress'>Open In Google Maps</a>";
 });

 Route::get('/',function(){
    return redirect('https://mydigihouse.website');
 });

// Route::get('/', [FrontendController::class,'index'])->name('vitrine.index');
Route::get('/getInterests/{category}',[InterestController::class,'getInterests'])->name('interests.get');   
Route::get('/getArrounds/{interest}',[ArroundController::class,'getArrounds'])->name('arrounds.get');   


Route::middleware(['auth'])->group(function () {
//ADD Interests points
    Route::get('/interest/index',[InterestController::class,'index'])->name('interest.index');   
    Route::post('/interest_add',[InterestController::class,'addInterest'])->name('interest.create');   
    Route::get('/interest_show_update/{id}',[InterestController::class,'showUpdateInterest'])->name('interest.updating');
    Route::get('interest_delete/{id}',[InterestController::class,'deleteInterest'])->name('interest.delete');
    Route::post('/interest_update',[InterestController::class,'updateInterest'])->name('interest.update');

//ADD Icons Front
    Route::get('/icons_front/index',[IconController::class,'index'])->name('iconfront.index');   
    Route::post('/icons_front_add',[IconController::class,'addIconFront'])->name('iconfront.create');   
    Route::get('/icons_front_show_update/{id}',[IconController::class,'showUpdateIconFront'])->name('iconfront.updating');
    Route::get('icons_front_delete/{id}',[IconController::class,'deleteIconFront'])->name('iconfront.delete');
    Route::post('/icons_front_update',[IconController::class,'updateIconFront'])->name('iconfront.update');    
    //update icons settings
    // Route::get('/icons_front_show',[IconController::class,'updateIcons'])->name('icons_front.update');
    // Route::post('/icons_front_update',[IconController::class,'iconsUpdating'])->name('icons_front.updating');

//ADD Interests points
    Route::get('/category/index',[CategoryController::class,'index'])->name('category.index');   
    Route::post('/category_add',[CategoryController::class,'addCategory'])->name('category.create');   
    Route::get('/category_show_update/{id}',[CategoryController::class,'showUpdateCategory'])->name('category.updating');
    Route::get('category_delete/{id}',[CategoryController::class,'deleteCategory'])->name('category.delete');
    Route::post('/category_update',[CategoryController::class,'updateCategory'])->name('category.update');   

//ADD EMERGENCY Numeros
    Route::post('/emergency_add',[EmergencyController::class,'addEmergency'])->name('emergency.create');   
    Route::get('/emergency_show_update/{id}',[EmergencyController::class,'showUpdateEmergency'])->name('emergency.updating');
    Route::get('emergency_delete/{id}',[EmergencyController::class,''])->name('emergency.delete');
    Route::post('/emergency_update',[EmergencyController::class,'updateEmergency'])->name('emergency.update');

//ADD reglement Info
    Route::post('/reglement_add',[ReglementController::class,'addReglement'])->name('reglement.create');   
    Route::get('/reglement_show_update/{id}',[ReglementController::class,'showUpdateReglement'])->name('reglement.updating');
    Route::get('reglement_delete/{id}',[ReglementController::class,''])->name('reglement.delete');
    Route::post('/reglement_update',[ReglementController::class,'updateReglement'])->name('reglement.update');  

//ADD Key Info
    Route::post('/key_add',[KeyController::class,'addKey'])->name('key.create');   
    Route::get('/key_show_update/{id}',[KeyController::class,'showUpdateKey'])->name('key.updating');
    Route::get('key_delete/{id}',[KeyController::class,''])->name('key.delete');
    Route::post('/key_update',[KeyController::class,'updateKey'])->name('key.update');  

//ADD rappel Info
    Route::post('/rappel_add',[RappelController::class,'addRappel'])->name('rappel.create');   
    Route::get('/rappel_show_update/{id}',[RappelController::class,'showUpdateRappel'])->name('rappel.updating');
    Route::get('rappel_delete/{id}',[RappelController::class,''])->name('rappel.delete');
    Route::post('/rappel_update',[RappelController::class,'updateRappel'])->name('rappel.update');   
    
//ADD Arround
    Route::post('/arround_add',[AlentourController::class,'addArround'])->name('arround.create');   
    Route::get('/arround_show_update/{id}',[AlentourController::class,'showUpdateArround'])->name('arround.updating');
    Route::get('arround_delete/{id}',[AlentourController::class,''])->name('arround.delete');
    Route::post('/arround_update',[AlentourController::class,'updateArround'])->name('arround.update');       
    
//ADD Arrival Info
    Route::post('/arrivalInfo_add',[ArrivalInfoController::class,'addArrivalInfo'])->name('arrivalinfo.create');   
    Route::get('/arrivalInfo_show_update/{id}',[ArrivalInfoController::class,'showUpdateArrivalInfo'])->name('arrivalinfo.updating');
    Route::get('arrivalInfo_delete/{id}',[ArrivalInfoController::class,''])->name('arrivalinfo.delete');
    Route::post('/arrivalInfo_update',[ArrivalInfoController::class,'updateArrivalInfo'])->name('arrivalinfo.update');  
    
//ADD plants Info
    Route::post('/plant_add',[PlantController::class,'addPlant'])->name('plant.create');   
    Route::get('/plant_show_update/{id}',[PlantController::class,'showUpdatePlant'])->name('plant.updating');
    Route::get('plant_delete/{id}',[PlantController::class,''])->name('plant.delete');
    Route::post('/plant_update',[PlantController::class,'updatePlant'])->name('plant.update');  

//ADD Animal Info
    Route::post('/animal_add',[AnimalController::class,'addAnimal'])->name('animal.create');   
    Route::get('/animal_show_update/{id}',[AnimalController::class,'showUpdateAnimal'])->name('animal.updating');
    Route::get('animal_delete/{id}',[AnimalController::class,''])->name('animal.delete');
    Route::post('/animal_update',[AnimalController::class,'updateAnimal'])->name('animal.update');  

//ADD Parking Info
    Route::post('/parking_add',[ParkingController::class,'addParking'])->name('parking.create');   
    Route::get('/parking_show_update/{id}',[ParkingController::class,'showUpdateParking'])->name('parking.updating');
    Route::get('parking_delete/{id}',[ParkingController::class,''])->name('parking.delete');
    Route::post('/parking_update',[ParkingController::class,'updateParking'])->name('parking.update');  

//update icons settings
    Route::get('/icons_show',[SettingController::class,'updateIcons'])->name('icons.update');
    Route::post('/icons_update',[SettingController::class,'iconsUpdating'])->name('icons.updating');
    
});

Route::middleware(['auth'])->group(function () {
//settings
    Route::get('/manage/modules', [SettingController::class, 'index'])->name('modules.manage');
    Route::post('/manage/modules/settings', [SettingController::class, 'settings'])->name('settings.post');
    Route::get('/delete/{id}', [SettingController::class, 'deleteImage'])->name('settings.imagedelete');
});

Route::middleware(['auth'])->group(function () {
//wifi
    Route::post('/module/wifi/create', [WifiController::class, 'addWifi'])->name('wifi.create');
    Route::get('/module/wifi/show', [WifiController::class, 'showWifis'])->name('wifi.show');
    Route::get('/module/wifi/index', [WifiController::class, 'index'])->name('wifi.index');
    Route::get('/deleteWifi/{id}', [WifiController::class, 'deleteWifi'])->name('wifi.delete');
    Route::get('/updatewifi/{id}', [WifiController::class, 'updateWifi'])->name('wifi.update');
    Route::post('/update/wifi/', [WifiController::class, 'update'])->name('wifi.updates');
});

Route::middleware(['auth'])->group(function () {
//digicode
    Route::post('/module/digicode/create', [DigicodeController::class, 'addDigicode'])->name('digicode.create');
    Route::get('/module/digicode/show', [DigicodeController::class, 'showDigicode'])->name('digicode.show');
    Route::get('/module/digicode/index', [DigicodeController::class, 'index'])->name('digicode.index');
    Route::get('/deleteDigicode/{id}', [DigicodeController::class, 'deleteDigicode'])->name('digicode.delete');
    Route::get('/updatedigicode/{id}', [DigicodeController::class, 'updateDigicode'])->name('digicode.update');
    Route::post('/update/digicode/', [DigicodeController::class, 'update'])->name('digicode.updates');
});

//livre
Route::post('/module/livre/create/{profile}', [LivreController::class, 'addLivre'])->name('livre.create');
Route::middleware(['auth'])->group(function () {
    Route::get('/module/livre/show/', [LivreController::class, 'showLivre'])->name('livre.show');
    Route::get('/module/livre/index', [LivreController::class, 'index'])->name('livre.index');
    Route::get('/deleteLivre/{id}', [LivreController::class, 'deleteLivre'])->name('livre.delete');
    Route::get('/updatelivre/{id}', [LivreController::class, 'updateLivre'])->name('livre.update');
    Route::post('/update/livre/', [LivreController::class, 'update'])->name('livre.updates');
});

Route::middleware(['auth'])->group(function () {
//Infos
    Route::post('/module/infos/create', [InfoController::class, 'addInfos'])->name('infos.create');
    Route::get('/module/infos/show', [InfoController::class, 'showInfos'])->name('infos.show');
    Route::get('/module/infos/index', [InfoController::class, 'index'])->name('infos.index');
    Route::get('/deleteInfos/{id}', [InfoController::class, 'deleteInfos'])->name('infos.delete');
    Route::get('/updateinfos/{id}', [InfoController::class, 'updateInfos'])->name('infos.update');
    Route::post('/update/infos/', [InfoController::class, 'update'])->name('infos.updates');
});

Route::middleware(['auth'])->group(function () {
//Numero
    Route::post('/module/numeros/create', [NumController::class, 'addNumeros'])->name('numeros.create');
    Route::get('/module/numeros/show', [NumController::class, 'showNumeros'])->name('numeros.show');
    Route::get('/module/numeros/index', [NumController::class, 'index'])->name('numeros.index');
    Route::get('/deleteNumeros/{id}', [NumController::class, 'deleteNumeros'])->name('numeros.delete');
    Route::get('/updatenumeros/{id}', [NumController::class, 'updateNumeros'])->name('numeros.update');
    Route::post('/update/numeros/', [NumController::class, 'update'])->name('numeros.updates');
});

Route::middleware(['auth'])->group(function () {
//Alentours
    Route::post('/module/alentours/create', [ArroundController::class, 'addAlentours'])->name('alentours.create');
    Route::get('/module/alentours/show', [ArroundController::class, 'showAlentours'])->name('alentours.show');
    Route::get('/module/alentours/index', [ArroundController::class, 'index'])->name('alentours.index');
    Route::get('/deleteAlentours/{id}', [ArroundController::class, 'deleteAlentours'])->name('alentours.delete');
    Route::get('/updatealentours/{id}', [ArroundController::class, 'updateAlentours'])->name('alentours.update');
    Route::post('/update/alentours/', [ArroundController::class, 'update'])->name('alentours.updates');
});

Route::middleware(['auth'])->group(function () {
    //Alentours
    Route::post('/module/partenariat/create', [PartenariatController::class, 'addPartenariat'])->name('partenariat.create');
    Route::get('/module/partenariat/show', [PartenariatController::class, 'showPartenariat'])->name('partenariat.show');
    Route::get('/module/partenariat/index', [PartenariatController::class, 'index'])->name('partenariat.index');
    Route::get('/deletePartenariat/{id}', [PartenariatController::class, 'deletePartenariat'])->name('partenariat.delete');
    Route::get('/updatepartenariat/{id}', [PartenariatController::class, 'updatePartenariat'])->name('partenariat.update');
    Route::post('/update/partenariat/', [PartenariatController::class, 'update'])->name('partenariat.updates');
});

Route::middleware(['auth'])->group(function () {
//testiomonial
    Route::get('/testimonials', [TestimonialController::class, 'index'])->name('index.testimonials');
    Route::post('/testimonials/create', [TestimonialController::class, 'store'])->name('store.comment');
    Route::get('/testimonial/{id}',[TestimonialController::class,'edit'])->name('edit.comment');
    Route::post('testimonial/update',[TestimonialController::class,'update'])->name('update.comment');
    Route::get('testimonial/delete/{id}',[TestimonialController::class,'delete'])->name('delete.comment');
});

Route::middleware(['auth'])->group(function () {
//testiomonial
        Route::get('/plans', [PlanController::class, 'index'])->name('index.plans');
        Route::post('/plans/create', [PlanController::class, 'store'])->name('store.plans');
        Route::get('/plan/{id}',[PlanController::class,'edit'])->name('edit.plan');
        Route::post('plan/update',[PlanController::class,'update'])->name('update.plan');
        Route::get('plan/delete/{id}',[PlanController::class,'delete'])->name('delete.plan');
    });

Route::get('/app/{profile_name}', [AppController::class, 'index'])->name('profile.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    // 'isAdmin'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/phpinfo', function () {
    return phpinfo();
});

// Route::get('/manage/modules',[AppController::class,'manageModules'])->name('modules.manage');

Route::get('/index/categories/{app}',[AppController::class,'categoryByApp'])->name('categories.app');
Route::get('/index/interests/{app}/{category}',[AppController::class,'interestsByCategory'])->name('interests.app');
Route::get('/index/arrounds/{app}/{interest}',[AppController::class,'arroundsByInterest'])->name('arrounds.app');

Route::get('/index/modules', [AppController::class, 'indexModules'])->name('modules.index');

Route::get('/index/factures', [AppController::class, 'indexFactures'])->name('factures.index');

Route::get('/index/qrcode', [AppController::class, 'indexQrcodes'])->name('qrcodes.index');

Route::get('/index/commandes', [AppController::class, 'indexCommandes'])->name('commandes.index');

Route::get('/invoice', function () {
    return view('factures.invoice');
});

Route::get('/qrcodes', [AppController::class, 'generateQrCode'])->name('qrcodes.index');

Route::get('/commandes', function () {
    return view('orders.index');
})->name('commandes.index');

Route::get('/welcome', function () {
    return view('welcome3-iframe');
})->name('home.index');