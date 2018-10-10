<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-light">
            <i class="fas fa-align-left"></i>
            <span>Menú</span>
        </button>
        <button class="btn d-inline-block d-lg-none ml-auto bg-theme-blue" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                @auth()
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user"></i> {{Auth::user()->name}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link logout" href="#">Salir</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>

                @endauth
            </ul>
        </div>
    </div>
</nav>