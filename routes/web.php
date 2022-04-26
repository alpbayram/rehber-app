<?php

use App\Http\Controllers\Firebasecontroller;
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
    return redirect(route('login'));
})->middleware('kullanicioturum');
Route::view('index','index')->middleware('kullanici');
Route::view('login','login')->name('login')->middleware('kullanicioturum');
Route::view('register','register')->middleware('kullanicioturum');
Route::view('kontrol','kontrol')->middleware('kullanici');
Route::view('profil','profil')->middleware('kullanici');


Route::post('register',[Firebasecontroller::class,'kayit'])->name('kayit')->middleware('kullanicioturum');
Route::post('kontrol',[Firebasecontroller::class,'ekle'])->name('ekle')->middleware('kullanici');
Route::post('duzenlee',[Firebasecontroller::class,'guncelled'])->name('ekle1')->middleware('kullanici');

Route::post('profil',[Firebasecontroller::class,'guncelledd'])->name('guncel')->middleware('kullanici');

Route::post('login', [Firebasecontroller::class, 'giris'])->name('login')->middleware('kullanicioturum');
Route::get('index', [Firebasecontroller::class, 'anasayfa'])->name("anasayfa")->middleware('kullanici');
Route::get('cikis',[Firebasecontroller::class,'cikis'])->name("cikis");

Route::get('duzenle',[Firebasecontroller::class,'duzenle'])->name('duzenle')->middleware('kullanici');
Route::get('index',[Firebasecontroller::class,'index'])->name('home')->middleware('kullanici');

Route::get('profil',[Firebasecontroller::class,'profil'])->name('profil');


Route::get('onayla/{id}',[Firebasecontroller::class,'guncelle'])->middleware('kullanici');
Route::get('sil/{id}',[Firebasecontroller::class,'sil'])->middleware('kullanici');
