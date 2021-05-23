<?php
include("conexion.php");
$con=conectar();
$sql="SELECT * FROM proyecto.registro_usuario";
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



    <body  style="background-image:url(fondo.jpg);" >
<nav class="navbar navbar-expand-lg navbar-light bg-light"  style="background-image:url(fondo.jpg);">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.html">
      <img src="http://localhost/Pruebas/IMG/Logo%20PW.png" alt="" width="65" height="55">
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="index.html" href="index.html">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">Añadir Juegos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">Usuarios</a>
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
        <div class="col-md-3" style="margin-left:700px;">
           <h1>Registrar usuario</h1>
             <form action=insertar.php method="POST">
             <input type="text" class="form-control mb-3" name="nickname" placeholder="nickname">
             <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
             <input type="text" class="form-control mb-3" name="apellido" placeholder="apellido">
             <input type="text" class="form-control mb-3" name="direccion" placeholder="direccion">
             <input type="text" class="form-control mb-3" name="correo" placeholder="correo">

             <input type="submit" class="btn btn-primary" value="Registrar">

           
 


             </form> 
        </div>
        <br>
        <div class="">
                            <table class="table table-bordered " >
                                <thead class="table-success table-striped" >
                                    <tr class="table-light"  >
                                        <th>nickname</th>
                                        <th>nombre</th>
                                        <th>apellido</th>
                                        <th>direccion</th>
                                        <th>correo</th>
                                         <th></th>
                                         <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=pg_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['nickname']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['direccion']?></th>   
                                                <th><?php  echo $row['correo']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['nickname'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['nickname'] ?>" class="btn btn-danger">Eliminar</a></th>
                                                
                                                                                
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>

      </div>



    </body>

</html>