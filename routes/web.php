<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/lnson-register', function (){
    return view('register');
});
Route::post('/lnson-register', [RegisterController::class, 'RegisterSubmit'])->name('register.submit');


Route::get('/lnson-login',[LoginController::class,'index'])->name('login.index');
Route::post('/lnson-login',[LoginController::class,'loginSubmit'])->name('login.submit');