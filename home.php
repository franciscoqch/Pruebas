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
    <title>home</title>

</head>
<body style="background-image:url(fondo.jpg);">
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
<div class="">
                            <table class="table table-bordered ">
                                <thead class="table-success table-striped " >
                                    <tr class="table-light"  >
                                        
                                        <th>categoria</th>
                                        <th>plataforma</th>
                                        <th>nombre del juego</th>
                                        <th>precio</th>
                                        <th>foto del juego</th>
                                         <th></th>

                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=pg_fetch_array($query)){
                                        ?>
                                            <tr>
                                                
                                                <th><?php  echo $row['cat_juego']?></th>
                                                <th><?php  echo $row['plat_juego']?></th>
                                                <th><?php  echo $row['nomb_juego']?></th>  
                                                <th><?php  echo $row['precio']?></th>  
                                                <th><img height="350px" width="350px" src="http://localhost/Pruebas/image/<?= $row['foto_juego'];?>"></th> 
                                                <th><a href="comprar_juego.php?id=<?php echo $row['jueg_id'] ?>" class="btn btn-success ">Comprar</a></th>
                                                
                                              
                                              
                                                
                                                                                
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>

</body>
</html>