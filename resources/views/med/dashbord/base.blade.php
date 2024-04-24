<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   
	<link rel="icon" href='img/favicon.png'>
	
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('/dash/style.css')}}">

	<title>DR.SAMIRA BEKRIT|@yield('titre','Dashboard')</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bx-plus-medical'></i>
			<span class="text">Dr.Samira Bekrit</span>
		</a>
		<ul class="side-menu top">
			<li class="{{ Route::is('dashboard') ? 'active' : '' }}">
				<a href="{{route('dashboard')}}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="{{ Route::is('dashboard.patients') ? 'active' : '' }}">
				<a href="{{route('dashboard.patients')}}">
					<i class='bx bxs-group' ></i>
					<span class="text">Patients</span>
				</a>
			</li>
			<li class="{{ Route::is('rendez-vous') ? 'active' : '' }}">
				<a href="{{route('rendez-vous')}}">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Rendez-Vous</span>
				</a>
			</li>
			<li class="{{ Route::is('dashboard.emails') ? 'active' : '' }}">
				<a href="{{route('dashboard.emails')}}">
					<i class='bx bxs-envelope'></i>
					<span class="text">Emails</span>
				</a>
			</li>
			
		</ul>
		<ul class="side-menu">
			<li class="{{ Route::is('dashboard.settings') ? 'active' : '' }}">
				<a href="{{route('dashboard.settings')}}">
					<i class='bx bxs-cog' ></i>
					<span class="text">Paramétre</span>
				</a>
			</li>
			<li>
				<a href="{{route('login.logout')}}" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Déconnecter</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Patients</a>
			<form action="{{route('patient.filtrer')}}" method="POST">
				@csrf
				<div class="form-input">
					<input type="search" placeholder="Search..." name="search">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			{{-- <a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a> --}}
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>@yield('titre')</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active">@yield('titre')</a>
						</li>
					</ul>
				</div>
				{{-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> --}}
			</div>

			@yield('dashboard')
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="{{asset('/dash/script.js')}}"></script>
</body>
</html>