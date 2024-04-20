<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Dr Samira Bekrit| @yield('title','Cabinet')</title>
		

       
        <link rel="icon" href='img/favicon.png'>
		
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
  @section('name')
      
  @show
    @include('med.Layout.footer')
  <!-- jquery Min JS -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- jquery Migrate JS -->
<script src="{{asset('js/jquery-migrate-3.0.0.js')}}"></script>
<!-- jquery Ui JS -->
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<!-- Easing JS -->
<script src="{{asset('js/easing.js')}}"></script>
<!-- Color JS -->
<script src="{{asset('js/colors.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap Datepicker JS -->
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<!-- Jquery Nav JS -->
<script src="{{asset('js/jquery.nav.js')}}"></script>
<!-- Slicknav JS -->
<script src="{{asset('js/slicknav.min.js')}}"></script>
<!-- ScrollUp JS -->
<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
<!-- Niceselect JS -->
<script src="{{asset('js/niceselect.js')}}"></script>
<!-- Tilt Jquery JS -->
<script src="{{asset('js/tilt.jquery.min.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('js/owl-carousel.js')}}"></script>
<!-- counterup JS -->
<script src="js/jquery.counterup.min.js"></script>
<!-- Steller JS -->
<script src="js/steller.js"></script>
<!-- Wow JS -->
<script src="js/wow.min.js"></script>
<!-- Magnific Popup JS -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Counter Up CDN JS -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<!-- Google Map API Key JS -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>
<!-- Gmaps JS -->
<script src="js/gmaps.min.js"></script>
<!-- Map Active JS -->
<script src="js/map-active.js"></script>
<!-- Bootstrap JS -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Main JS -->
<script src="js/main.js"></script> 
    
</body>
</html>