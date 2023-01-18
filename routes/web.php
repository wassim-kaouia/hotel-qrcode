<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('modules.livre.index');
})->middleware('auth');

Route::get('/wall/{userName}',[AppController::class,'index'])->name('app.index');

Route::get('/wall/{userName}/mywifi',[AppController::class,'goWifi'])->name('wifi.index');
Route::get('/wall/{userName}/mydigicode',[AppController::class,'goDigicode'])->name('digicode.index');
Route::get('/wall/{userName}/mylivre',[AppController::class,'goLivre'])->name('livre.index');
Route::get('/wall/{userName}/myinfos',[AppController::class,'goInfos'])->name('infos.index');
Route::get('/wall/{userName}/mygeo',[AppController::class,'goGeo'])->name('geo.index');
Route::get('/wall/{userName}/mynums',[AppController::class,'goNums'])->name('nums.index');

Route::post('/wall/{userName}/createLivre',[LivreController::class,'store'])->name('livre.store');

Route::get('/manage/modules',[AppController::class,'manageModules'])->name('modules.manage');


Route::get('/welcome', function () {
    return view('welcome');
})->name('home.index');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
