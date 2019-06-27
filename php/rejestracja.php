<?php
if (!isset($_SESSION)) {
    session_start();
}

$username = "lacdaw";
$password = "myaI3taUPsql";
$host = "localhost";
$dbName = "lacdaw";

$polaczenie = @new mysqli($host, $username, $password, $dbName);

if ($polaczenie->connect_errno) {
    echo "<script>console.log('Brak polaczenia z baza');</script>";
    exit;
} else {
    if (isset($_POST['zarejestruj'])) {
        echo "<script>console.log('Polaczyles sie z baza danych');</script>";
        $_SESSION['zarejestruj'] = $_POST['zarejestruj'];
        $login = $_POST['log'];
        $password = $_POST['pass'];
        $email = $_POST['email'];
        $imie = $_POST['name'];
        $nazwisko = $_POST['subname'];
        $miejscowosc = $_POST['land'];
        $tel = $_POST['tel'];
        if ($log = $polaczenie->query("SELECT * FROM  konta WHERE  login LIKE  '$login'")) {
            if (isset($log) && $log ->num_rows > 0) {
                echo '<div class="alert fixed-bottom alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Oszczezenie!</strong> Podany login juz istnieje podaj inny
                </div>';
            }
            else{
                if ($zapis = $polaczenie->query("INSERT INTO lacdaw.konta (id, login, haslo, Imie, Nazwisko, Bilet, Miejscowosc, telefon, email) VALUES (NULL, '$login', '$password', '$imie', '$nazwisko', '0' , '$miejscowosc', '$tel', '$email');")){
                    echo '<div class="alert fixed-bottom alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Udana rejestracja</strong> Masz załozone konto
                    </div>';

                } else{
                    echo '<div class="alert fixed-bottom alert-info alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Nie udało się zarejestrować</strong> Spróbuj ponownie lub skontaktuj się z nami
                    </div>';

                }
            }
        }


    }
}
