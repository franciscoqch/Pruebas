<?php

include("conexion.php");
$con=conectar();

$nickname1=$_POST['nickname'];
$nombre1=$_POST['nombre'];
$apellido1=$_POST['apellido'];
$direccion1=$_POST['direccion'];
$correo1=$_POST['correo'];

$sql="UPDATE proyecto.registro_usuario SET  nombre='$nombre1',apellido='$apellido1',direccion='$direccion1',correo='$correo1' WHERE nickname='$nickname1'";
$query=pg_query($con,$sql);

    if($query){
        Header("Location: registro.php");
    }
?>