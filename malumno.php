<?php
include_once 'config.php';
include_once 'conexion.php';

$estudiante = "SELECT * FROM alumno";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos - Alumnos</title>
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
            <h1 class="display-6 text-white text-center">Tabla de Alumnos</h1>
            <p class="card-text text-center">────────────────────────────</p>
        </div>
        <div class="container-sm">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">DNI</th>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Sexo</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Celular</th>
                <th scope="col">E-mail</th>
                <th scope="col">URL</th>
                <th scope="col">IP</th>
              
              </tr>
            </thead>
            
            <?php $resultado=mysqli_query($conector,$estudiante); 
            while($row=mysqli_fetch_assoc($resultado)){ ?>
            <tbody>
              <td><?php echo $row['idAlu']?></td>
              <td><?php echo $row['codAlu']?></td>
              <td><?php echo $row['docAlu']?></td>
              <td><?php echo $row['nomAlu']?></td>
              <td><?php echo $row['apeAlu']?></td>
              <td><?php echo ($row['sexAlu'] == 'M') ? 'Masculino' : 'Femenino';?></td>
              <td><?php echo $row['fnaAlu']?></td>
              <td><?php echo $row['celAlu']?></td>
              <td><?php echo $row['emaAlu']?></td>
              <td><?php echo $row['urlAlu']?></td>
              <td><?php echo $row['ipeAlu']?></td>
              

               
            </tbody>
            <?php }?>
          </table>
          <div class="row py-4">
          <div class="col-lg-6 offset-md-6  py-4">
          <a href="http://localhost/paginaweb/Mostrardatos.php" class="btn btn-outline-danger ">Volver</a>
          </div>

        </div>
  
 
</body>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	</script>
</html>