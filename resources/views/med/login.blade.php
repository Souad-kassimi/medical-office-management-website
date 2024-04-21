@extends('med.Layout.base')
@section('main')
	

		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Bonjour <strong>dr samira bekrit</strong></h2>
							<ul class="bread-list">
								<li><a href="index.html">Accueil</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Espace privé</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container">
				<div class="inner">
					<div class="row"> 
						<div class="col-lg-6">
							<div class="contact-us-left">
							
								<div id="loginImg"></div>
							
							</div>
						</div>
						<div class="col-lg-6">
							<div class="contact-us-form">
								<h2>Formulaire de connexion</h2>
								<p>Ce formulaire est réservé aux administrateurs.</p>
								<!-- Form -->
								<form class="form" method="POST" action="{{route('login.signin')}}">
                                    @csrf
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<input type="email" name="email" placeholder="Email" value="{{old('email')}}">
                                                @error('email')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
											</div>
										</div>
										
										<div class="col-lg-12">
											<div class="form-group">
												<input type="password" name="password" placeholder="Password" value="{{old('password')}}">
                                               
											</div>
										</div>
										
										
										<div class="col-12">
											<div class="form-group login-btn">
												<button class="btn" type="submit">Connecter</button>
											</div>
											{{-- <div class="checkbox">
												<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Do you want to subscribe our Newsletter ?</label>
											</div> --}}
										</div>
									</div>
								</form>
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
				
		<!--/ End Contact Us -->
		
		<!-- Footer Area -->
		
		
@endsection