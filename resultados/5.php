<?php
    $texto = $_POST['texto']; 
    $hotmail_regex = "/@hotmail\.com$/i";
    $gmail_regex = "/@gmail\.com$/i";
    $yahoo_regex = "/@yahoo\.com$/i";
    $lineas = explode("\n", $texto);
    $correos = array();
    $empresas = array();
?>


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
            <h1 class="display-6 text-black text-center">Resultado</h1>
            <div class="col-lg-6 offset-md-3 py-4 text-center">
                <?php
                    {
                        echo'
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                <th>N°</th>
                                <th>Correo</th>
                                <th>Empresa</th>
                                </tr>
                            </thead>
                            <tbody>';
                        $i=1;    
                        foreach ($lineas as $linea) {
                            $linea = trim($linea); // Eliminar espacios en blanco al principio y al final de la línea
                            if (filter_var($linea, FILTER_VALIDATE_EMAIL)) { // Validar que la línea sea un correo electrónico válido
                                if (preg_match($hotmail_regex, $linea)) {
                                    $correos[$linea] = "HOTMAIL";
                                } elseif (preg_match($gmail_regex, $linea)) {
                                    $correos[$linea] = "GMAIL";
                                } elseif (preg_match($yahoo_regex, $linea)) {
                                    $correos[$linea] = "YAHOO";
                                }
                            }
                        }
                        foreach ($correos as $correo => $empresa) {
                            echo '<tr>';
                            echo '<td>'.$i.'</td>';
                            echo '<td>'.$correo.'</td>';
                            echo '<td>'.$empresa.'</td>';
                            echo '</tr>';
                                  $i++;

                            
                        }

                        
                        echo' 
                            </tbody>
                         </table>
                         <hr>
                         <h3 class="text-info">Texto Enviado</h3>
                         <p >'.$texto.'</p>
                         <hr>
                        ';                        
                    }
                ?>
                <a href="http://localhost/paginaweb/5ps.php" class="btn btn-outline-success">Nueva Consulta</a>
            </div>
        </div>
    </div>
</body>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>