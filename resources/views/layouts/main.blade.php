<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>350ms Klub</title>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://github.hubspot.com/odometer/themes/odometer-theme-default.css" />
</head>

<body onload="myFunction()">
    
    <header>
        <div class="banner d-flex flex-row align-items-center">
            <img src="/images/logo.png" class="logo" alt="logo">
            <div class="title font-weight-bold">
                <h1> 350ms Klub </h1>
                <h2> by Gamers da Kour</h2>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg">

            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold" style="font-size: 20px;" href="/"><i class="fas fa-home"></i>Accueil </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold" style="font-size: 20px;" href="/events"> <i class="fas fa-calendar-check"></i>Evènements</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold" style="font-size: 20px;"
                            href="/suggestions"><i class="fas fa-file-signature"></i>Suggestions</a>
                    </li>
                </ul>
            </div>

            <div class="mx-auto order-0">
                <li class="nav-item active">        
                    <!-- <img src="/images/logo.png" class="logo navbrand-logo" alt="logo"> -->
                    <p class="d-md-block d-lg-none headresp">350ms Klub | GDK concept</p>
                </li>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <span class="navbar-toggler-icon"><i class="fas fa-angle-double-down"></i></span>
                </button>
            {{-- ELEMENTS NAV APPARAISSANT QU À L ADMIN --}}
            @auth
                @if (Auth::User() -> hasRole("Admin"))
                    <li class="nav-item active">
                        <a class="navbar-brand mx-auto font-weight-bold" href="/admin">
                            Page d'Administration</a>
                    </li>
                @endif
            @endauth          
            </div>

            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                @guest
                <li class="nav-item active">
                    <button type="button" class="btn btn-outline-primary">
                        <a class="nav-link font-weight-bold" style="font-size: 20px;" href="/login">Se connecter</a>
                    </button>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item active">
                        <button type="button" class="btn btn-outline-primary">
                            <a class="nav-link font-weight-bold" style="font-size: 20px;" href="/register">S'enregistrer</a>
                        </button>
                    </li>
                @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle font-weight-bold" style="font-size:20px" href="#"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> <i class="fas fa-gamepad"></i>
                            {{ Auth::user()->pseudo }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" style="font-size:20px" href="/profil">
                                {{ __('Accéder à votre profil') }}
                            </a>
                            <a class="dropdown-item" style="font-size:20px" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                {{ __('Se déconnecter') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                </ul>
            </div>

        </nav>
    </header>


    @yield('content')


    <footer>
        <p>Made with 💙 by GDK Enterprise © 2019 All rights reserved.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>