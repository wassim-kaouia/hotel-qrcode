<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\SettingController;
use App\Models\Setting;
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

//settings:
Route::get('/manage/modules',[SettingController::class,'index'])->name('modules.manage');
Route::post('/manage/modules/settings',[SettingController::class,'settings'])->name('settings.post');







Route::get('/wall/{userName}',[AppController::class,'index'])->name('app.index');

// Route::get('/manage/modules',[AppController::class,'manageModules'])->name('modules.manage');

Route::get('/index/modules',[AppController::class,'indexModules'])->name('modules.index');

Route::get('/index/factures',[AppController::class,'indexFactures'])->name('factures.index');

Route::get('/index/qrcode',[AppController::class,'indexQrcodes'])->name('qrcodes.index');

Route::get('/index/commandes',[AppController::class,'indexCommandes'])->name('commandes.index');

Route::get('/invoice', function(){
    return view('factures.invoice');
});


Route::get('/qrcodes', function(){
    return view('qrcode.index');
})->name('qrcodes.index');


Route::get('/commandes', function(){
    return view('orders.index');
})->name('commandes.index');

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