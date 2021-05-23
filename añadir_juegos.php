<?php
include("conexion.php");
$con=conectar();
$sql="SELECT * FROM proyecto.juegos";
$query=pg_query($con,$sql);

$row=pg_fetch_array($query);
?>
<DOCTYPE html>
<html lang="en">
   <head>
    <title>GetEasyGames</title>
    <meta charset=UTF-8>
    <meta name="viewport" content="widht=device-width, initial-sacle=1">
    <link href="ccs/style.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   </head>



    <body style="background-image:url(fondo.jpg);" >
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


      <div>
        
        <div class="row">
        <div class="col-md-3" style="margin-left:700;">
           <h1>Añadir videojuegos</h1>
             <form action=insertar_juego.php method="POST" enctype="multipart/form-data">
            

             <select type="text" class="form-control mb-3" name="cat_juego" placeholder="Tipo de inmueble">
                                        <option selected value="0"> Elija la categoria del videojuego </option>
                                            <option>Accion</option> 
                                            <option>Arcade</option> 
                                            <option>Deportivo</option>                                  
                                            <option>Estrategia</option> 
                                            <option>Simulacion</option> 
                                            <option>Juegos de mesa</option> 
                                            <option>Juegos musicales</option> 
                                    </select>
            <select type="text" class="form-control mb-3" name="plat_juego" placeholder="Tipo de inmueble">
                                        <option selected value="0"> Elija la plataforma a la que pertenece el videojuego </option>
                                            <option>XBOX SERIES X</option> 
                                            <option>XBOX ONE</option> 
                                            <option>PLAYSTATION 4</option>                                  
                                            <option>PLAYSTATION 5</option> 
                                            <option>PC</option> 
                                            <option>NINTENDO SWITCH</option> 
                                    </select>                       
 

             <input type="text" class="form-control mb-3" name="nomb_juego" placeholder="nombre del juego">
             <input type="text" class="form-control mb-3" name="precio" placeholder="precio del juego">
             <input type="file" class="form-control mb-3" name="foto_juego" placeholder="foto del juego">
             

             <input type="submit" class="btn btn-primary" value="Registrar juego">

             </form> 
        </div>
        <br>
        <div class="">
                            <table class="table table-bordered ">
                                <thead class="table-success table-striped " >
                                    <tr class="table-light"  >
                                        <th>jueg_id</th>
                                        <th>categoria</th>
                                        <th>plataforma</th>
                                        <th>nombre del juego</th>
                                        <th>precio</th>
                                        <th>foto del juego</th>
                                         <th></th>
                                         <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=pg_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['jueg_id']?></th>
                                                <th><?php  echo $row['cat_juego']?></th>
                                                <th><?php  echo $row['plat_juego']?></th>
                                                <th><?php  echo $row['nomb_juego']?></th>  
                                                <th><?php  echo $row['precio']?></th>  
                                                <th><img height="60px" width="52px" src="http://localhost/Pruebas/image/<?= $row['foto_juego'];?>"></th> 
                                                <th><a href="actualizar_juego.php?id=<?php echo $row['jueg_id'] ?>" class="btn btn-warning">Editar</a></th>
                                                <th><a href="borrar_juego.php?id=<?php echo $row['jueg_id'] ?>" class="btn btn-danger">Eliminar</a></th>
                                              
                                                
                                                                                
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>

      </div>