<?php
include_once 'confige.php';
include_once 'conexione.php';
date_default_timezone_set('America/Lima');
$regC = date("Y-m-d H:i:s "); // Fecha actual


$tdoCli = $_POST["tdoCli"];
$docCli = $_POST["docCli"];
$nomCli = $_POST["nomCli"];
$apeCli = $_POST["apeCli"];
$fnaCli = $_POST["fnaCli"];
$dirCli = $_POST["dirCli"];
$telCli = $_POST["telCli"];
$emaCli = $_POST["emaCli"];
$sexCli = $_POST["sexCli"];


$hotmail = "/@hotmail\.com$/i";
$gmail = "/@gmail\.com$/i";
$yahoo = "/@yahoo\.com$/i";

$lineas = explode("\n", $emaCli);
foreach ($lineas as $linea) {
    $linea = trim($linea); // Eliminar espacios en blanco al principio y al final de la línea
    if (filter_var($linea, FILTER_VALIDATE_EMAIL)) { // Validar que la línea sea un correo electrónico válido
        if (preg_match($hotmail, $linea)) {
            $correos[$linea] = $emaCli ="";
            $sql_revisar="SELECT *FROM cliente WHERE docCli='".$docCli."'";
            $query_revisar=$conector->query($sql_revisar);
            $ver_revisar=$query_revisar->num_rows;
            if($ver_revisar>0){
                       $error [] = "El documento de identidad ya esta registrado  ¡";
            }else{
                $sql_revisar="SELECT *FROM cliente WHERE telCli='".$telCli."'";
                $query_revisar=$conector->query($sql_revisar);
                $ver_revisar=$query_revisar->num_rows;
                if($ver_revisar>0){
                        $error [] = "El Telefono ya esta registrado ¡";
            }else{
                $sql_revisar="SELECT *FROM cliente WHERE emaCli='".$emaCli."'";
                $query_revisar=$conector->query($sql_revisar);
                $ver_revisar=$query_revisar->num_rows;
                if($ver_revisar>0){
                        $error [] = "El E-mail de ya esta registrado ¡";
            }else {
                $sql = "INSERT INTO cliente (tdoCli, docCli, nomCli, apeCli, fnaCli, dirCli, telCli, emaCli, sexCli, regC) 
                        VALUES ('$tdoCli', '$docCli', '$nomCli', '$apeCli', '$fnaCli', '$dirCli', '$telCli', '$emaCli', '$sexCli', '$regC')";
                     $query_insert = $conector->query($sql);
                        if($query_insert){
                            $message [] = "Datos Insertados Correctamente";

                        }else{
                            $error [] = "Nose ingreso los Datos";
                        } 
            }

            }

            }
        } elseif (preg_match($gmail, $linea)) {
            $correos[$linea] = $emaCli;
            $sql_revisar="SELECT *FROM cliente WHERE docCli='".$docCli."'";
            $query_revisar=$conector->query($sql_revisar);
            $ver_revisar=$query_revisar->num_rows;
            if($ver_revisar>0){
                       $error [] = "El documento de identidad ya esta registrado  ¡";
            }else{
                $sql_revisar="SELECT *FROM cliente WHERE telCli='".$telCli."'";
                $query_revisar=$conector->query($sql_revisar);
                $ver_revisar=$query_revisar->num_rows;
                if($ver_revisar>0){
                        $error [] = "El Telefono ya esta registrado ¡";
            }else{
                $sql_revisar="SELECT *FROM cliente WHERE emaCli='".$emaCli."'";
                $query_revisar=$conector->query($sql_revisar);
                $ver_revisar=$query_revisar->num_rows;
                if($ver_revisar>0){
                        $error [] = "El E-mail de ya esta registrado ¡";
            }else {
                $sql = "INSERT INTO cliente (tdoCli, docCli, nomCli, apeCli, fnaCli, dirCli, telCli, emaCli, sexCli, regC) 
                        VALUES ('$tdoCli', '$docCli', '$nomCli', '$apeCli', '$fnaCli', '$dirCli', '$telCli', '$emaCli', '$sexCli', '$regC')";
                     $query_insert = $conector->query($sql);
                        if($query_insert){
                            $message [] = "Datos Insertados Correctamente";

                        }else{
                            $error [] = "Nose ingreso los Datos";
                        } 
            }

            }

            }
        } elseif (preg_match($yahoo, $linea)) {
            $correos[$linea] = $emaCli ;
            $sql_revisar="SELECT *FROM cliente WHERE docCli='".$docCli."'";
            $query_revisar=$conector->query($sql_revisar);
            $ver_revisar=$query_revisar->num_rows;
            if($ver_revisar>0){
                       $error [] = "El documento de identidad ya esta registrado  ¡";
            }else{
                $sql_revisar="SELECT *FROM cliente WHERE telCli='".$telCli."'";
                $query_revisar=$conector->query($sql_revisar);
                $ver_revisar=$query_revisar->num_rows;
                if($ver_revisar>0){
                        $error [] = "El Telefono ya esta registrado ¡";
            }else{
                $sql_revisar="SELECT *FROM cliente WHERE emaCli='".$emaCli."'";
                $query_revisar=$conector->query($sql_revisar);
                $ver_revisar=$query_revisar->num_rows;
                if($ver_revisar>0){
                        $error [] = "El E-mail de ya esta registrado ¡";
            }else {
                $sql = "INSERT INTO cliente (tdoCli, docCli, nomCli, apeCli, fnaCli, dirCli, telCli, emaCli, sexCli, regC) 
                        VALUES ('$tdoCli', '$docCli', '$nomCli', '$apeCli', '$fnaCli', '$dirCli', '$telCli', '$emaCli', '$sexCli', '$regC')";
                     $query_insert = $conector->query($sql);
                        if($query_insert){
                            $message [] = "Datos Insertados Correctamente";

                        }else{
                            $error [] = "Nose ingreso los Datos";
                        } 
            }

            }

            }
        } else{
            $error [] = "E-mail Invalido ";
        }
        
    }
}



$regC = date("Y-m-d H:i:s "); // Fecha actual

            

if(isset($error)){
    echo'<div class="alert alert-danger" role="alert">';
        echo '<b>Error!</b> ';
        foreach($error as $err){
            echo $err;
        }
    echo '</div>';
}

if(isset($message)){
    echo'<div class="alert alert-success" role="alert">';
        echo '<b>Bien!</b> ';
        foreach($message as $sms){
            echo $sms;
        }
    echo '</div>';
}

?>