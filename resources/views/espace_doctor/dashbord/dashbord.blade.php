@extends('espace_doctor.dashbord.contenu')
@section('titre')
Dashboard    
@endsection
@section('section')
        @if (session()->get('success'))
            <div class="alert alert-primary w-50 mb-2" >
                {{session()->get('success')}}
            </div>
        @endif
        <div class="row">    
            @foreach ($patientsfilter as $item)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-body-secondary">{{$item->tour}}</h6>
                      <h5 class="card-title">{{$item->prenom}} {{$item->nom}}</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="" class="btn btn-outline-danger">Supprimer</a>
                      
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
@endsection

