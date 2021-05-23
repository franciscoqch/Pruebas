<?php
include('db.php');
$nickname=$_POST['nickname'];
$correo=$_POST['correo'];
session_start();
$_SESSION['nickname']=$nickname;


$conexion=pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=1601");

$consulta="SELECT*FROM proyecto.registro_usuario where nickname='$nickname' and correo='$correo'";
$resultado=pg_query($conexion,$consulta);

$filas=pg_num_rows($resultado);

if($filas){
  
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
pg_free_result($resultado);
pg_close($conexion);
