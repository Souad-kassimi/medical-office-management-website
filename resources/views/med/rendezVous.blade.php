@extends('med.Layout.base')
@section('title','Rendez-vous')
@section('main')
   <!-- Start Appointment -->
		<section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title" >
							<h2>Nous sommes toujours prêts à vous aider. Prendre rendez-vous</h2>
							<img src="img/section-img.png" alt="#">
							<p>Nous sommes là pour vous offrir l'aide dont vous avez besoin. Prenez rendez-vous dès maintenant pour bénéficier de nos services exceptionnels</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
                        
                        @if ($errors->has('errors'))
                        <ul class="list-unstyled">
                            @foreach ($errors->get('errors') as $error)
                                @if ($error == 'Les rendez-vous ne sont pas disponibles les week-ends.' || $error == 'Désolé, Cette date est pas disponible' || $error == 'Le nombre maximum de rendez-vous pour cette date a été atteint. Veuillez réessayer plus tard.'||$error=='Désolé, vous ne pouvez pas prendre de rendez-vous pour une date passée.')
                                    <li class="alert alert-danger">{{$error}}</li>
                                @endif
                            @endforeach
                        </ul>
                        @endif 





						<form class="form" action="{{route('rendezVous')}}" method="POST" >
							@csrf
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="nom" type="text" value="{{old('nom')}}" placeholder="Nom">
										@error('nom')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="prenom" type="text" value="{{old('prenom')}}" placeholder="Prenom">
										@error('prenom')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="phone" type="text" value="{{old('phone')}}" placeholder="Telephone">
										@error('phone')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="cin" type="text" value="{{old('cin')}}" placeholder="CIN">
										@error('cin')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										
										<input name="ville" type="text" value="{{old('ville')}}" placeholder="Ville">
										@error('ville')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input type="date" placeholder="Date"  value="{{old('date_rendez_vous')}}" id="datepicker" name="date_rendez_vous">
										@error('date_rendez_vous')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-12">
								<div class="form-group">
										
										<select name="genre" value="{{old('genre')}}" class="nice-select form-control wide">
											<option value="" selected disabled>Genre</option>
											<option value="femme">Femme</option>
											<option value="homme">Homme</option>
										</select>
										@error('genre')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn">Prendre rendez-vous</button>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-8 col-12">
									<p>( Nous serons confirmées par un message texte )</p>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img src="img/contact-img.png" alt="#">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Appointment --> 
@endsection