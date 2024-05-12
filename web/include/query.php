<?php 
include "include/conecta.php";
$consulta = "SELECT * FROM tusuarios";
$ecol = $conecta->query($consulta);
?>