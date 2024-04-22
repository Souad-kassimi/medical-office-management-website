<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\dates_non_dispoController;
use App\Http\Controllers\login;
use App\Http\Controllers\patientController;
use App\Http\Controllers\rendezvousController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Route::get('/',function(){
//     return view('espace_patient.acceuil');
// });
Route::get('/',function(){
    return view('med.accueil');
})->name('patient');
//routes de patient
// Route::resource('patient',patientController::class);
// Route::get('/patient',[patientController::class,'patientAcceuil'])->name('patient');
//routes de rendez-vous
// Route::resource('rendezvous',rendezvousController::class);
//routes de login
Route::get('/login',[login::class,'index'])->name('login.index');
Route::get('/logout',[login::class,'logout'])->name('login.logout');
Route::post('/login/singin',[login::class,'login'])->name('login.signin');


//routes de admin
Route::resource('admin',adminController::class)->middleware('auth');
Route::resource('admin',adminController::class)->middleware('sign');


//routes de dates
// Route::resource('dateNonDispo',dates_non_dispoController::class);
//routes de contact

// Route::post('/contact/store',[ContactController::class,'submitForm'])->name('med.submitForm');
// Route::get('/emails', [ContactController::class,'MessageEmails'])->name('med.dashbord.emails');

<<<<<<< HEAD
Route::get('/contact', [ContactController::class,'showForm'])->name('med.contact');

Route::get('/rendez-vous',[patientController::class,'rendezVousPage'] )->name('rendez-vous');
Route::post('/rendezVous/ajouter',[patientController::class,'rendezVous'])->name('rendezVous');

Route::get('/dashboared',[login::class,'dashbord']);

Route::get('/patient/{id}',[patientController::class,'patientdata'])->name('patient.data');
=======
Route::get('/rendez-vous',[patientController::class,'rendezVousPage'] )->name('rendez-vous');
Route::post('/rendezVous/ajouter',[patientController::class,'rendezVous'])->name('rendezVous');
//Route de Contact
Route::get('/contact', [ContactController::class,'showForm'])->name('med.contact');
Route::post('/contact', [ContactController::class,'submitForm'])->name('med.submitForm');
Route::get('/emails', [ContactController::class,'MessageEmails'])->name('med.dashbord.emails');


>>>>>>> bbfe6d4ae1c6a2673879647bc6ab2838db45d34d
