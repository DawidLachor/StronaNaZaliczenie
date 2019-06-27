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
    if (isset($_POST['numtel'])) {
        $numertel = $_POST['numtel'];
        if($zapytanie = $polaczenie->query("UPDATE  lacdaw.konta SET  telefon =  '$numertel' WHERE  konta.id =$_SESSION[id]")){
            echo '<div class="alert fixed-bottom alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Udało się zmienić numer telefonu</strong> Masz nowe numer telefonu
                </div>';
        } else {
            echo '<div class="alert fixed-bottom alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Nie udało się zmienić numeru telefonu</strong> Spróbuj ponownie
                </div>';
        }
    }
}