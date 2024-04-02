@extends('espace_patient.index')
@section('title')
Rendez-Vous
@endsection
@section('main')
<div class="rendez-bg">
    <div class="container p-3">
        <div class="p-4 mt-5">
            @isset($dates_non_dispo)
            @if ($dates_non_dispo->isNotEmpty())
            <div class="mt-2">
                <h3>Voici les dates <strong class="text-danger">NON DISPONIBLES</strong></h3>
                <ul>
                    @foreach ($dates_non_dispo as $item)
                    <li>{{$item->date_pas_dispo}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @endisset

            @if ($errors->has('errors'))
            <ul class="list-unstyled">
                @foreach ($errors->get('errors') as $error)
                    @if ($error == 'Les rendez-vous ne sont pas disponibles les week-ends.' || $error == 'Désolé, Cette date est pas disponible' || $error == 'Le nombre maximum de rendez-vous pour cette date a été atteint. Veuillez réessayer plus tard.')
                        <li class="alert alert-danger">{{$error}}</li>
                    @endif
                @endforeach
            </ul>
            @endif

            <form action="{{route('rendezvous.store')}}" method="POST">
                @csrf
                <div class="card p-4" id="card">
                    <h1 class="text-center fw-bold">Prendre Rendez-Vous</h1>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" value="{{old('nom')}}" placeholder="Entrez votre Nom" class="form-control">
                            @error('nom')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" id="prenom" value="{{old('prenom')}}" placeholder="Entrez votre Prénom" class="form-control">
                            @error('prenom')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="Entrez votre email" class="form-control">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <label for="phone">Téléphone</label>
                            <input type="text" name="phone" id="phone" value="{{old('phone')}}" placeholder="Entrez votre Téléphone" class="form-control">
                            @error('phone')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <label for="cin">CIN</label>
                            <input type="text" name="cin" id="cin" value="{{old('cin')}}" placeholder="Entrez votre CIN" class="form-control">
                            @error('cin')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <label for="rendez-vous">Date de rendez-vous</label>
                            <input type="date" name="date_rendez_vous" id="rendez-vous" value="{{old('date_rendez_vous')}}"  class="form-control">
                            @error('date_rendez_vous')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <label for="ville">Ville</label>
                            <input type="text" name="ville" id="ville" value="{{old('ville')}}" placeholder="Entrez votre Ville" class="form-control">
                            @error('ville')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <label for="genre">Genre</label>
                            <select name="genre" id="genre" class="form-select">
                                <option value="">Choisissez genre</option>
                                <option value="femme" {{ old('genre') == 'femme' ? 'selected' : '' }}>Femme</option>
                                <option value="homme" {{ old('genre') == 'homme' ? 'selected' : '' }}>Homme</option>
                            </select>
                            @error('genre')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-sm-12 mt-3">
                            <button type="submit" class="form-control btn btn-outline-primary">Confirmer</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
