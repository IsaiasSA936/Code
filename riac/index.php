<?php
error_reporting(0);
include"include/conecta.php";
if(isset($_POST['btnIngresar'])){
    $UserSistem= "RiacDevelopers";
    $Password= "Admin506";
    $User=$_POST['usuario'];
    $Pass=$_POST['pasword'];
    /*verificar que se reciban los datos
    echo "El usuario es :".$User." Y su novia  es ".$Pass; */   

    if($UserSistem==$User and $Password==$Pass){
        $alerta.='<div class="alert alert-success alert-dismissible fade show" roler="alert">
        <strong>Holiiiii usuario de riax </strong> gg
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
        </div>';
    }
    else{
        $alerta.='<div class="alert alert-success alert-dismissible fade show" roler="alert">
        <strong>quien vergas eres </strong> jsjjs
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
        </div>' ;

    }
    
}

?>










<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Riac | Login</title>
</head>
<body class=" img-fluid" style="   background-image: url(img/polotno.jpeg);">
<div class="col-lg-6"></div>

<div class="container">

    <div class="row mt-3 col-lg-col-lg-12 ">
        <div class="justify-content-end mt2">
            <div class="col-sm-10 col-md-10 col-lg-10">
                <h1 class="text-end display-6">Riac | <span class="text-info">inicio de sesión</span></h1>
            </div>
        </div>
    </div>
    <section>
            <div class="row mt-2   ">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplate="off" >

                    <div class="row  justify-content-end mt-3 mb-1">
                        <div class="col-sm-8 col-md-8 col-lg-8">
                            <input type="text" name="usuario" id="usuario" placeholder="usuario" class="form-control rounded-pill border-info border-4 " >
                        </div>
                    </div>
                    <div class="row justify-content-end mt-2 mb-1">

                        <div class="col-sm-8 col-md-8 col-lg-8">
                            <input type="password" name="pasword" id="pasword" placeholder="cotraseña" class="form-control rounded-pill border-info border-4 ">
                        </div>
                        <div class="row mt-2 justify-content-end">
                            <div class="col-sm-8 col-md-8 col-lg-8">
                               <div class="d-grid gap-2">
                               <input type="submit" value="Ingresar" name="btnIngresar" class="btn btn-outline-primary bg-gradient">
                               </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </section>
 </div>



<script src="js/bootstrap.min.js" ></script>
</body>
</html>