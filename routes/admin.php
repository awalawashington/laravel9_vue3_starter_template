<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;

Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin', 'guest:web'])->group(function(){
          Route::view('/login','admin.auth.login')->name('login');
          Route::post('/login',[LoginController::class ,'adminLogin'])->name('check');

          Route::view('/password_reset','admin.auth.password_reset')->name('password_reset');
          Route::post('/password/email',[ForgotPasswordController::class ,'adminPasswordEmail'])->name('password.email');
          Route::post('/password/code',[ForgotPasswordController::class ,'adminPasswordCode'])->name('password.code');
          Route::put('/password/reset',[ResetPasswordController::class ,'adminPasswordReset'])->name('password.reset');
    });

    Route::middleware(['auth:admin'])->group(function(){
        Route::view('/dashboard','admin.dashboard')->name('dashboard');
        Route::post('/logout',[LoginController::class,'adminLogout'])->name('logout');
        Route::view('/settings','admin.settings')->name('settings');  
        Route::put('/settings/account',[SettingsController::class,'updateAccount'])->name('settings.account');
        Route::put('/settings/profile',[SettingsController::class,'updateProfile'])->name('settings.profile');
        Route::put('/settings/password',[SettingsController::class,'updatePassword'])->name('settings.password');

        Route::get('users/index', function () {
            return view('admin.users.index');
        })->name('users.index');

        Route::get('/users',[UserController::class ,'index'])->name('users');

        Route::get('users/view', [UserController::class ,'edit'])->name('users.view');

        Route::get('users/create', [UserController::class ,'create'])->name('users.create');
        Route::post('/users',[UserController::class ,'store']);

        Route::get('users/edit/{id}', [UserController::class ,'edit']);
        Route::put('/users/{id}',[UserController::class ,'update']);

        Route::delete('/users/{id}',[UserController::class ,'destroy']);
    });

});
