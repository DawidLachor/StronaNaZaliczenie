<?php
$username="lacdaw";
$password="myaI3taUPsql";
$host="localhost";
$dbName="gazdom";

$polaczenie=mysqli_connect($host,$username,$password,$dbName);

if(!$polaczenie){
    echo "Brak polaczenia z baza <br>";
    exit;
}
else{
    echo "Polaczyles sie z baza danych";
}
?>