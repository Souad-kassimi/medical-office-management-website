<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <title>Gestion De Cabinet Médicale|@yield('title')</title>
</head>
<body>

        @include('espace_patient.navbar')
  <main>
    @yield('main')
  </main>
    
   @include('espace_patient.footer')
</body>
</html>