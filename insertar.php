<?php
include("conexion.php");
$con=conectar();

$nickname1=$_POST['nickname'];
$nombre1=$_POST['nombre'];
$apellido1=$_POST['apellido'];
$direccion1=$_POST['direccion'];
$correo1=$_POST['correo'];



$sql="INSERT INTO proyecto.registro_usuario VALUES('$nickname1','$nombre1','$apellido1','$direccion1','$correo1')";
$query= pg_query($con,$sql);

if($query){
    Header("Location: index.html");
    
}else {
}
?>


