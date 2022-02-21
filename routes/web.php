<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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
    return view('welcome');
});


Route::prefix('user')->name('user.')->group(function(){
  
    Route::middleware(['guest:web','guest:admin'])->group(function(){
        Route::view('/login','user.auth.login')->name('login');
        Route::post('/login',[LoginController::class ,'userLogin']);

        Route::view('/register','user.auth.register')->name('register');


        Route::get('/forgot-password',[ForgotPasswordController::class ,'request_otp_view'])->name('password.email');



        Route::get('/reset-password',[ResetPasswordController::class ,'resetPasswordView'])->name('password.reset');

    });

    Route::middleware(['auth:web'])->group(function(){
        Route::view('/dashboard','user.dashboard')->name('dashboard');
    });

});

require __DIR__.'/admin.php';

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

