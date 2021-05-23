<?php

include("conexion.php");
$con=conectar();

$jueg_id=$_POST['jueg_id'];
$cat_juego=$_POST['cat_juego'];
$plat_juego=$_POST['plat_juego'];
$nomb_juego=$_POST['nomb_juego'];
$precio=$_POST['precio'];

$sql="UPDATE proyecto.juegos SET  cat_juego='$cat_juego',plat_juego='$plat_juego',nomb_juego='$nomb_juego',precio='$precio' WHERE jueg_id='$jueg_id'";
$query=pg_query($con,$sql);

    if($query){
        Header("Location: añadir_juegos.php");
    }
?>