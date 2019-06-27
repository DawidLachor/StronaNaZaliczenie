<?php
if(!isset($_SESSION)) {
    session_start();
}

$username = "lacdaw";
$password = "myaI3taUPsql";
$host = "localhost";
$dbName = "lacdaw";

$polaczenie = @new mysqli($host, $username, $password, $dbName);

if ($polaczenie->connect_errno){
    echo "<script>console.log('Brak polaczenia z baza');</script>";
    exit;
}
else {
    if (isset($_POST['zaloguj'])) {
        echo "<script>console.log('Polaczyles sie z baza danych');</script>";
        $_SESSION['przycisk']=$_POST['zaloguj'];
        $login = $_POST['login'];
        $password = $_POST['password'];

        if ($log = $polaczenie->query("SELECT * FROM konta WHERE login = '$login' AND haslo = '$password'")) {
            if ($log->num_rows > 0) {
                $_SESSION['zalogowany']=true;
                $wynik = $log->fetch_assoc();
                $_SESSION['Imie'] = $wynik['Imie'];
                $_SESSION['Nazwisko'] = $wynik['Nazwisko'];
                $_SESSION['Bilet'] = $wynik['Bilet'];
                $_SESSION['Miejscowosc'] = $wynik['Miejscowosc'];
                $_SESSION['telefon'] = $wynik['telefon'];
                $_SESSION['email'] = $wynik['email'];
                unset($_SESSION['blad']);
                header("Location:index.php");
                $log->close();
            } else {
                $_SESSION['blad'] = "<span>Nieprawidłowy login lub hasło</span>";
                header("Location:index.php");
                $log->close();
            }
        }
        $polaczenie->close();
    }
}
?>
