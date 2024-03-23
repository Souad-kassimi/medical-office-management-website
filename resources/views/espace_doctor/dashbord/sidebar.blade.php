<div class="main-container d-flex ">
    <div class="sidebar" id="side_nav">
        <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
            <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2">Dr.</span><span
                    class="text-dark">Samira Bekrit</span></h1>
            <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><img src="{{URL('/images/menu.png')}}" alt="c" class="img1"></button>
        </div>

        <ul class="list-unstyled px-2">
            <li class=""><a href="{{route('admin.index')}}" class="text-decoration-none px-3 py-2 d-block"><img src="{{URL('/images/home.png')}}" alt="c" class="img1 me-1"> Dashboard</a></li>
            <li class=""><a href="{{route('admin.create')}}" class="text-decoration-none px-3 py-2 d-block"><img src="{{URL('/images/list.png')}}" alt="c" class="img1 me-1"> Liste des patients</a></li>
            <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                    <span><img src="{{URL('/images/add (1).png')}}" alt="c" class="img1 me-1"> Ajouter patient</span>
                    
                </a>
            </li>
        </ul>
        <hr class="h-color mx-2">

        <ul class="list-unstyled px-2">
            <li class="">
                <a href="{{route('login.logout')}}" class="text-decoration-none px-3 py-2 d-block"><img src="{{URL('/images/logout.png')}}" alt="c" class="img1 me-1">
                    log out</a></li>

        </ul>

    </div>
    <div class="content">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
                <div class="d-flex justify-content-between d-md-none d-block">
                 <button class="btn px-1 py-0 open-btn me-2"><img src="{{URL('/images/menu.png')}}" alt="c" class="img1"></button>
                    <a class="navbar-brand fs-4" href="#"><span class="bg-dark rounded px-2 py-0 text-white">Dr Samira Bekrit</span></a>
                </div>
                <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fal fa-bars"></i>
                </button>
            </div>
        </nav>
    </div>
</div>
