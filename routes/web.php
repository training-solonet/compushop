<?php

use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [DashboardController::class, 'index']);

// Route::get('/single', function () {
//     return view('single-product');
// });

Route::get('/regist', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/cari', function () {
    return view('search');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('user');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('redirects', [LoginController::class, 'index']);

    Route::middleware(['onlyAdmin'])->group(function () {
        Route::get('admin', function () {
            return view('barang.index');
        });

        Route::resource('barang',BarangController::class);
        Route::resource('kategori',KategoriController::class);

    });
});

Route::resource('user', DashboardController::class);
Route::resource('keranjang', KeranjangController::class)->middleware('auth');
Route::get('/search', [DashboardController::class, 'search'])->name('search');
