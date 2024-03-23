<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand me-auto " href="#">Dr.Samira BEKRIT <span class="fs-6 fw-light align-bottom">Cabinet Médicale</span></a>
     
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">DR.SAMIRA BEKRIT</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link mx-lg-2 active" aria-current="page" href="{{route('patient.create')}}">Acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 active" href="/patient/create/#services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-lg-2 active" href="#">Contactez-nous</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2 active" href="{{route('rendezvous.index')}}">Rendez-vous</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2 active" href="{{route('login.index')}}">Espace privé</a>
              </li>
              
           
          </ul>
        </div>
      </div>
      <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>