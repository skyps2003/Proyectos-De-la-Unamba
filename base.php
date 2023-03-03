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
            <div>
          <div class="row justify-content-md-center" style="margin-top:5%">
            <h1 class="display-2  text-center">Base de Datos</h1>
            <div class="col-xs-36 col-md-12 col-lg-6 py-4 text-center" style="width: 20rem;">
                <div class="card-black">
                    <div class="card-body">
                    <img src="img/ingresar.png" class="card-img-top" alt="bd">
                        <h5 class="card-title text-center " >Ingresar</h5>
                        <a href="http://localhost/paginaweb/Ingresardatos.php" class="btn btn-outline-info " style="margin-top:5%">Ingresar datos</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3 py-4 text-center" style="width: 20rem;">
                <div class="card-black">
                    <div class="card-body ">
                    <img src="img/mostar.png" class="card-img-top" alt="bd">
                        <h5 class="card-title text-center">Mostrar</h5>
                        <a href="http://localhost/paginaweb/Mostrardatos.php" class="btn btn-outline-info " style="margin-top:5%">Mostrar datos</a>
                    </div>
                </div>
            </div>
            

                        
            </div>
        </div>
        <div class="row">
        </div>
    
</body>