@extends('med.dashbord.base')

@section('titre','Patients')
@section('dashboard')
<div class="table-data">
    <div class="order">
     <div class="head">
        @if (session()->get('success'))
        <h3>{{session()->get('success')}}</h3>
    @endif
            
        </div>
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
                {{-- @php
                $ide=1
                @endphp --}}
                @foreach ($patients as $patient)
                <tr>
                    {{-- <td>{{$ide}}</td> --}}
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
    </div>
@endsection