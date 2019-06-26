<?php

function wyswietllim($id){
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
        $zapytanie = $polaczenie ->query("SELECT Klodne, Mecina, Pisarzowa, Mordarka, Limanowa FROM cenniklim WHERE id = $id;");
        while ($row = mysqli_fetch_array($zapytanie, MYSQLI_ASSOC)){
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
        }
    }
}

function wyswietlns($id){
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
        $zapytanie = $polaczenie ->query("SELECT Mecina, Chomranice, Kleczany, Marcinkowice, Chelmiec, NowySacz FROM cennikns WHERE id = $id;");
        while ($row = mysqli_fetch_array($zapytanie, MYSQLI_ASSOC)){
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
        }
    }
}
?>