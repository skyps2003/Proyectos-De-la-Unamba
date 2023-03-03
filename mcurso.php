<?php
include_once 'config.php';
include_once 'conexion.php';

$estudiante = "SELECT * FROM curso";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos - Curso</title>
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
            <h1 class="display-6 text-white text-center">Tabla de Cursos</h1>
            <p class="card-text text-center">────────────────────────────</p>
        </div>
        <div class="container-sm">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Creditos</th>
                <th scope="col">Requisitos</th>
                <th scope="col">Semestre academico</th>
                <th scope="col">Area de formacion</th>
                <th scope="col">Imagen</th>
                

              </tr>
            </thead>
            <?php $resultado=mysqli_query($conector,$estudiante); 
            while($row=mysqli_fetch_assoc($resultado)){?>
            <tbody>
              <td><?php echo $row['idCur']?></td>
              <td><?php echo $row['codCur']?></td>
              <td><?php echo $row['nomCur']?></td>
              <td><?php echo $row['creCur']?></td>
              <td><?php echo $row['preCur']?></td>
              <td><?php echo $row['sacCur']?></td>
              <td><?php echo $row['afoCur']?></td>
              <td><?php echo $row['imgCur']?></td>
             
            

               
            </tbody>
            <?php }?>
          </table>
          <div class="row py-4">
          <div class="col-lg-6 offset-md-6  py-4">
          <a href="http://localhost/paginaweb/Mostrardatos.php" class="btn btn-outline-danger ">Volver</a>
          </div>
            
            
            </div>

          
          </div>
          
        </div>
       

        
 
</body>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	</script>
</html>