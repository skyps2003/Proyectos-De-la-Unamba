<?php
include_once 'confige.php';
include_once 'conexione.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 02 </title>
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
            <h1 class="display-6  text-center">CLIENTES_IP</h1>
            <div class="col-lg-6 offset-md-3  py-4">
            <form id="enviar_datos">
					<div class="mb-3 row">
						
						<label class="col-sm-3 text-white py-1 "><b>Cliente </b></label>
						<div class="col-sm-9 py-1">
                        <select class="form-select bg-black text-white" name="idCli">
                                    
                                    <?php
                                        $sql="SELECT *FROM cliente  ORDER BY nomCli ASC";
                                        $query=$conector->query($sql);
                                        while($row=$query->fetch_array()){
                                            echo '<option value="'.$row['idCli'].'">'.$row['docCli'].'</option>';
                                        }
                                    ?>
                                    </select>

						</div>
                        <label class="col-sm-3 col-form-label text-white py-1"><b>Equipo </b></label>
						<div class="col-sm-9 py-1">
							<select class="form-select bg-black text-white" name="equIP">
                            <option value="Laptop">Laptop</option>
                            <option value="PC">PC</option>
                            <option value="Tablet">Tablet</option>
                            <option value="Celular">Celular</option>
                            </select>
						</div>
						<label class="col-sm-3 col-form-label text-white py-1"><b> Nro de IPs </b></label>
						<div class="col-sm-9 py-1">
							<input class="form-control bg-black text-white" type="text" name="nroIP" placeholder="192.168.1.0" required/>
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
            url:"ba2.php",
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