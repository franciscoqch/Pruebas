<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM proyecto.juegos WHERE jueg_id='$id'";
$query=pg_query($con,$sql);

$row=pg_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        
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
                <div class="container mt-5">
                    <form action="update_juego.php" method="POST">
                    
                                <input type="hidden" name="jueg_id" value="<?php echo $row['jueg_id']  ?>">
                                
                                <select type="text" class="form-control mb-3" name="cat_juego" placeholder="Tipo de inmueble"  value="<?php echo $row['cat_juego']  ?>">
                                        <option selected value="0"> Elija la categoria del videojuego </option>
                                            <option>Accion</option> 
                                            <option>Arcade</option> 
                                            <option>Deportivo</option>                                  
                                            <option>Estrategia</option> 
                                            <option>Simulacion</option> 
                                            <option>Juegos de mesa</option> 
                                            <option>Juegos musicales</option> 
                                    </select>

                                <select type="text" class="form-control mb-3" name="plat_juego" placeholder="Tipo de inmueble" value="<?php echo $row['plat_juego']  ?>">
                                        <option selected value="0"> Elija la plataforma a la que pertenece el videojuego </option>
                                            <option>XBOX SERIES X</option> 
                                            <option>XBOX ONE</option> 
                                            <option>PLAYSTATION 4</option>                                  
                                            <option>PLAYSTATION 5</option> 
                                            <option>PC</option> 
                                            <option>NINTENDO SWITCH</option> 
                                    </select> 
                                <input type="text" class="form-control mb-3" name="nomb_juego" placeholder="apellido" value="<?php echo $row['nomb_juego']  ?>">
                                <input type="text" class="form-control mb-3" name="precio" placeholder="direccion" value="<?php echo $row['precio']  ?>">
                                
                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>