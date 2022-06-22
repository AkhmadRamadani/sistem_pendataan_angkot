<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SopirController;
use App\Http\Controllers\AngkotController;

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

Route::resource('sopir',  SopirController::class)->middleware('auth');;
Route::resource('angkot',  AngkotController::class)->middleware('auth');;

Route::get('/perjalanan', function () {
    return view('pages.perjalanan');
});

// Route::get('/angkot', function () {
//     return view('pages.angkot');
// });

Route::get('/trayek', function () {
    return view('pages.trayek');
});
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
