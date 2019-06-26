<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tel.css">
    <link rel="stylesheet" href="css/kontakt.css">

    <link rel="shortcut icon" href="image/logo.png">

    <title>Transport-Busem Wójcik Tadeusz</title>
</head>
<body>
<header>
    <nav class="navbar navbar-dark fixed-top navbar-expand-lg bg-dark">

        <a href="index.html" class="navbar-brand "><img src="image/logo.png" class="mr-1" alt=""> Transport-Busem Wójcik
            Tadeusz</a>

        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#mainMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="mainMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.html" class="nav-link menu">Start</a></li>
                <li class="nav-item"><a href="rozklad.html" class="nav-link menu">Rozkład jazdy</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link menu">O nas</a></li>
                <li class="nav-item"><a href="cennik.html" class="nav-link menu">Cennik</a></li>
                <li class="nav-item"><a href="kontakt.html" class="nav-link menu">Kontakt</a></li>
                <li class="nav-item "><a href="#" class="nav-link menu logowanie">Zaloguj się</a></li>
            </ul>
        </div>

    </nav>
</header>

<div class="zdjecie"></div>
<div class="container-fluid bg-light">
    <div class="row">
        <article class="col-lg-4 offset-1">
            <h2>Kontakt z nami</h2>
            <h4>Transport-Busem</h4>
            <p>Wójcik Tadeusz</p>
            <p>Męcina 586</p>
            <p>34-654 Męcina</p>
            <p>tel. kom: 509 515 799</p>
            <p>tel: 18 332 70 70</p>
            <p>email: <a href="mailto:TransportBusowWojcik@gmail.com">TransportBusowWojcik@gmail.com</a></p>
        </article>

        <div class="col-lg-5">
            <form action="kontakt.html" method="post">
                <div class="form-group">
                    <label for="name">Imie i nazwisko:</label>
                    <input type="text" id="name" class="form-control" placeholder="Jan Nowak">
                </div>
                <div class="form-group">
                    <label for="email">Adres email:</label>
                    <input type="text" id="email" class="form-control" placeholder="Adres email">
                </div>
                <div class="form-group">
                    <label for="temat">Temat:</label>
                    <input type="text" id="temat" class="form-control" placeholder="Temat wiadomości">
                </div>
                <div class="form-group">
                    <label for="text">Treść:</label>
                    <textarea id="text" class="form-control" rows="4" placeholder="Wpisz treść"></textarea>
                </div>
                <button type="submit" class="btn btn-dark">Wyślij</button>
            </form>
            <?php include "php/folmularz.php" ?>
        </div>

    </div>
</div>

<div id="map-container" class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2581.201784699269!2d20.5496818!3d49.6881728!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473df774d77c152b%3A0x84f39ad4888964cd!2sTransport-Busem+W%C3%B3jcik+Tadeusz!5e0!3m2!1spl!2spl!4v1561403528702!5m2!1spl!2spl"
           width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>


<footer class="bg-dark">
    <span class="text-light d-inline">&copy; Wszystkie prawa zastrzezone</span>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>