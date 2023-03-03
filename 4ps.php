<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuarta  pregunta </title>
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
            <h6 class="text-center ">Validada de un cliente.
            NIF = DNI aceptar como máximo 2 ceros al inicio </h6>
            <h6 class="text-center ">TELEFONO que acepte solo teléfonos celulares de Apurímac y cusco que inicien con 973-xxx-xxx </h6><h6 class="text-center "> o 983-xxx-xxx, 974-xxx-xxx o 984-xxx-xxx
            Validad la fecha de nacimiento 1900 al 2023
            </h6>
            <p class="card-text text-center">────────────────────────────────────────────────</p>
            <div class="col-lg-6 offset-md-3  py-4">
        <form method="post" action="resultados/4.php"style="margin-top:3%" >
        <div class="mb-3 row">

                <div class="col">
                <label class="col-sm-3 text-center py-1 text-white ">NIF </label><br>
                  <input class="form-control bg-black text-white" type="text" id="nif" name="nif"  required>
				</div>
                <div class="col">
                <label class="col-sm-3 text-center py-1 text-white "><b>Teléfono:</b></label>
                  <div class="col-sm-9 py-1">
                  <input class="form-control  bg-black text-white " type="text" id="telefono" name="telefono"  required>
						    </div>
                </div>
                 </div>

                 <div class="col">
                <label class="col-sm-3 text-center py-1 text-white ">Fecha de nacimiento:</label><br>
                  <input class="form-select bg-black text-white" type="date" id="fecha_nacimiento" name="fecha_nacimiento"  required>
				</div>
                <div class="col">
                <label class="col-sm-3 text-center py-1 text-white "><b>Fecha de alta:</b></label>
                  <div class="col-sm-9 py-1">
                  <input class="form-select bg-black text-white " type="date" id="fecha_alta" name="fecha_alta"  required>
						    </div>
                           
                            <input type="submit" class="btn btn-outline-info" value="Enviar">   <br> <br>
                </div>
                 </div>

                

                
                </form>
       
    </div>
    
</body>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</html></h5>
 