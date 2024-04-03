@extends('espace_patient.index')
@section('title')
Contactez-Nous
@endsection
<!-- <div class="mt-3"></div> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@section('main')
<link rel="stylesheet" href="{{asset('css/css.css')}}">
<div  class="contactez-nous" >
<div class=" p-3" ></div>
    <div class="container  col-lg-5 p-5 ">
            <form action="{{route('espace_patient.submitForm')}}" method="POST">
                @csrf
                    <div class="card mt-5 p-5 ">
                        <h1 class="text-center text">Contactez-nous</h1>
                        <div class="form-group mt-4  w-100 input-icon">
                            <i class="bi bi-person"></i>
                            <input type="text" class="form-control input " id="name" name="name" required  placeholder="NOM">
                        </div>
                        <div class="form-group mt-4  w-100 input-icon">
                            <i class="bi bi-envelope"></i>
                            <input type="text" class="form-control input " id="email" name="email" required placeholder="E-MAIL">
                        </div>
                        <div class="form-group mt-4  w-100 input-icon-msg">
                            <i class="bi bi-person"></i>
                            <textarea class="form-control input" id="message" name="message" rows="5" required placeholder="MESSAGE"></textarea>
                        </div>
                        <div class="mt-4 ps-3 ">
                        <button type="submit" class="btn  w-100 input ">ENVOYER</button>
                        <div>
                    </div>
            </form>
    </div>
</div>


</div>

</div>

@endsection

