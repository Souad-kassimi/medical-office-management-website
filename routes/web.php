<?php

use App\Http\Controllers\patientController;
use Illuminate\Support\Facades\Route;

Route::get('/',[patientController::class,'acceuil']);
