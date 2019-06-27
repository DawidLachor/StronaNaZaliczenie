<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['zalogowany'])) {
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
<?php include "php/zamianahasla.php"?>
<!--Zmiana hasła-->
<div class="modal fade" id="haslo" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="h5haslo">Zmiana hasłą</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="konto.php" method="post">
                    <div class="form-group">
                        <label for="lastpass">Stare hasło:</label>
                        <input type="text" class="form-control" id="lastpass" name="lastpass" placeholder="Stare hasło" required>
                    </div>
                    <div class="form-group">
                        <label for="newpass">Nowe Hasło:</label>
                        <input type="password" class="form-control" id="newpass" name="newpass" placeholder="Nowe hasło" required>
                    </div>

                    <button type="submit" name="zmhasla" class="btn btn-dark">Zmien hasło</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "php/zmianatel.php"?>
<!--Zmiana telefonu-->
<div class="modal fade" id="zmianatel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="h5tel">Podaj nowy numer telefonu</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="konto.php" method="post">
                    <div class="form-group">
                        <label for="numtel">Podaj nowy numer telefonu:</label>
                        <input type="text" class="form-control" id="numtel" name="numtel" placeholder="Nowy numer telefonu" required>
                    </div>
                    <button type="submit" name="zmtel" class="btn btn-dark">Zmień numer telefonu</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "php/zamianamiejscowosci.php"?>
<!--Zamiana miejscowosci-->
<div class="modal fade" id="miejs" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="h5tmiejs">Podaj nowy numer telefonu</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="konto.php" method="post">
                    <div class="form-group">
                        <label for="miej">Podaj nową miejscowość</label>
                        <input type="text" class="form-control" id="miej" name="miej" placeholder="Nowy numer telefonu" required>
                    </div>
                    <button type="submit" name="zmmiej" class="btn btn-dark">Zmień miejscowość</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Zdjęcie-->
<div class="zdjecie"></div>

<!--Ciało-->
<div class="container-fluid bg-light">

    <div class="row">

        <!--            Ustawienia-->
        <div class="col-md-4 col-lg-4 offset-lg-2">
            <h3>Ustawienia</h3>
            <ul>
                <li>
                    <button type="button" class="btn btn-danger av-link menu przycisk" data-toggle="modal" data-target="#haslo">Zmień hasło</button>
                </li>
                <li>
                    <button type="button" class="btn btn-danger av-link menu przycisk" data-toggle="modal" data-target="#zmianatel">Zmień numer telefonu</button>
                </li>
                <li>
                    <button type="button" class="btn btn-danger av-link menu przycisk" data-toggle="modal" data-target="#miejs">Zmień miejscowość</button>
                </li>
            </ul>
        </div>

<!--        Czy masz wazny bilet-->
        <div class="wraper col-md-8 col-lg-4 d-flex align-content-center flex-wrap">
                <div class="d-flex flex-column">
                    <h3 class="p-0">Witaj <?php echo $_SESSION['Imie'] . " " . $_SESSION['Nazwisko'] ?></h3>
                    <p class="p-0 miesieczny">Twój bilet miesięczny jest <span class="font-weight-bold"><?php
                        if ($_SESSION['Bilet'] == 1) {
                            echo "ważny";
                        } else {
                            echo "nie ważny";
                        } ?>
                    </span></p>
                </div>
            </div>


        </div>

    </div>
</div>

<!--Footer-->
<footer class="bg-dark">
    <span class="text-light d-inline">&copy; Wszystkie prawa zastrzezone</span>
</footer>

<!--Script-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>