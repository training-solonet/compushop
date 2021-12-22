<?php

use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\User\DashboardController;
use App\Models\User;

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


Route::get('/',function(){
    return view('home');
});
Route::resource('barang',BarangController::class);
Route::resource('kategori',KategoriController::class);


Route::get('/regist', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

   if(User::user()->role == 'admin'){
       return redirect()->route('barang.index');
   }else{
       return view('home');
   }

})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/index', function () {
    return view('index');
})->name('index');


Route::resource('user',DashboardController::class);
