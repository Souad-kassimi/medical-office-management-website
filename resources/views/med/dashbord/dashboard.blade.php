@extends('med.dashbord.base')
@section('titre','Dashboard')
@section('dashboard')
<div class="todo">


	<div class="head">
		<h3>Les rendez-vous d'Aujourdhui</h3>
	</div>
 
    <ul class="box-info">
            @foreach ($patientsfilter->sortBy('tour') as $item)
				<li>
                    
					<span class="text">
						<span id="monBouton" class="status pending" >{{$item->tour}}</span>
						<h3>{{$item->prenom}} {{$item->nom}} </h3>
						<p>CIN: {{$item->cin}}, Ville: {{$item->ville}}</p>
						<p>{{$item->date_rendez_vous}}</p>
						

					</span>
				</li>
            @endforeach			
    </ul>
</div>
<script>
   
    var boutons = document.querySelectorAll('.pending');

  
    boutons.forEach(function(bouton) {
        bouton.addEventListener('click', function() {
          
            bouton.classList.toggle('active');
        });
    });
</script>


@endsection
    