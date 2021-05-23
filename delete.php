<?php
include("conexion.php");
$con=conectar();

$nickname1=$_GET['id'];

$sql="DELETE FROM proyecto.registro_usuario  WHERE nickname='$nickname1'";
$query=pg_query($con,$sql);

    if($query){
        Header("Location: registro.php");
    }
?>
