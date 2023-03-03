<?php
include_once 'confige.php';
include_once 'conexione.php';

$estudiante = "SELECT * FROM tarjeta";

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
                <th scope="col">Numero de tarjeta</th>
                <th scope="col">Empresa</th>
                <th scope="col">Fecha de vencimiento</th>
                <th scope="col">Codigo de seguridad</th>
                
              

              </tr>
            </thead>
            <?php $resultado=mysqli_query($conector,$estudiante); 
            while($row=mysqli_fetch_assoc($resultado)){?>
            <tbody>
              <td><?php echo $row['idTar']?></td>
              <td><?php echo $row['nroTar']?></td>
              <td><?php echo $row['empTar']?></td>
              <td><?php echo $row['venTar']?></td>
              <td><?php echo $row['cvvTar']?></td>
           
              
            

               
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