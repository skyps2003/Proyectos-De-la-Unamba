<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador de E-mail</title>
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
            <h1 class="display-6 text-center">Buscar E-mails en un texto </h1>
            <div class="col-lg-6 offset-md-3  py-4">
                <form action="resultados/email.php"method="POST">
                <div class="mb-3 row">
                    
                    <div class="col-sm-20">
                        <textarea class="form-control bg-black text-white  " name="texto" rows="8"  placeholder="Ingrese texto"  required></textarea>
                    </div>
                    <div class="col-sm-12 text-center  py-2">
                    
                    <button type="submit" class="btn btn-outline-success" name="boton">Enviar Texto</button>
                    </div>                    
                </div>    
                </form>
            </div>
        </div>
        <div class="row">
        </div>

</body>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>