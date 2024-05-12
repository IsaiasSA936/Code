<?php
include "include/conecta.php";
 if(isset($_POST['boton']))
 {
    $nombre = $conecta->real_escape_string($_POST['nombre']);
    $ap = $conecta->real_escape_string($_POST['ap']);
    $am = $conecta->real_escape_string($_POST['am']);
    $correo = $conecta->real_escape_string($_POST['correo']);
    $contra = $conecta->real_escape_string($_POST['contra']);
    $edad = $conecta->real_escape_string($_POST['edad']);
    $tusuario = $conecta->real_escape_string($_POST['tusuario']);

    $inserta = "INSERT INTO usuarios(nombre, ap, am, correo, contra, edad, id_tusuario)
    VALUES ('$nombre', '$ap', '$am', '$correo', '$contra', '$edad', '$tusuario')";
    $ejecuta = $conecta->query($inserta);
    if($ejecuta > 0){
        echo "exito";
    }
    else{
        echo "no se registro";
    }
 }
?>