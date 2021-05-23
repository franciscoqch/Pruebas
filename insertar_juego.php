<?php
include("conexion.php");
$con=conectar();

$jueg_id=$_POST['jueg_id'];
$cat_juego=$_POST['cat_juego'];
$plat_juego=$_POST['plat_juego'];
$nomb_juego=$_POST['nomb_juego'];
$precio=$_POST['precio'];

$name='pro_'.md5(date('d-m-Y H:m:s')).'.jpg';
$destino='image/'.$name;        
$move=move_uploaded_file($_FILES["foto_juego"]["tmp_name"], $destino);
echo $_FILES["foto_juego"]["tmp_name"];


$sql="INSERT INTO proyecto.juegos VALUES(default,'$cat_juego','$plat_juego','$nomb_juego','$precio','$name')";
$query= pg_query($con,$sql);

if($query){
    Header("Location: añadir_juegos.php");
    
}else {
}
?>





