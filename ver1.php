<?php
include_once 'confige.php';
include_once 'conexione.php';

$estudiante = "SELECT * FROM cliente";

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
            <h1 class="display-6 text-white text-center">Tabla de Clientes</h1>
            <p class="card-text text-center">────────────────────────────</p>
        </div>
        <div class="container-sm">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Documento</th>
                <th scope="col">Numero de documento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Direcion</th>
                <th scope="col">Celular</th>
                <th scope="col">E-mail</th>
                <th scope="col">Sexo</th>
                <th scope="col">Registro</th>

              </tr>
            </thead>
            <?php $resultado=mysqli_query($conector,$estudiante); 
            while($row=mysqli_fetch_assoc($resultado)){?>
            <tbody>
              <td><?php echo $row['idCli']?></td>
              <td><?php echo ($row['tdoCli']=='D')?'DNI':'PASAPORTE';?></td>
              <td><?php echo $row['docCli']?></td>
              <td><?php echo $row['nomCli']?></td>
              <td><?php echo $row['apeCli']?></td>
              <td><?php echo $row['fnaCli']?></td>
              <td><?php echo $row['dirCli']?></td>
              <td><?php echo $row['telCli']?></td>
              <td><?php echo $row['emaCli']?></td>
              <td><?php echo ($row['sexCli'] == 'M') ? 'Masculino' : 'Femenino';?></td>
              <td><?php echo $row['regC']?></td>

               
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