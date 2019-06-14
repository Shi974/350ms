<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>350ms Klub</title>

    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">

</head>
<style>
    .banner {

        border: 2px solid #ea0001;
        width: 100%;
        height: 20%;
        background-image: url("/images/bg.jpg");
        background-position: center;

    }

    .logo {
        width: 5%;
        height: 35%;
    }

    h1 {
        font-family: 'Comfortaa', cursive;
        font-size: 60px;
        color:  #0972c9;
    }

    h2 {
        font-family: 'Comfortaa', cursive;
        font-size: 35px;
        color: #ea0001;
    }

    h3 {
        font-family: 'Comfortaa', cursive;
        color: #ea0001;

    }

    .intro {
        font-family: 'Comfortaa', cursive;
    }

    nav {

        background-color: #000000;

    }

    .nav-link{
        font-family: 'Comfortaa', cursive;
        color: #0972c9 !important; 

    }

    .nav-item{
        font-family: 'Comfortaa', cursive;
        color: #0972c9 !important; 
    }
    .navbar{
       color: #000000;
    }


    .liste{
        font-family: 'Comfortaa', cursive;
        color: #ea0001;
        font-size: 25px;
    }

    
    footer{
        width: 100%;
        height: 10%;
        background-color: #000000;
        position: fixed;
        left: 0;
        bottom: 0;
        font-family: 'Comfortaa', cursive;
        color:#0972c9;
    }

</style>

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
                <a class="nav-link font-weight-bold" style="font-size: 20px;" href="welcome">Accueil </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link font-weight-bold" style="font-size: 20px;" href="Events">Evènements</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link font-weight-bold" style="font-size: 20px;" href="suggestions">Suggestions</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">


            <li class="nav-item">
                <button type="button" class="btn"> <a class="font-weight-bold" style="font-size: 20px;"
                        href="login">Se connecter</a></button>
            </li>

            <li class="nav-item">
                <button type="button" class="btn"> <a class="font-weight-bold" style="font-size: 20px;"
                        href="register">S'enregistrer</a></button>
            </li>

        </ul>

    </nav>


</header>



<body>



    @yield('content')

</body>





<footer>
<p>mentions légales : © Copyright 2019 GDK Enterprise </p>


</footer>
</html>
