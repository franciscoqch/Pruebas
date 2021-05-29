<?php
include("conexion.php");
$con=conectar();
$sql="SELECT * FROM proyecto.juegos";
$query=pg_query($con,$sql);

$row=pg_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="ccs/style.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Inicio</title>
    <style>
    .fotoe{
    border-radius:50%;}
    @media (min-width: 992px){
        .col-lg-4 {
        flex: 0 0 25%;
        max-width: 33.33333%;
        margin: initial;
        }
    }
    .hola {
    width: 150px;
    height: 150px;
    align-self: center;
    }
    .principal{
    margin-right:5%;
    margin-left:5%; 
    font-size:50px;   

    }
    .card{
        margin-top:20px;
        background-image:;
       
    }
    .card-body{
        font-size: x-large;
        margin-top:10px;
    }
    .row.mempleado{
        text-align-last: center;
    }
    </style>

</head>
<body style="background-image:url(fondo.jpg); background-size: cover; ">
<nav class="navbar navbar-expand-lg navbar-light bg-light"  style="background-image:url(fondo.jpg);">
  <div class="container-fluid">
  <a class="navbar-brand" href="home.php">
      <img src="http://localhost/Pruebas/IMG/Logo%20PW.png" alt="" width="65" height="55">
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="añadir_juegos.php">Añadir Juegos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="usuarios_registrados.php">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">Salir</a>
        </li>       
      </ul>
    </div>
  </div>
</nav>
<div><th><a href="reporte_juegos.php"   class="btn btn-warning " target="_blank">Imprimir Reporte</a></th></div>
<br>
<h1 style="text-align: center;">Videojuegos Recientes</h1>
<br>
<div class="row mempleado">
            <?php
                while($row=pg_fetch_array($query)){
            ?>
                <div class="col-lg-4 col-md-6 col-sm-8">
                  
                    <div class="card" style="background-image:url(http://localhost/Pruebas/image/<?= $row['foto_juego'];?>);background-size: cover;background-repeat: no-repeat;">
                     
                    <br>
                    
                        <div class="card-body">
                        
                        <br>
                            <label style="color:#4e73df;text-shadow: -1px -1px 1px white, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px white;">Categoria del juego</label>
                            <h5 class="card-title" style="color:white;text-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;"><strong><th><?php  echo $row['cat_juego']?></strong></th></h5>
                            
                            <label style="color:#4e73df;text-shadow: -1px -1px 1px white, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px white;">Plataforma del juego</label>
                            <h5 class="card-title" style="color:white;text-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;" ><strong><th><?php  echo $row['plat_juego']?></strong></th></h5>
                            <label style="color:#4e73df;text-shadow: -1px -1px 1px white, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px white;">Nombre del juego</label>
                            <br>
                            <p class="card-text" style="color:white;text-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;"><th></strong><?php  echo $row['nomb_juego']?></strong></th></p>
                            <label style="color:#4e73df;text-shadow: -1px -1px 1px white, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px white;">Precio del juego</label>
                            <p class="card-text" style="color:white;text-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;"><th></strong><?php  echo $row['precio']?></strong></th></p>
                          
                            
                           
                            <a href="#" class="btn btn-success">Comprar</a>
                        </div>
                    </div>
                </div>
            <?php 
                }
            ?> 
        </div>
        <br>
        

</body>
</html>