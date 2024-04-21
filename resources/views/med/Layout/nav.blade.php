
    <header class="header" id='home' >
    
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-12">
                    
                        <ul class="top-link">
                            <li><a href="{{route('patient')}}">Accueil</a></li>
                            <li><a href="{{ route('rendez-vous') }}">Rendez-vous</a></li>
                            <li><a href="{{route('med.contact')}}">Contactez-nous</a></li>
                          
                        </ul>
                       
                    </div>
                    <div class="col-lg-6 col-md-7 col-12">
                     
                        <ul class="top-contact">
                            <li><i class="fa fa-phone"></i>05 23 48 20 10</li>
                            <li><i class="fa fa-envelope"></i>drbekritsamira@gmail.com</li>
                        </ul>
                       
                    </div>
                </div>
            </div>
        </div>
       

        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                
                            <div class="logo">
                                <a href="#"><img src="{{url('img/favicon1.png')}}" alt="#"><span  class="font-weight-bold text-dark">Cabinet Dr Samira Bekrit</span></a>
                            </div>
                            
                            <div class="mobile-nav"></div>
                       
                        </div>
                        <div class="col-lg-7 col-md-9 col-12">
                 
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li ><a href="{{route('patient')}}">Accueil</a></li> 
                                        <li><a href="/#services">Services</a></li>               
                                        <li><a href="/#consultation">Consultation en ligne</i></a></li>
                                        <li><a href="{{route('med.contact')}}">Contactez-nous</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="get-quote">
                                <a href="{{ route('rendez-vous') }}" class="btn">Rendez-vous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>