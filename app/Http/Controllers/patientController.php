<?php

namespace App\Http\Controllers;

use App\Models\dates_non_dispo;
use App\Models\patient;
use Carbon\Carbon;
use Illuminate\Http\Request;

class patientController extends Controller
{
    public function patientAcceuil()
    {
        
        return view('med.accueil');
        
    }
    public function rendezVousPage() {
        $dates_non_dispo=dates_non_dispo::all();
        return view('med.rendezVous')->with('dates_non_dispo',$dates_non_dispo);
       
    }

    public function rendezVous(Request $request){
        
        if ($request->filled('count')) {
    
            session(['count' => (int)$request->input('count')]);
            return redirect()->route('dashboard.settings')->with('success','Le nombre changer  avec succes');
        }
    
        $data = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'phone' => 'required',
            'cin' => 'required',
            'ville' => 'required',
            'genre' => 'required',
            'date_rendez_vous' => 'required|date',
        ]);
        
        


        $count = session('count',20);
        $dateRendezVous = $data['date_rendez_vous'];
      
        $appointmentsCount = patient::where('date_rendez_vous', $data['date_rendez_vous'])->count();
        $dateObj = \Carbon\Carbon::createFromFormat('Y-m-d', $dateRendezVous);
        $date_non_dispo = dates_non_dispo::where('date_pas_dispo', $dateRendezVous)->exists();
        $dateActuelle = Carbon::now()->format('Y-m-d');
        if ($dateRendezVous < $dateActuelle) {
            
            return 'hello';
        }
       
        if ($date_non_dispo) {
            return back()->withErrors(['errors'=>'Désolé, Cette date est pas disponible'])->withInput();
        }

        if ($dateObj->dayOfWeek === 0 || $dateObj->dayOfWeek === 6) {
            
            return back()->withErrors(['errors'=>'Les rendez-vous ne sont pas disponibles les week-ends.'])->withInput();
        }
        else{
            if ($appointmentsCount >= $count) {
                return back()->withErrors(['errors'=>'Le nombre maximum de rendez-vous pour cette date a été atteint. Veuillez réessayer plus tard.'])->withInput();
            }else{
                $lastTour = patient::where('date_rendez_vous', $data['date_rendez_vous'])->max('tour');
      
                $data['tour'] = $lastTour + 1;
        
              
                $patient=patient::create($data);
                return redirect()->route('patient.data', ['id' => $patient->id]);

        
        
            }
        }  
    }
    public function patientdata( $id)
    {
        $patient = patient::findOrFail($id);
        return view('med.patient')->with('patient',$patient);
    }

   

}
