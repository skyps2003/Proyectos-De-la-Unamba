<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03 </title>
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
            <h1 class="display-6  text-center">COMENTARIOS</h1>
            <div class="col-lg-6 offset-md-3  py-4">
            <form id="enviar_datos">
					<div class="mb-3 row">
						
						<label class="col-sm-3 text-white py-1 "><b>Texto </b></label>
						<div class="col-sm-9 py-1">
                        <textarea  class="form-control bg-black text-white" type="text" name="inicial"  required ></textarea>
                        </div>
						</div>
                        <label class="col-sm-3 col-form-label text-white py-1"><b>Palabra a buscar </b></label>
						<div class="col-sm-9 py-1">
							<input class="form-control bg-black text-white" type="text" name="palabra"  required />
						</div>
						<label class="col-sm-3 col-form-label text-white py-1"><b>Palabra a reemplazar </b></label>
						<div class="col-sm-9 py-1">
							<input class="form-control bg-black text-white" type="text" name="remplazo"  required/>
						</div> 
                        
						<div class="col-sm-12 text-center py-2" id="datos_ajax"></div> 
						<div class="col-sm-12 text-center py-2">
							<button type="submit" class="btn btn-outline-success" name="boton">Guardar</button>
                            <a href="http://localhost/paginaweb/3parcial.php" class="btn btn-outline-danger">Volver</a>
						</div>                    
					</div> 
            </div>
        </div>
        <div class="row">
        </div>
    
</body>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>
	<script type="text/javascript">
    $("#enviar_datos").submit(function(event){
        event.preventDefault();
        var parametros = new FormData($('#enviar_datos')[0]);
        $.ajax({
            type:'POST',
            datatype:'json',
            data:parametros,
            url:"ba3.php",
            contentType:false,
            processData:false,
            beforeSend:function(objeto){
                $("#datos_ajax").html("Enviando información");
            },
            success:function(datos){
                $("#datos_ajax").show();
                var valor = datos.toString();
                var busc =valor.indexOf('Error');
                if(busc != -1){
                    $("#datos_ajax").html(datos);
                    setTimeout("jQuery('#datos_ajax').hide();",3000);
                }else{
                    $("#datos_ajax").html(datos);
                    setTimeout("jQuery('#datos_ajax').hide();",3000);
					$('#enviar_datos')[0].reset();
                }
            },
            error:function(datos){
                $("#datos_ajax").html(datos);
                setTimeout("jQuery('#datos_ajax').hide();",8000);
            }
        });
    }
    );
</script>
</html>