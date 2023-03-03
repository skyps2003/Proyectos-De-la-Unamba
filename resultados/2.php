<?php
    $texto = $_POST['texto']; 
    $visa = "/^4[0-9]{12}(?:[0-9]{3})?$/";
    $mastercard = "/^5[1-5][0-9]{14}$/";
    $lineas = explode("\n", $texto);
    $tarjetas = array();
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
                    
                        echo'
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                <th>N°</th>
                                <th>Tarjeta</th>
                                <th>Empresa</th>
                                </tr>
                            </thead>
                            <tbody>';
                        $i=1;    
                        foreach ($lineas as $linea) {
                            $numeros = preg_replace("/[^0-9]/", "", $linea); // Quitar caracteres no numéricos
                            if (preg_match($visa, $numeros)) {
                                $tarjetas[$numeros] = "VISA";
                            } elseif (preg_match($mastercard, $numeros)) {
                                $tarjetas[$numeros] = "MASTERCARD";
                            }
                        }
                        foreach ($tarjetas as $numero => $empresa){
   
                            echo '<tr>';
                            echo '<td>'.$i.'</td>';
                            echo '<td>'.$numero.'</td>';
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
                    
                ?>
                <a href="http://localhost/paginaweb/2ps.php" class="btn btn-outline-success">Nueva Consulta</a>
            </div>
        </div>
    </div>
</body>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>