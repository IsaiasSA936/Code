<?php 
include "include/conecta.php";
include "include/Acciones.php";
include "include/query.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lolaso</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="nombre" id="nombre">
        <input type="text" name="ap" id="ap">
        <input type="text" name="am" id="am">
        <input type="email" name="correo" id="mail">
        <input type="password" name="contra" id="contra">
        <input type="date" name="edad" id="edad">
        <select name="tusuario">
            <option selected>selecciona un tipo de usuario</option>
            <?php
            while($col=$ecol->fetch_assoc()){?>
                <option value="<?php echo $col['id_tusuario'];?>"><?php echo $col['nombret'] ?></option>
                <?php
            }?>
        </select>
        <input type="submit" value="REGISTRAR" id="boton">
    </form>
</body>
</html>