<?php
include_once 'confige.php';
include_once 'conexione.php';

$estudiante = "SELECT * FROM comentario";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos </title>
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9783918fa5.js" crossorigin="anonymous"></script>
    <style>
        .text-justify{
            text-align:justify !important;
        }
        
    </style>
</head>
<body>
     <div class="row">
    <?php include_once 'secciones/menu.php';?>
    </div>

<div class="row py-4">
            <h1 class="display-6 text-white text-center">Tabla de Comentarios</h1>
            <p class="card-text text-center">────────────────────────────</p>
        </div>
        <div class="container-sm">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Texto inicial</th>
                <th scope="col">Palabra a remplazar</th>
                <th scope="col">Palabar con la que se va a remplazar</th>
                <th scope="col">Texto Final</th>
                <th scope="col">Cantidad de palabras Remplazadas</th>
              

              </tr>
            </thead>
            <?php $resultado=mysqli_query($conector,$estudiante); 
            while($row=mysqli_fetch_assoc($resultado)){?>
            <tbody>
              <td><?php echo $row['id']?></td>
              <td><?php echo $row['inicial']?></td>
              <td><?php echo $row['palabra']?></td>
              <td><?php echo $row['remplazo']?></td>
              <td><?php echo $row['final']?></td>
              <td><?php echo $row['cantidad']?></td>
              
            

               
            </tbody>
            <?php }?>
          </table>
          <div class="row py-4">
          <div class="col-lg-6 offset-md-6  py-4">
          <a href="http://localhost/paginaweb/ver3parcial.php" class="btn btn-outline-danger ">Volver</a>
          </div>

        </div>
  
 
</body>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	</script>
</html>