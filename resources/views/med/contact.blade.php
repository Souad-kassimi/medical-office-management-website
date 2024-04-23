@extends('med.Layout.base')
@section('main')
	

		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Contact-nous</h2>
							<ul class="bread-list">
								<li><a href="{{route('patient')}}">Acceuil</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Contact-nous</li>
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
								<!--Start Google-map -->
								<div id="myMap">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3370.9877544923183!2d-6.359070225655457!3d32.33903830624215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda3875163c6170f%3A0x2845535dbe855f9e!2sDr%20BEKRIT%20SAMIRA!5e0!3m2!1sen!2sma!4v1712868771623!5m2!1sen!2sma"  
									style="height: 520px;width:600px;border:solid white 1px;border-radius:15px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								<!--/End Google-map -->
							</div>
						</div>
						<div class="col-lg-6">
							<div class="contact-us-form">
							<h2>Contactez-nous</h2>
								<p>Si vous avez des questions, n’hésitez pas à nous contacter.</p>
								<!-- Form -->
								<form class="form" method="POST" action="{{route('med.submitForm')}}">
									@csrf
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="name" placeholder="Nom" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="email" name="email" placeholder="Email" required="">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="message" placeholder="Message" required=""></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group login-btn">
												<button class="btn" type="submit">Envoyer</button>
											</div>
										</div>
									</div>
								</form>
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
				<div class="contact-info">
					<div class="row">
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3>05 23 48 20 10</h3>
									<p>drbekritsamira@gmail.com</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont-google-map"></i>
								<div class="content">
									<h3>132,Avenue des far </h3>
									<p>Béni Mellal ,Maroc</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-wall-clock"></i>
								<div class="content">
									<h3>Lundi au Samdi: 8h - 17h</h3>
									<p>Dimanche fermé</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact Us -->
		
		
@endsection