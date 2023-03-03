<?php
/*
{3}
*/
$dni = $_POST['texto'];
$var_patron ="/^\d{8}$/";
$validar = preg_match($var_patron,$dni);
if($validar == 1){
    $bg_color = "success";
    $resultado =  "El DNI ingresado <b>".$dni."</b> es valido";
}else{
    $resultado = "El DNI ingresado <b>".$dni."</b> NO es valido";
    $bg_color = "danger";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Busqueda</title>
    <!--Instalar Boostrap ONLINE-->
    <link href="../assets/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9783918fa5.js" crossorigin="anonymous"></script>
    <style>
        .text-justify{
            text-align:justify !important;
        }
        
    </style>
</head>
<body>
   <br> 
    <div class="container">
    <div class="row">
            <?php include_once '../secciones/menu.php';?>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="alert alert-<?php echo $bg_color;?> text-center" role="alert">
                    <h4 class="alert-heading">Resultado</h4>
                    <p><?php echo $resultado;?></p>
                    <hr>
                    <p class="mb-0">
                    
                    </p>
                </div>
            </div>
           
            <a href="http://localhost/paginaweb/dni.php" class="btn btn-outline-success">Nueva Consulta</a>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>