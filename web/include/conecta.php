<?php
$bd = "piolin";
$host = "localhost";
$user = "root";
$pass = "";
$conecta = mysqli_connect($host, $user, $pass, $bd);
if ($conecta->connect_errno){
    die("error, no se pudo.connect_errorMysqli");
}
?>