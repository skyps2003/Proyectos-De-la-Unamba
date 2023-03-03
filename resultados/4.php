
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado </title>
    <link href="../assets/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9783918fa5.js" crossorigin="anonymous"></script>
    <style>
        .text-justify{
            text-align:justify !important;
        }
        
    </style>
</head>
<body>
    <div class="container-fluid ">
        <div class="row">
          <?php include_once '../secciones/menu.php';?>
        </div>

        <div class="row py-4">
            <h1 class="display-6 text-white text-center">Resultado</h1>
            <div class="col-lg-6 offset-md-3 py-4 text-center">
            <?php
                  $nif = $_POST['nif'];
                  $telefono = $_POST['telefono'];
                  $fecha_nacimiento = $_POST['fecha_nacimiento'];
                  $fecha_alta = $_POST['fecha_alta'];

                  // Validar NIF
                  if (!preg_match('/^\d[0-9][0-9][1-9]\d{4}[A-Za-z]$/', $nif)) {
                    echo 'NIF no válido';
                    echo '<a href="http://localhost/paginaweb/4ps.php" class="btn btn-outline-danger">Regresar</a>';
                    echo " <br>";
                    exit(); // se utiliza exit() para detener la ejecución del script
                }
                  // Validar teléfono
                  if (!preg_match('/^(973|983|974|984)-[0-9]{3}-[0-9]{3}$/', $telefono)) {
                    die('Teléfono no válido');
                    echo '<a href="http://localhost/paginaweb/4ps.php" class="btn btn-outline-danger">Regresar</a>';
                    echo " <br>";
                    exit(); // se utiliza exit() para detener la ejecución del script
                    
                  }

                  // Validar fecha de nacimiento
                  if (strtotime($fecha_nacimiento) < strtotime('1900-01-01') || strtotime($fecha_nacimiento) > strtotime(date('Y-m-d'))) {
                    die('Fecha de nacimiento no válida');
                    
                    echo '<a href="http://localhost/paginaweb/4ps.php" class="btn btn-outline-danger">Regresar</a>';
                    echo " <br>";
                    exit(); // se utiliza exit() para detener la ejecución del script
                  }

                  // Validar fecha de alta
                  if (strtotime($fecha_alta) < strtotime('2015-01-01') || strtotime($fecha_alta) > strtotime(date('Y-m-d'))) {
                    die('Fecha de alta no válida');
                    
                    echo '<a href="http://localhost/paginaweb/4ps.php" class="btn btn-outline-danger">Regresar</a>';
                    echo " <br>";
                    exit(); // se utiliza exit() para detener la ejecución del script
                  }

           
                 

                  echo 'Formulario procesado exitosamente';
                  ?><br>
                <a href="http://localhost/paginaweb/4ps.php" class="btn btn-outline-success">Nueva Consulta</a>
            </div>
        </div>
    </div>
</body>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>