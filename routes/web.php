<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\dates_non_dispoController;
use App\Http\Controllers\login;
use App\Http\Controllers\patientController;
use App\Http\Controllers\rendezvousController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('espace_patient.acceuil');
});
//routes de patient
Route::resource('patient',patientController::class);
//routes de rendez-vous
Route::resource('rendezvous',rendezvousController::class);
//routes de login
Route::get('/login',[login::class,'index'])->name('login.index');
Route::get('/logout',[login::class,'logout'])->name('login.logout');
Route::post('/login/singin',[login::class,'login'])->name('login.signin');


//routes de admin
// Route::resource('admin',adminController::class)->middleware('auth');
Route::resource('admin',adminController::class)->middleware('sign');


//routes de dates
Route::resource('dateNonDispo',dates_non_dispoController::class);
//routes de contact
Route::get('/contact', [ContactController::class,'showForm'])->name('espace_patient.contact');
Route::post('/contact/store',[ContactController::class,'submitForm'])->name('espace_patient.submitForm');
Route::get('/emails', [ContactController::class,'MessageEmails'])->name('espace_doctor.dashbord.emails');

Route::get('/index',function(){
    return view('med.index');
});
Route::get('/conta',function(){
    return view('med.conta');
});




