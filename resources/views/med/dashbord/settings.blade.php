@extends('med.dashbord.base')
@section('titre','Paramétre')
@section('dashboard')
<div class="todo">
    <div class="head">
        
       <form action="{{route('dashboard.addDate')}}" method="POST">
        @csrf
        <h3>Ajouter les date non disponible</h3> 
        <div class="form-input">
            <input type="date" name="date_pas_dispo" placeholder="Entrer date...">
            <button type="submit" class="search-btn"><i class='bx bx-plus'></i></button>
        </div>
    </form>
    <form action="{{route('rendezVous')}}" method="POST">
        @csrf
        <h3>Augmenter le nombre des rendez-vous:</h3> 
        <div class="form-input">
            <input type="text" name="count" placeholder="Entrer Nombre default 20...">
            <button type="submit" class="search-btn"><i class='bx bx-recycle'></i></button>
        </div>
        @if (session()->get('success'))                    
        <span class="span-session">{{session()->get('success')}} </span>
        @endif
    </form>
    </div>
    <ul class="todo-list">
        
        @foreach ($dates->sortBy('tour') as $date)
            <li>
                    <h3> {{$date->date_pas_dispo}} </h3>
                    <form action="{{route('supprimerDate',$date->id)}}" method="POST" >
                        @csrf
                        @method('delete')
                        <button type='submit'><i class='bx bx-message-square-x' ></i></button>
                    </form>
                    
            </li>
        @endforeach			
</ul>
</div>
@endsection