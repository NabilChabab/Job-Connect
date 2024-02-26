<?php

use App\Http\Controllers\Auth\CompanyRegisterController;
use App\Http\Controllers\Auth\UserRegisterController;
use App\Http\Controllers\company\CompanyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('register', UserRegisterController::class);

Route::resource('companyRegister',CompanyRegisterController::class);
Route::get('/getStarted', [App\Http\Controllers\GetStartedController::class,'index']);


//company
Route::resource('company',CompanyController::class);



