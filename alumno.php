<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos - Alumnos</title>
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
            <h1 class="display-6  text-center">Alumno</h1>
            <div class="col-lg-6 offset-md-3  py-4">
            <form id="enviar_datos">
					<div class="mb-3 row">
						
						<label class="col-sm-3 text-white py-1 "><b>Codigo </b></label>
						<div class="col-sm-9 py-1">
							<input class="form-control bg-black text-white" type="text" name="Codigo" placeholder="211181" />
						</div>
                        <label class="col-sm-3 col-form-label text-white py-1"><b>Documento Identidad </b></label>
						<div class="col-sm-9 py-1">
							<input class="form-control bg-black text-white" type="text" name="DNI" placeholder="44556521"  />
						</div>
						<label class="col-sm-3 col-form-label text-white py-1"><b>Nombres </b></label>
						<div class="col-sm-9 py-1">
							<input class="form-control bg-black text-white" type="text" name="Nombre" placeholder="Jose Luis" />
						</div> 
                        <label class="col-sm-3 col-form-label text-white py-1"><b>Apellidos </b></label>
						<div class="col-sm-9 py-1">
							<input class="form-control bg-black text-white" type="text" name="Apellido" placeholder="Loayza Narvaez" />
						</div> 
                        <label class="col-sm-3 col-form-label text-white py-1"><b>Sexo </b></label>
						<div class="col-sm-9 py-1">
                            <select class="form-select bg-black text-white" aria-label="Default select example " name="Sexo">
                                
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            
                            </select>
							
						</div>  
                        <label class="col-sm-3 col-form-label text-white py-1"><b>Fecha de nacimiento</b></label>
						<div class="col-sm-9 py-1">
							<input class="form-select bg-black text-white" type="date" name="idk"  max="2005-12-31" min="1970-01-01" required />
						</div> 
                        <label class="col-sm-3 col-form-label text-white py-1"><b>Celular </b></label>
						<div class="col-sm-9 py-1">
							<input class="form-select bg-black text-white" type="text" name="Celular" placeholder="988605555" />
						</div> 
                        <label class="col-sm-3 col-form-label text-white py-1"><b>E-mail </b></label>
						<div class="col-sm-9 py-1">
							<input class="form-select bg-black text-white" type="text" name="Email" placeholder="211181@unamba.edu" />
						</div> 
                        <label class="col-sm-3 col-form-label text-white py-1"><b>Url </b></label>
						<div class="col-sm-9 py-1">
							<input class="form-select bg-black text-white" type="text" name="Url" placeholder="https://www.youtube.com/watch?v=ZclzN7R_mmE" />
						</div> 
                        <label class="col-sm-3 col-form-label text-white py-1"><b>Ips </b></label>
						<div class="col-sm-9 py-1">
							<input class="form-select bg-black text-white" type="text" name="IPS" placeholder="191.236.2.3" />
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
            url:"guardarA.php",
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