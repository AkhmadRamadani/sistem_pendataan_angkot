<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SopirController;
use App\Http\Controllers\AngkotController;
use App\Http\Controllers\PerjalananController;
use App\Http\Controllers\TrayekController;
use Illuminate\Http\Request;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'loggingOut']);

// Route::get('/login', function () {
//     return view('auth.login');
// });

Route::resource('sopir',  SopirController::class)->middleware('auth');
Route::resource('angkot',  AngkotController::class)->middleware('auth');


// Route::resource('angkot', AngkotController::class);
//Route::get('/angkot', function () {
//    return view('pages.angkot');
//});

Route::resource('trayek', TrayekController::class)->middleware('auth');
Route::resource('perjalanan', PerjalananController::class)->middleware('auth');
// Route::get('/perjalanan/print_surat_jalan/{id}', function (Request $request, $id) {
//     return 'User ' . $id;
// });
// Route::macro('perjalanan', function ($uri, $controller) {
//     Route::get("{$uri}/print_surat_jalan/{id}", "{$controller}@print_surat_jalan")->name("{$uri}.print_surat_jalan");
//     Route::resource($uri, $controller);
// });

Route::get("perjalanan/print_surat_jalan/{id}", [PerjalananController::class, 'print_surat_jalan'])->name("perjalanan.print_surat_jalan");

// Route::perjalanan('perjalanan', PerjalananController::class);

// Route::get('perjalanan/print_surat_jalan/{id}', 'App\Http\Controllers\PerjalananController@print_surat_jalan')->name('perjalanan.print_surat_jalan');
// Route::get('/perjalanan/print_surat_jalan/{id}', [PerjalananController::class, 'print_surat_jalan'])->middleware('auth');
// Route::get('/trayek', function () {
//     return view('pages.trayek');
// });
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
