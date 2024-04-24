<?php

namespace App\Http\Controllers;
use App\Models\patient;
use App\Models\dates_non_dispo;
use Carbon\Carbon;
use App\Models\Email;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard(){
        $today = Carbon::today();
        $patientsfilter = patient::whereDate('date_rendez_vous', '=', $today)->get();
        return view('med.dashbord.dashboard')->with('patientsfilter',$patientsfilter);

    }


    public function MessageEmails()
    {
        $emailsBD=Email::paginate(10);
        return view('med.dashbord.emails',['emailsBD'=>$emailsBD]);
    }


    public function allpatients(){
        $patients= patient::paginate(10);
        
        return view('med.dashbord.patients')->with('patients',$patients);
    }


    public function supprimerPatient($id)
    {
        $patient=patient::findOrFail($id);
        $patient->delete();
        return redirect()->route('dashboard.patients')->with('success','les donnees sont supprimer avec succes');
    }


    public function showdate(){
        $dates=dates_non_dispo::all();
       return view('med.dashbord.settings')->with('dates',$dates);
    }


    public function addDate(Request $request){
        $dates=$request->validate([
            'date_pas_dispo'=>'required|date'
        ]);
        dates_non_dispo::create($dates);
        return redirect()->route('dashboard.settings')->with('successdates', 'Les dates ont été ajoutées avec succès.');

    }

    public function supprimerDate($id){
        $date=dates_non_dispo::findOrFail($id);
        $date->delete();
        return redirect()->route('dashboard.settings')->with('success','les donnees sont supprimer avec succes');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $patients = patient::where('nom', 'like', "%$searchTerm%")->get();
        return view('med.dashbord.patientFiltrer', ['patients' => $patients, 'searchTerm' => $searchTerm]);
    }
}
