<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class patientController extends Controller
{
   public function acceuil(){
    return view('espace_patient.acceuil');
   }
   public function rendezVous(){
      return view('espace_patient.rendez-vous');
     }
}
