<?php
$server = "localhost";
$user="root";
$pasword="";
$bd="riac";

$conection= mysqli_connect($server,$user,$pasword,$bd);
if($conection -> connect_errno  ){
die("Error al conectar la base de datos".$conection->connect_errno);

}

?>