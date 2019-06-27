<?php
$username="lacdaw";
$password="myaI3taUPsql";
$host="localhost";
$dbName="lacdaw";

$polaczenie=@new mysqli($host,$username,$password,$dbName);

if($polaczenie->connect_errno){
    echo "<script>console.log('Brak polaczenia z baza');</script>";
    exit;
}
else{
    echo "<script>console.log('Polaczyles sie z baza danych');</script>";
    if (isset($_POST['wyslij'])) {
        $name = $_POST['imie'];
        $email = $_POST['Email'];
        $thema = $_POST['temat'];
        $text = $_POST['text'];
        $wstawienie = $polaczenie->query("INSERT INTO lacdaw.wiadomosci(id, name, email, thema, message) VALUES ('', '$name', '$email', '$thema', '$text');");

        if ($wstawienie === false) {
            echo '<script>console.log("Zapytanie nie zostało wykonane poprawnie!");</script>';
            $polaczenie->close();
        } else {
            echo '<script>console.log("Zapytanie zostało wykonane poprawnie!");</script>';
            $wstawienie->close();
            $polaczenie->close();
        }
    }
}


?>