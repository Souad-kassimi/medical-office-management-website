<?php
use App\Http\Controllers\login;
use App\Http\Controllers\patientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/',function(){
    return view('med.accueil');
})->name('patient');

//routes de login
Route::get('/login',[login::class,'index'])->name('login.index');
Route::post('/login/singin',[login::class,'login'])->name('login.signin');
Route::get('/logout',[login::class,'logout'])->name('login.logout');

//rendez vous
Route::get('/rendez-vous',[patientController::class,'rendezVousPage'] )->name('rendez-vous');
Route::post('/rendezVous/ajouter',[patientController::class,'rendezVous'])->name('rendezVous');
Route::get('/rendez-vous/{id}',[patientController::class,'patientdata'] )->name('patient.data')->middleware('once');


//Route de Contact
Route::get('/contact', [ContactController::class,'showForm'])->name('med.contact');
Route::post('/contact', [ContactController::class,'submitForm'])->name('med.submitForm');




//dashboard without middleware
Route::get('/emails', [dashboardController::class,'MessageEmails'])->name('dashboard.emails');
Route::get('/dashboard',[dashboardController::class,'dashboard'])->name('dashboard');
Route::get('/patients',[dashboardController::class,'allpatients'])->name('dashboard.patients');
Route::delete('supprimerPatient/{id}',[dashboardController::class,'supprimerPatient'])->name('supprimerPatient');
Route::get('/settings',[dashboardController::class,'showdate'])->name('dashboard.settings');
Route::post('/addDate',[dashboardController::class,'addDate'])->name('dashboard.addDate');
Route::delete('/supprimerDate/{id}',[dashboardController::class,'supprimerDate'])->name('supprimerDate');
Route::post('/patientFitrer',[dashboardController::class,'search'])->name('patient.filtrer');





//dashboard with middleware
// Route::middleware('login')->group(function(){
//     Route::get('/emails', [dashboardController::class,'MessageEmails'])->name('dashboard.emails');

//     Route::get('/dashboard',[dashboardController::class,'dashboard'])->name('dashboard');
//     Route::get('/patients',[dashboardController::class,'allpatients'])->name('dashboard.patients');
//     Route::delete('supprimerPatient/{id}',[dashboardController::class,'supprimerPatient'])->name('supprimerPatient');


//     Route::get('/settings',[dashboardController::class,'showdate'])->name('dashboard.settings');
//     Route::post('/addDate',[dashboardController::class,'addDate'])->name('dashboard.addDate');
//     Route::delete('/supprimerDate/{id}',[dashboardController::class,'supprimerDate'])->name('supprimerDate');

//     Route::post('/patientFitrer',[dashboardController::class,'search'])->name('patient.filtrer');
// });






