<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos - Curso</title>
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
            <h1 class="display-6  text-center">Curso</h1>
            <div class="col-lg-6 offset-md-3  py-4">
            <form id="enviar_datos">
					<div class="mb-3 row">
                    <label class="col-sm-3 col-form-label text-white  py-1"><b>Codigo </b></label>
						<div class="col-sm-9 py-1">
							<input class="form-control bg-black text-white" type="text" name="Codigo" placeholder="AD1002" />
						</div>
                        <label class="col-sm-3 col-form-label text-white  py-1"><b>Nombre </b></label>
						<div class="col-sm-9 py-1">
							<input class="form-control bg-black text-white" type="text" name="Nombre" placeholder="Prácticas Pre Profesionales IV - Gestión" />
						</div>
						<label class="col-sm-3 col-form-label text-white  py-1"><b>Creditos </b></label>
						<div class="col-sm-9 py-1">
                            <select class="form-select bg-black text-white"  name="Creditos">
                            <option selected>2</option>
                                
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
						</div> 
                        <label class="col-sm-3 col-form-label text-white  py-1"><b>Requisito </b></label>
						<div class="col-sm-9 py-1">
							<input class="form-control bg-black text-white" type="text" name="Requisito" placeholder="AD902" />
						</div> 
                        <label class="col-sm-3 col-form-label text-white  py-1"><b>Semestre </b></label>
						<div class="col-sm-9 py-1">
                        <input class="form-control bg-black text-white" type="text" name="Semestre" placeholder="2023-I" />
						</div> 
                        <label class="col-sm-3 col-form-label text-white  py-1"><b>Area de Formacion</b></label>
						<div class="col-sm-9 py-1">
                        <select class="form-select bg-black text-white"  name="AF">
                                <option selected>General</option>
                                <option value="Especialidad">Especialidad</option>
                                <option value="Especifico">Especifico</option>
                            </select>
						</div> 
                        <label class="col-sm-3 col-form-label text-white  py-1"><b>Imagen </b></label>
						<div class="col-sm-9 py-1">
							<input class="file-filed input-filed" type="file" name="Imagen"  />
						</div> 
                
                        
						<div class="col-sm-12 text-center py-2" id="datos_ajax"></div> 
						<div class="col-sm-12 text-center py-2">
							<button type="submit" class="btn btn-outline-success" name="boton">Guardar</button>
                            <a href="http://localhost/paginaweb/Ingresardatos.php" class="btn btn-outline-danger">Volver</a>
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
            url:"guardarC.php",
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