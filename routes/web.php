<?php

use App\Http\Controllers\patientController;
use Illuminate\Support\Facades\Route;

Route::get('/',[patientController::class,'acceuil']);
Route::get('/rendezVous',[patientController::class,'rendezVous']);
