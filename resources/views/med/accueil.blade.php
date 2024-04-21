@extends('med.Layout.base')
@section('title','Accueil')
    

@section('main')
    

		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				{{-- <div class="single-slider" style="background-image:url('img/slider2.jpg')"> --}}
				<div class="single-slider" style="background-image:url('images/expressive-young-woman-posing-studio.jpg')">

					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Nous Fournissons Des services <span> Médicaux </span>En Lesquels Vous Pouvez Avoir <span>Confiance!</span></h1>
									<p>Chez Cabinet Dr. Samira Bekrit, nous nous engageons à fournir des soins médicaux de confiance pour vous et vos proches. Notre équipe expérimentée est là pour répondre à tous vos besoins de santé.</p>
									<div class="button">
										<a href="{{ route('rendez-vous') }}" class="btn">Obtenir Un Rendez-vous</a>
										<a href="{{route('med.contact')}}" class="btn primary">Contact-nous</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				{{-- <div class="single-slider" style="background-image:url('img/slider.jpg')"> --}}
				<div class="single-slider" style="background-image:url('images/female.jpg')">

					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Nous Fournissons Des services <span> Médicaux </span>En Lesquels Vous Pouvez Avoir <span>Confiance!</span></h1>
									<p>Chez Cabinet Dr. Samira Bekrit, nous nous engageons à fournir des soins médicaux de confiance pour vous et vos proches. Notre équipe expérimentée est là pour répondre à tous vos besoins de santé.</p>
									<div class="button">
										<a href="{{ route('rendez-vous') }}" class="btn">Obtenir Un Rendez-vous</a>
										<a href="{{route('med.contact')}}" class="btn primary">Contact-nous</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start End Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('images/portrait-doctor.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Nous Fournissons Des services <span> Médicaux </span>En Lesquels Vous Pouvez Avoir <span>Confiance!</span></h1>
									<p>Chez Cabinet Dr. Samira Bekrit, nous nous engageons à fournir des soins médicaux de confiance pour vous et vos proches. Notre équipe expérimentée est là pour répondre à tous vos besoins de santé.</p>
									<div class="button">
										<a href="{{ route('rendez-vous') }}" class="btn">Prendre rendez-vous</a>
										<a href="{{route('med.contact')}}" class="btn primary">Contact-nous</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						
						<div class="col-lg-6 col-md-12 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content ">
										<h4>Heures d’ouverture</h4>
										<ul class="time-sidual">
											<li class="day">Lundi - Vendredi <span>9.00-.17.00</span></li>
											<li class="day">Samedi <span>9.00-12.00</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->
		<!-- <h2>We Are Always Ready to Help You & Your Family</h2> -->

		<!-- Start Why choose -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Nous Offrons Différents Services Pour Améliorer Votre Santé</h2>
							<img src="img/section-img.png" alt="#">
							<p>Chez Cabinet Dr. Samira Bekrit, nous nous engageons à fournir des services médicaux de qualité pour améliorer votre santé et votre bien-être.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>Qui Nous Sommes</h3>
							<p>
								Notre mission, au Cabinet Dr. Samira Bekrit, va bien au-delà de simplement fournir des soins médicaux.Nous aspirons à être bien plus qu'une simple clinique, 
								mais plutôt un refuge où nos patients se sentent compris, soutenus et pris en charge à chaque étape de leur parcours de santé. Nous nous engageons à offrir
								 une approche holistique et multidisciplinaire de la médecine, où nous prenons en compte tous les aspects de la santé de nos patients, y compris leur bien-être émotionnel, 
								 mental et social. 
							</p>
							<p>chaque patient est plus qu'un simple dossier médical ; il est un individu précieux et respecté, et nous nous efforçons de fournir des soins de la plus haute qualité avec compassion, 
								empathie et intégrité.
							</p>
							<!-- <div class="row">
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
										<li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
										<li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
										<li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
										<li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
									</ul>
								</div>
							</div> -->
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div >
								<!--/ End Video Animation -->
								<!-- <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a> -->
								<!-- End Images -->
								<img src="images/mission.jpg" alt="image">
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->
		
		<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5" id="consultation">
			<div class="">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>Consultation En Ligne</h2>
							<p>
								Chez le Cabinet Dr. Samira Bekrit, nous nous efforçons de rendre les soins de santé accessibles à tous, où que vous soyez. 
								Compte tenu des contraintes de temps et de distance auxquelles de nombreux patients sont confrontés, nous offrons désormais 
								des consultations en ligne. Que vous soyez coincé au travail, dans une autre ville, ou simplement préférez le confort de votre 
								domicile, notre service de consultation en ligne vous permet de recevoir des soins médicaux de qualité, à tout moment et en tout lieu.
								Il vous suffit de réserver votre séance en ligne et de sélectionner l'option de consultation virtuelle. De plus, pour votre commodité,
								nous avons simplifié le processus de paiement avec un bouton de paiement sécurisé disponible après la réservation de votre consultation.
								Une fois le paiement effectué, vous serez redirigé vers notre application de messagerie instantanée où vous pourrez discuter directement 
								avec le Dr. Samira ou son assistante pour organiser les détails de votre consultation en ligne.Votre santé est notre priorité, et nous sommes là
								pour vous fournir des soins médicaux de qualité, où que vous soyez.
							</p>
							<div class="button">
								<a href="#" class="btn">PAIEMENT</a>
								<!-- <a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
		
		<!-- Start service -->
		<section class="services section" id='services'>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Nous Offrons Différents Services Pour Améliorer Votre Santé</h2>
							<img src="img/section-img.png" alt="#">
							<p>Nous offrons une gamme de services médicaux spécialisés pour répondre à vos besoins de santé spécifiques</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i ><a href="" ><img src="{{url('images/stethoscope.png')}}" alt="image" style="{{'width:50px'}}"></a></i>
							<h4>Médecine Générale</h4>
							<p>Consultations et soins complets pour les problèmes de santé généraux. </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i ><img src="{{url('images/echocardiography.png')}}" alt="image" style="{{'width:50px'}}"> </i>
							<h4>Echographie Clinique</h4>
							<p>Diagnostic précis et rapide des conditions médicales.</p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i><img src="{{url('images/grief.png')}}" alt="image" style="{{'width:50px'}}"></i>
							<h4>Infertilité-stérilité du couple</h4>
							<p>Soutien et solutions pour les couples ayant des difficultés de fertilité. </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i ><img src="{{url('images/maternity.png')}}" alt="image" style="{{'width:50px'}}"></i>
							<h4>Gynécologie Médicale</h4>
							<p>Soins complets pour la santé reproductive des femmes.</p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i ><img src="{{url('images/medicine.png')}}" alt="image" id="colposcopie" style="{{'width:50px'}}"></i>
							<h4>Colposcopie</h4>
							<p>Évaluation des anomalies du col de l'utérus et recommandations de traitement.</p>	
						</div>
						<!-- End Single Service -->
					</div>
					
				</div>
			</div>
		</section>
		<!--/ End service -->
		
		<!-- Pricing Table -->
		<section class="pricing-table section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Nous Vous Fournissons Le Meilleur Traitement À Un Prix Raisonnable</h2>
							<img src="img/section-img.png" alt="#">
							<p>Découvrez des consultations médicales de qualité à des prix abordables chez Cabinet Dr. Samira Bekrit. Obtenez le meilleur traitement sans vous soucier de votre budget. </p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Single Table-->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i ><img src="{{url('images/echocardiography.png')}}" alt="image" style="{{'width:50px'}}"> </i>
								</div>
								<h4 class='title'>Echographie Clinique</h4>
								<div class="price">
									<p class="amount">300DH<span>/ Per Visit</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
								<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Nullam interdum enim</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Paiement</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i ><img src="{{url('images/medicine.png')}}" alt="image" id="colposcopie" style="{{'width:50px'}}"></i>
								</div>
								<h4 class="title">Colposcopie</h4>
								<div class="price">
									<p class="amount">300DH<span>/ Per Visit</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
								<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
								<li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Paiement</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i ><img src="{{url('images/maternity.png')}}" alt="image" style="{{'width:50px'}}"></i>
								</div>
								<h4 class="title">Gynécologie Médicale</h4>
								<div class="price">
									<p class="amount">250DH<span>/ Per Visit</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
								<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
								<li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
								<li><i class="icofont icofont-ui-check"></i>Donec ultricies metus</li>
								<li><i class="icofont icofont-ui-check"></i>Pellentesque eget nibh</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Paiement</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
				</div>	
			</div>	
		</section>	
		<!-- // End Pricing Table -->
		
		
		
		
		
		
		
		<!-- Footer Area -->
		
		<!--/ End Footer Area -->
	
        @endsection