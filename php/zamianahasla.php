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
    if (isset($_POST['lastpass']) && isset($_POST['newpass'])) {
        $lastpass = $_POST['lastpass'];
        $newpass = $_POST['newpass'];
        if ($spr = $polaczenie->query("SELECT *  FROM konta WHERE id = $_SESSION[id] AND haslo LIKE '$lastpass'")) {
            if ($spr->num_rows > 0) {
                if ($zapytanie = $polaczenie->query("UPDATE  lacdaw.konta SET  haslo =  '$newpass' WHERE  konta.id =$_SESSION[id]")) {
                    echo '<div class="alert fixed-bottom alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Udało się zmienić hasło</strong> Masz nowe hasło
                </div>';
                    unset($lastpass);
                    unset($newpass);
                } else {
                    echo '<div class="alert fixed-bottom alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Nie udało się zmienić hasło</strong> Spróbuj ponownie
                </div>';
                    unset($lastpass);
                    unset($newpass);
                }
            } else {
                echo '<div class="alert fixed-bottom alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Podane stare hasło</strong> nie jest poprawne
                </div>';
                unset($lastpass);
                unset($newpass);
            }
        }
    }
}