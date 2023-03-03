<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tercera  pregunta </title>
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
        <h5 class="card-title text-center" style="margin-top:3%">Realizar un programa que te permita ingresare un texto, un valor a buscar y valor a remplazar. Que te muestre como resultados todo el texto inicial. Luego la palabra buscada, la palabra a remplazar, el texto remplazado y cuantas palabras fueron remplazadas. Insensible a mayúsculas y minúsculas.</h5>
        <form action="resultados/3.php" method="post" style="margin-top:3%" >
                        <label class="form-control bg-black text-white  " for="texto">Texto:</label><br>
                        <textarea class="form-control bg-black text-white  " name="texto" id="texto" rows="10" cols="50"></textarea><br>

                        <label class="form-control bg-black text-white  " for="buscar">Buscar:</label>
                        <input class="form-control bg-black text-white  " type="text" name="buscar" id="buscar"><br>

                        <label class="form-control bg-black text-white  " for="reemplazar">Reemplazar con:</label>
                        <input class="form-control bg-black text-white  "type="text" name="reemplazar" id="reemplazar"><br>

                        <input type="submit" class="btn btn-outline-info" value="Buscar y reemplazar">   <br> <br>
                                </form>
                                <a href="http://localhost/paginaweb/2parcial.php" class="btn btn-outline-danger">Volver</a>    
                

                
    </div>
    
</body>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>