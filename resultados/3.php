

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
            <p class="card-text text-center">──────────────────────────────────</p>
            <div class="col-lg-6 offset-md-3 py-4 text-center">
            <?php
                    
                        $texto = $_POST['texto'];
                        $buscar = $_POST['buscar'];
                        $reemplazar = $_POST['reemplazar'];

                        // Realizamos la búsqueda y reemplazo
                        $texto_reemplazado = preg_replace('/\b' . preg_quote($buscar, '/') . '\b/i', $reemplazar, $texto, -1, $cantidad_reemplazos);

                        // Mostramos los resultados
                        echo "<p><strong>Texto inicial:</strong></p>";
                        echo "<p>" . nl2br(htmlspecialchars($texto)) . "</p>";

                        echo "<p><strong>Palabra buscada:</strong> " . htmlspecialchars($buscar) . "</p>";

                        echo "<p><strong>Palabra de reemplazo:</strong> " . htmlspecialchars($reemplazar) . "</p>";

                        echo "<p><strong>Texto reemplazado:</strong></p>";
                        echo "<p>" . nl2br(htmlspecialchars($texto_reemplazado)) . "</p>";

                        echo "<p><strong>Cantidad de palabras reemplazadas:</strong> " . $cantidad_reemplazos . "</p>";
                   
                    ?>
                <a href="http://localhost/paginaweb/3ps.php" class="btn btn-outline-success">Nueva Consulta</a>
            </div>
        </div>
    </div>
</body>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>