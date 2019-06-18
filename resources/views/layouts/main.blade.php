<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>350ms Klub</title>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div class="banner d-flex flex-row align-items-center">
            <img src="/images/logo.png" class="logo" alt="logo">

            <div class="title font-weight-bold">
                <h1> 350ms Klub </h1>
                <h2> by Gamers da Kour</h2>
            </div>

        </div>

        <nav class="navbar navbar-expand-lg">



            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" style="font-size: 20px;" href="/">Accueil </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" style="font-size: 20px;" href="events">Evènements</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" style="font-size: 20px;" href="formulaire-suggestions">Suggestions</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">


                <li class="nav-item">
                    <button type="button" class="btn btn-outline-primary"> <a class="font-weight-bold" style="font-size: 20px;"
                            href="login">Se connecter</a>
                    </button>
                </li>

                <li class="nav-item">
                    <button type="button" class="btn btn-outline-primary"> <a class="font-weight-bold" style="font-size: 20px;"
                            href="register">S'enregistrer</a>
                    </button>
                </li>

            </ul>

        </nav>


    </header>







    @yield('content')







    <footer>
        <p>mentions légales : © Copyright 2019 GDK Enterprise </p>


    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</body>

</html>
