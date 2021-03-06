<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
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

        <a href="index.php" class="navbar-brand "><img src="image/logo.png" class="mr-1" alt=""> Transport-Busem Wójcik
            Tadeusz</a>

        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#mainMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="mainMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.php" class="nav-link menu">Start</a></li>
                <li class="nav-item"><a href="rozklad.php" class="nav-link menu">Rozkład jazdy</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link menu">O nas</a></li>
                <li class="nav-item"><a href="cennik.php" class="nav-link menu">Cennik</a></li>
                <li class="nav-item"><a href="kontakt.php" class="nav-link menu">Kontakt</a></li>
                <?php if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true) {
                    echo '<li class="nav-item dropdown"><a href="#" class="nav-link menu dropdown-toggle" id="konto" data-toggle="dropdown">Konto</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="konto.php">Konto</a>
                              <a class="dropdown-item" href="php/logout.php">Wyloguj</a>
                            </div>
                        </li>';
                } else {
                    echo '<li class="nav-item "><button type="button" class="btn btn-danger av-link menu logowanie" data-toggle="modal" data-target="#logowanie">
                    Zaloguj się
                </button></li>';
                }
                ?>
            </ul>
        </div>

    </nav>
</header>
<?php include "php/logowanie.php" ?>
<!-- Modal Logowanie -->
<div class="modal fade" id="logowanie" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logine">Logowanie</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="login">Login:</label>
                        <input type="text" class="form-control" id="login" name="login" placeholder="Login">
                    </div>
                    <div class="form-group">
                        <label for="password">Hasło:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Hasło">
                        <?php
                        if (isset($_SESSION['blad'])) {
                            echo $_SESSION['blad'];
                        }
                        ?>
                    </div>

                    <button type="submit" name="zaloguj" class="btn btn-dark">Zaloguj</button>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <p class="message">Nie masz konta, utwórz konto za darmo</p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rejestracja">
                    Rejestracja
                </button>

            </div>
        </div>
    </div>
</div>
<?php include "php/rejestracja.php"?>
<!-- Modal Rejestracja -->
<div class="modal fade" id="rejestracja" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rej">Rejestracja</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="log">Login:</label>
                        <input type="text" class="form-control" id="log" name="log" placeholder="Login">
                    </div>
                    <div class="form-group">
                        <label for="pass">Hasło:</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Hasło">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="name">Imie:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Imie">
                    </div>
                    <div class="form-group">
                        <label for="subname">Nazwisko:</label>
                        <input type="text" class="form-control" id="subname" name="subname" placeholder="Nazwisko">
                    </div>
                    <div class="form-group">
                        <label for="land">Miejscowosc:</label>
                        <input type="text" class="form-control" id="land" name="land" placeholder="Miejscowosc">
                    </div>
                    <div class="form-group">
                        <label for="tel">Telefon:</label>
                        <input type="number" class="form-control" id="tel" name="tel" placeholder="XXXXXXXXX">
                    </div>
                    <button type="submit" name="zarejestruj" class="btn btn-dark">Zarejestruj</button>
                </form>
            </div>
        </div>
    </div>
</div>

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
            <form action="kontakt.php" method="post">
                <div class="form-group">
                    <label for="name">Imie i nazwisko:</label>
                    <input type="text" id="imie" name="imie" class="form-control" placeholder="Jan Nowak">
                </div>
                <div class="form-group">
                    <label for="email">Adres email:</label>
                    <input type="text" id="Email" name="Email" class="form-control" placeholder="Adres email">
                </div>
                <div class="form-group">
                    <label for="temat">Temat:</label>
                    <input type="text" id="temat" name="temat" class="form-control" placeholder="Temat wiadomości">
                </div>
                <div class="form-group">
                    <label for="text">Treść:</label>
                    <textarea id="text" class="form-control" name="text" rows="4" placeholder="Wpisz treść"></textarea>
                </div>
                <button type="submit" name="wyslij" class="btn btn-dark">Wyślij</button>
            </form>

        </div>
        <?php include "php/folmularz.php" ?>

    </div>
</div>

<div id="map-container" class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2581.201784699269!2d20.5496818!3d49.6881728!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473df774d77c152b%3A0x84f39ad4888964cd!2sTransport-Busem+W%C3%B3jcik+Tadeusz!5e0!3m2!1spl!2spl!4v1561403528702!5m2!1spl!2spl"
            allowfullscreen></iframe>
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