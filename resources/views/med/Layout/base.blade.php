<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>Dr Samira Bekrit| @yield('title','Cabinet')</title>
		
		<!-- Favicon -->
        <link rel="icon" href="{{asset('img/favicon.png')}}">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="{{asset('css/icofont.css')}}">
		<!-- Slicknav -->
		<link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('css/owl-carousel.css')}}">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{asset('css/datepicker.css')}}">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
		
    </head>
<body>

    @include('med.Layout.nav')    
  <main>
    @yield('main')
  </main>
    @include('med.Layout.footer')
   
</body>
</html>