<?php
    $texto = $_POST['texto']; 
    $exp_reg = "/\b(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/i";
    $patron = preg_match_all($exp_reg,$texto,$arreglo);
    //print_r($arreglo);
    $total=count($arreglo[0]);//Para contar los valores que tiene el Arreglo    
   /* foreach($arreglo[0] as $ips){
        echo $ips.'<br>';
    }*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de IPs Encontradas</title>
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
            <h1 class="display-6 text-warning text-center">Resultado</h1>
            <div class="col-lg-6 offset-md-3 bg-black py-4 text-center">
                <?php
                    if($total == 0){
                       echo '
                        <div class="alert alert-danger text-center" role="alert">
                            <h4 class="alert-heading">Sin resultados!</h4>
                            <p>No se encontro ninguna IP valida en el texto enviado.</p>
                            <hr>
                            <p class="mb-0">'.$texto.'</p>
                        </div>
                       ';     
                    }else{
                        echo'
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>IP</th>
                                    <th>CLASE</th>
                                </tr>
                            </thead>
                            <tbody>';
                        $i=1;    
                        foreach($arreglo[0] as $ips){
                            $val = explode('.',$ips);//12.5.4.6
                            if($val[0]<128){
                                $clase ="CLASE A";
                            }elseif($val[0]>127 && $val[0]<192 ){
                                $clase ="CLASE B";
                            }elseif($val[0]>191 && $val[0]<224 ){
                                $clase ="CLASE C";
                            }elseif($val[0]>223 && $val[0]<240 ){
                                $clase ="CLASE D";
                            }else{
                                $clase ="CLASE E";
                            }
                            echo '<tr>';
                                echo '<td>'.$i.'</td>';
                                echo '<td>'.$ips.'</td>';
                                echo '<td>'.$clase.'</td>';
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
                <a href="http://localhost/paginaweb/ips.php" class="btn btn-outline-success">Nueva Consulta</a>
            </div>
        </div>
    </div>
</body>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>