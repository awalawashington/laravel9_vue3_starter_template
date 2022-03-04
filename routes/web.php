<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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


Route::view('/','user.auth.login')->name('login');


Route::prefix('user')->name('user.')->group(function(){
  
    Route::middleware(['guest:web','guest:admin'])->group(function(){
        Route::view('/login','user.auth.login')->name('login');
        Route::post('/login',[LoginController::class ,'userLogin']);

        Route::view('/password_reset','user.auth.password_reset')->name('password_reset');
        Route::post('/password/email',[ForgotPasswordController::class ,'userPasswordEmail'])->name('password.email');
        Route::post('/password/code',[ForgotPasswordController::class ,'userPasswordCode'])->name('password.code');
        Route::put('/password/reset',[ResetPasswordController::class ,'userPasswordReset'])->name('password.reset');

        Route::view('/register','user.auth.register')->name('register');
        Route::post('/registration/email',[RegisterController::class ,'userRegistrationEmail'])->name('registration.email');
        Route::post('/registration/code',[RegisterController::class ,'userRegistrationCode'])->name('registration.code');
        Route::post('/registration/register',[RegisterController::class ,'register'])->name('registration.register');


        Route::get('/forgot-password',[ForgotPasswordController::class ,'request_otp_view'])->name('password.email');



        Route::get('/reset-password',[ResetPasswordController::class ,'resetPasswordView'])->name('password.reset');

    });

    Route::middleware(['auth:web'])->group(function(){
        Route::view('/dashboard','user.dashboard')->name('dashboard');
        Route::view('/category','user.category')->name('category');
        Route::view('/product','user.product')->name('product');
        Route::view('/cart','user.cart')->name('cart');
        Route::view('/checkout','user.checkout')->name('checkout');
    });

});

require __DIR__.'/admin.php';

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

