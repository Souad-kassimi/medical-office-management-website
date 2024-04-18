@extends('espace_patient.index')
@section('title')
    Acceuil
@endsection
@section('main')

<div class="hero-section mb-4" >
       
    <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
      <h1>Bienvenue</h1>
      <p>Sur Cabinet Dr.Samira BEKRIT</p>
      <a href="{{route('rendezvous.index')}}" class="login-button">Prendre Rendez-Vous En Un Clin D'oeil</a>
  
    </div>
  </div>
<div class="about-section mb-4">
  <h1 class="text-center">Dr Samira Bekrit</h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="about-img">
                    <img src="{{URL('images/doctor2.jpg')}}" class="img-fluid rounded" alt="doctor">
                </div>

            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                <div class="about-text">
                   
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis numquam architecto sint dolor corrupti laboriosam harum porro error voluptas, deleniti voluptate enim veniam quis dolores doloribus est molestias. Exercitationem, error.</p>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="section-services mb-5">
    <h1 id="services">Services</h1>
    <div class="d-flex justify-content-evenly ">
    
      <div class="circle"><a href="" ><img src="{{url('images/stethoscope.png')}}" alt="image"></a><br>
      <span>Médecine Générale</span>
     </div>
      <div class="circle"><a href=""><img src="{{url('images/echocardiography.png')}}" alt="image"></a><br>
        <span>Echographie Clinique</span>
      </div>
      <div class="circle"><a href=""><img src="{{url('images/grief.png')}}" alt="image"></a><br>
        <span id="span-in">Infertilité-stérilité du couple</span>
      </div>
      <div class="circle"><a href=""><img src="{{url('images/maternity.png')}}" alt="image"></a><br>
        <span>Gynécologie Médicale</span>
      </div>
      <div class="circle"><a href=""><img src="{{url('images/medicine.png')}}" alt="image" id="colposcopie"></a><br>
        <span id="span-col">Colposcopie</span>
      </div>
      </div>         
    </div>
  </div>
  
  <div class="visitez-nous mb-4">
    <div class="container">
    <h1 class="text-center">Visitez-nous</h1>
        <div class="row">
            <div class="col-lg-4 col-md-8">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3370.9877544923183!2d-6.359070225655457!3d32.33903830624215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda3875163c6170f%3A0x2845535dbe855f9e!2sDr%20BEKRIT%20SAMIRA!5e0!3m2!1sen!2sma!4v1712868771623!5m2!1sen!2sma"  
              style="height: 300px;width:600px;border:solid white 1px;border-radius:15px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div class="paragraphe col-lg-8">
                    <p>Venez découvrir le cabinet médical du Dr. Samira Bekrit pour des consultations médicales, situé au 132,avenue des far Béni Mellal. Utilisez notre lien Google Maps pour nous trouver facilement. Nous sommes impatients de vous accueillir.</p> 
            </div>
        </div>
    </div>
  </div>



     

  
@endsection
