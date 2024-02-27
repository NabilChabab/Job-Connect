<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\OffreController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Auth\CompanyRegisterController;
use App\Http\Controllers\Auth\UserRegisterController;
use App\Http\Controllers\company\CompanyController as CompanyCompanyController;
use App\Http\Controllers\company\CompanyProfileController;
use App\Http\Controllers\company\JobOffreController;
use App\Http\Controllers\user\ProfileController;
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

//authentication
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('register', UserRegisterController::class);
Route::resource('companyRegister',CompanyRegisterController::class);
Route::get('/getStarted', [App\Http\Controllers\GetStartedController::class,'index'])->name('getStarted');

//users
Route::prefix('user')->group(function(){
    Route::resource('profile',ProfileController::class);

});

//admin
Route::prefix('admin')->group(function () {
    Route::resource('dashboard', AdminController::class);
    Route::resource('users', UserController::class);
    Route::resource('companies', CompanyController::class);
    Route::resource('offres' , OffreController::class);
});

Route::prefix('company')->group(function () {
    Route::resource('home', CompanyCompanyController::class);
    Route::resource('companyprofile',CompanyProfileController::class);
    Route::resource('job_offres', JobOffreController::class);
});

// Route::prefix('jobOffre')->group(function () {
//     Route::resource('home', CompanyCompanyController::class);
//     Route::resource('companyprofile',CompanyProfileController::class);
// });



//company
// Route::resource('company',CompanyController::class);



