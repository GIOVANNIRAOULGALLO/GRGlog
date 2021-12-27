<nav class="navbar navbar-expand-lg navbar-glog bg-main fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('homepage')}}"><img src="\img\logo.png" alt="Logo" height="50" width="120"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="tc-dark">MENU</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @guest
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('register')}}">Registrati</a>
                    
                </li>
                <li class="nav-item position-relative d-flex align-items-center">
                    <div class="vertical-divider"></div>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
                @endguest
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Benvenuto  {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu bg-main-dark w-100 text-center" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('userAccount')}}">Account</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{route('createCar')}}">Inserisci Auto</a></li>
                        <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a></li>
                        <form method="POST" action="{{route('logout')}}" id="form-logout">
                            @csrf
                        </form>
                    </ul>
                </li>
                @endauth
                <li class="nav-item position-relative d-flex align-items-center">
                    <div class="vertical-divider"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
                <li class="nav-item position-relative d-flex align-items-center">
                    <div class="vertical-divider"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('searchCar')}}">Search Car</a>
                </li>
            </ul>
        </div>
    </div>
</nav>