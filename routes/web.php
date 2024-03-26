<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\dates_non_dispoController;
use App\Http\Controllers\login;
use App\Http\Controllers\patientController;
use App\Http\Controllers\rendezvousController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('welcome');
});
//routes de patient
Route::resource('patient',patientController::class);
//routes de rendez-vous
Route::resource('rendezvous',rendezvousController::class);

//routes de admin
Route::resource('admin',adminController::class)->middleware('auth');
//routes de login
Route::post('/login/singin',[login::class,'login'])->name('login.signin');
Route::get('/login',[login::class,'index'])->name('login.index');
Route::get('/logout',[login::class,'logout'])->name('login.logout');
//routes de dates
Route::resource('dateNonDispo',dates_non_dispoController::class);



