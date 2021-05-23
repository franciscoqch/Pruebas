<?php
include("conexion.php");
$con=conectar();

$jueg_id=$_GET['id'];

$sql="DELETE FROM proyecto.juegos  WHERE jueg_id='$jueg_id'";
$query=pg_query($con,$sql);

    if($query){
        Header("Location: añadir_juegos.php");
    }
?>
