<?php
function wyswietlKloLim(){
    $username="lacdaw";
    $password="myaI3taUPsql";
    $host="localhost";
    $dbName="lacdaw";
    $polaczenie=@new mysqli($host,$username,$password,$dbName);
    if($polaczenie->connect_errno){
        echo "<script>console.log('Brak polaczenia z baza');</script>";
        exit;
    }
    else {
        echo "<script>console.log('Polaczyles sie z baza danych');</script>";
        $polaczenie->query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
        $polaczenie->query("SET CHARSET utf8");
        $zapytanie = $polaczenie ->query("SELECT kurs, Klodne, Mecina, Pisarzowa, Mordarka, Limanowa FROM klolim;");
        while ($row = mysqli_fetch_array($zapytanie, MYSQLI_ASSOC)){
            echo "<tr>";
            echo "<td>";
            echo $row['kurs'];
            echo "</td>";
            echo "<td>";
            echo $row['Klodne'];
            echo "</td>";
            echo "<td>";
            echo $row['Mecina'];
            echo "</td>";
            echo "<td>";
            echo $row['Pisarzowa'];
            echo "</td>";
            echo "<td>";
            echo $row['Mordarka'];
            echo "</td>";
            echo "<td>";
            echo $row['Limanowa'];
            echo "</td>";
            echo "</tr>";
        }
        $zapytanie->close();
    }
}
function wyswietlLimKlo(){
    $username="lacdaw";
    $password="myaI3taUPsql";
    $host="localhost";
    $dbName="lacdaw";
    $polaczenie=@new mysqli($host,$username,$password,$dbName);
    if($polaczenie->connect_errno){
        echo "<script>console.log('Brak polaczenia z baza');</script>";
        exit;
    }
    else {
        echo "<script>console.log('Polaczyles sie z baza danych');</script>";
        $polaczenie->query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
        $polaczenie->query("SET CHARSET utf8");
        $zapytanie = $polaczenie ->query("SELECT kurs, Klodne, Mecina, Pisarzowa, Mordarka, Limanowa FROM limklo;");
        while ($row = mysqli_fetch_array($zapytanie, MYSQLI_ASSOC)){
            echo "<tr>";
            echo "<td>";
            echo $row['kurs'];
            echo "</td>";
            echo "<td>";
            echo $row['Limanowa'];
            echo "</td>";
            echo "<td>";
            echo $row['Mordarka'];
            echo "</td>";
            echo "<td>";
            echo $row['Pisarzowa'];
            echo "</td>";
            echo "<td>";
            echo $row['Mecina'];
            echo "</td>";
            echo "<td>";
            echo $row['Klodne'];
            echo "</td>";
            echo "</tr>";
        }
        $zapytanie->close();
    }
}
function wyswietlMecNS(){
    $username="lacdaw";
    $password="myaI3taUPsql";
    $host="localhost";
    $dbName="lacdaw";
    $polaczenie=@new mysqli($host,$username,$password,$dbName);
    if($polaczenie->connect_errno){
        echo "<script>console.log('Brak polaczenia z baza');</script>";
        exit;
    }
    else {
        echo "<script>console.log('Polaczyles sie z baza danych');</script>";
        $polaczenie->query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
        $polaczenie->query("SET CHARSET utf8");
        $zapytanie = $polaczenie ->query("SELECT kurs, Mecina, Chomranice, Kleczany, Marcinkowice, Chelmiec, NowySacz FROM mecns;");
        while ($row = mysqli_fetch_array($zapytanie, MYSQLI_ASSOC)){
            echo "<tr>";
            echo "<td>";
            echo $row['kurs'];
            echo "</td>";
            echo "<td>";
            echo $row['Mecina'];
            echo "</td>";
            echo "<td>";
            echo $row['Chomranice'];
            echo "</td>";
            echo "<td>";
            echo $row['Kleczany'];
            echo "</td>";
            echo "<td>";
            echo $row['Marcinkowice'];
            echo "</td>";
            echo "<td>";
            echo $row['Chelmiec'];
            echo "</td>";
            echo "<td>";
            echo $row['NowySacz'];
            echo "</td>";
            echo "</tr>";
        }
        $zapytanie->close();
    }
}
function wyswietlNSMec(){
    $username="lacdaw";
    $password="myaI3taUPsql";
    $host="localhost";
    $dbName="lacdaw";
    $polaczenie=@new mysqli($host,$username,$password,$dbName);
    if($polaczenie->connect_errno){
        echo "<script>console.log('Brak polaczenia z baza');</script>";
        exit;
    }
    else {
        echo "<script>console.log('Polaczyles sie z baza danych');</script>";
        $polaczenie->query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
        $polaczenie->query("SET CHARSET utf8");
        $zapytanie = $polaczenie ->query("SELECT kurs, Mecina, Chomranice, Kleczany, Marcinkowice, Chelmiec, NowySacz FROM nsmec;");
        while ($row = mysqli_fetch_array($zapytanie, MYSQLI_ASSOC)){
            echo "<tr>";
            echo "<td>";
            echo $row['kurs'];
            echo "</td>";
            echo "<td>";
            echo $row['NowySacz'];
            echo "</td>";
            echo "<td>";
            echo $row['Chelmiec'];
            echo "</td>";
            echo "<td>";
            echo $row['Marcinkowice'];
            echo "</td>";
            echo "<td>";
            echo $row['Kleczany'];
            echo "</td>";
            echo "<td>";
            echo $row['Chomranice'];
            echo "</td>";
            echo "<td>";
            echo $row['Mecina'];
            echo "</td>";
            echo "</tr>";
        }
        $zapytanie->close();
    }
}
?>