<?php
if(!isset($_SESSION)) {
    session_start();
}
if(!isset($_SESSION['zalogowany'])){
    header('Location:index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/tel.css">
    <link rel="stylesheet" href="css/konto.css">

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
                    echo '<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" id="konto" data-toggle="dropdown">Konto</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="konto.php">Konto</a>
                              <a class="dropdown-item" href="php/logout.php">Wyloguj</a>
                            </div>
                        </li>';
                } else {
                    echo '<li class="nav-item "><a href="#" class="nav-link menu logowanie">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#logowanie">Zaloguj się
                    </button>
                </a></li>';
                }
                ?>
            </ul>
        </div>

    </nav>
</header>

<div class="zdjecie"></div>
<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-lg-5">
            <h3>Ustawienia</h3>
            <ul>
                li
            </ul>
        </div>

        <div class="col-lg-5">
            <h3>Witaj <?php echo $_SESSION['Imie'].", ".$_SESSION['Nazwisko']?></h3>
            <p>Twój bilet miesięczny jest <?php
                if($_SESSION['Bilet']==1){
                    echo "ważny";
                }else{
                    echo "nie ważny";
                } ?>
            </p>


        </div>

    </div>
</div>
<div class="text">
    <h3>Witaj <?php echo $_SESSION['Imie'].", ".$_SESSION['Nazwisko']?></h3>
    <p>Twój bilet miesięczny jest <?php
        if($_SESSION['Bilet']==1){
            echo "ważny";
        }else{
            echo "nie ważny";
        } ?>
    </p>


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