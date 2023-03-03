<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera pregunta </title>
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
    <div class="container-sm text-center ">
        <h5 class="card-title text-center" style="margin-top:3%">Realizar un programa que te permita ingresare un texto y te brinde como resultado la seleccione las IPs de la familia C en la primera fila de una tabla y en la segunda fila te muestre con el texto “IP Reservada” si se encuentra dentro del rango siguiente:</h5>
        <h5 class="card-title text-center"style="margin-top:2%" >
         IP Reservada → 192.168.1.0 
        </h5><br><br>
        <form action="resultados/1.php"method="POST">
                <div class="mb-3 row">
                    
                    <div class="col-sm-20">
                        <textarea class="form-control  bg-black text-white  " name="texto" rows="8"  placeholder="Ingrese texto"  required></textarea>
                    </div>
                    <div class="col-sm-12 text-center  py-2">
                    
                    <button type="submit" class="btn btn-outline-info" name="boton">Enviar Texto</button>
                    <a href="http://localhost/paginaweb/2parcial.php" class="btn btn-outline-danger">Volver</a>    
                </div>  

                </div>    
                </form>
    </div>
    
</body>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>