@extends('med.dashbord.base')
@section('titre','Filtrer')
@section('dashboard')
<div class="table-data">
    <div class="order">

        @if($patients->isEmpty())
        <div class="head">
            <p>Aucun patient trouvé.</p>
        </div>
        @else
            
       
        <table>
            <thead>
                <tr>
                  
                    <th>Nom Compléte</th>
                    <th>Cin</th>
                    <th>Date</th>
                    <th>Ville</th>
                    <th>Genre</th>
                    <th>Téléphone</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
              
                @foreach ($patients as $patient)
                <tr>
                    
                    <td>{{$patient->prenom}} {{$patient->nom}}</td>
                    <td>{{$patient->cin}}</td>
                    <td>{{$patient->date_rendez_vous}}</td>
                    <td>{{$patient->ville}}</td>
                    <td>{{$patient->genre}}</td>
                    <td>{{$patient->phone}}</td>
                    <td><form action="{{route('supprimerPatient',$patient->id)}}" method="POST" >
                        @csrf
                        @method('delete')
                        <button type="submit" class="status pending">Supprimer</button>
                        </form></td>
                </tr>
                @endforeach
              
            </tbody>
        </table>
        @endif
    </div>
@endsection