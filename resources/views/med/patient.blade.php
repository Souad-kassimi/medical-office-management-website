@extends('med.Layout.base')
@section('title','patient')

@section('main')

<section class="schedule mt-5 p-5">
    <div class="container">
        <div class="schedule-inner">
            <div class="row">
                
                <div class="col-lg-12 col-md-12 col-12 ">
                    <!-- single-schedule -->
                    <div class="single-schedule last">
                        <div class="inner">
                            <div class="icon">
                                <i class="icofont-ui-clock"></i>
                            </div>
                            <div class="single-content ">
                                <h4>Numéro: {{ $patient->tour }}</h4>
                                <ul class="time-sidual">
                                    
                                    <li class="day"><i class="fa fa-user"></i> Nom Compléte:<span class="font-weight-bold  text-capitalize">{{ $patient->prenom }} {{ $patient->nom }}</span></li>
                                    <li class="day"><i class="fa fa-calendar"></i> Date:<span>{{ $patient->date_rendez_vous }}</span></li>
                               
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection