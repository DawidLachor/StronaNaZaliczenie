<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tel.css">
    <link rel="stylesheet" href="css/cennik.css">

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
                <li class="nav-item"><a href="cennik.php" class="nav-link menu">Cennik</a></li>
                <li class="nav-item"><a href="kontakt.php" class="nav-link menu">Kontakt</a></li>
                <li class="nav-item "><a href="#" class="nav-link menu logowanie">Zaloguj się</a></li>
            </ul>
        </div>

    </nav>

    <div class="zdjecie"></div>

    <h3>Cenniki</h3>
    <?php include 'php/cennik.php' ?>

    <h4>Męcina-Nowy Sącz</h4>
    <div class="tab-content table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Męcina</th>
                <th scope="col">Chomranice</th>
                <th scope="col">Klęczany</th>
                <th scope="col">Marcinkowice</th>
                <th scope="col">Chełmiec</th>
                <th scope="col">Nowy Sącz</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Męcina</th>
                <?php wyswietlns(1); ?>
            </tr>
            <tr>
                <th scope="row">Chomranice</th>
                <?php wyswietlns(2); ?>
            </tr>
            <tr>
                <th scope="row">Klęczany</th>
                <?php wyswietlns(3); ?>
            </tr>
            <tr>
                <th scope="row">Marcinkowice</th>
                <?php wyswietlns(4); ?>
            </tr>
            <tr>
                <th scope="row">Chełmiec</th>
                <?php wyswietlns(5); ?>
            </tr>
            <tr>
                <th scope="row">Nowy Sącz</th>
                <?php wyswietlns(6); ?>
            </tr>
            </tbody>
        </table>
    </div>

    <h4>Kłodne-Limanowa</h4>
    <div class="tab-content table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Kłodne</th>
                <th scope="col">Męcina</th>
                <th scope="col">Pisarzowa</th>
                <th scope="col">Mordarka</th>
                <th scope="col">Limanowa</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Kłodne</th>
                <?php wyswietllim(1); ?>

            </tr>
            <tr>
                <th scope="row">Męcina</th>
                <?php wyswietllim(2); ?>
            </tr>
            <tr>
                <th scope="row">Pisarzowa</th>
                <?php wyswietllim(3); ?>
            </tr>
            <tr>
                <th scope="row">Mordarka</th>
                <?php wyswietllim(4); ?>
            </tr>
            <tr>
                <th scope="row">Limanowa</th>
                <?php wyswietllim(5); ?>
            </tr>
            </tbody>
        </table>
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
</header>
</body>
</html>