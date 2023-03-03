<?php
    include_once 'confige.php';
    include_once 'conexione.php';
    $nroTar = $_POST['nroTar'];
    $venTar = $_POST['venTar'];
    $cvvTar = $_POST['cvvTar'];
    $visa = "/^4[0-9]{15}$/";
    $mastercard = "/^5[1-5][0-9]{14}$/";
    $Diner= '/^3[0-6][0-9]{12}$/';

    $lineas = explode("\n", $nroTar);
    foreach ($lineas as $linea) {
        $numeros = preg_replace("/[^0-9]/", "", $linea); // Quitar caracteres no numéricos
        if (preg_match($visa, $numeros)) {
            $empTar = "VISA";
            $sql_revisar="SELECT *FROM tarjeta WHERE nroTar='".$nroTar."'";
            $query_revisar=$conector->query($sql_revisar);
            $ver_revisar=$query_revisar->num_rows;
            if($ver_revisar>0){
            $error [] = "El numero tarjeta ya esta regirtado ¡";
            }else{
             $sql = "INSERT INTO tarjeta (nroTar, empTar, venTar, cvvTar) 
             VALUES ('$nroTar', '$empTar', '$venTar', '$cvvTar')";
             $query_insert = $conector->query($sql);
             if($query_insert){
                    $message [] = "Datos Insertados Correctamente";

                    }else{
                         $error [] = "Nose ingreso los Datos";
                    } 
    
    }

        } elseif (preg_match($mastercard, $numeros)) {
            $empTar = "MASTERCARD";
            $sql_revisar="SELECT *FROM tarjeta WHERE nroTar='".$nroTar."'";
            $query_revisar=$conector->query($sql_revisar);
            $ver_revisar=$query_revisar->num_rows;
            if($ver_revisar>0){
            $error [] = "El numero tarjeta ya esta registrado ¡";
            }else{
                $sql = "INSERT INTO tarjeta (nroTar, empTar, venTar, cvvTar) 
                    VALUES ('$nroTar', '$empTar', '$venTar', '$cvvTar')";
                    $query_insert = $conector->query($sql);
                    if($query_insert){
                            $message [] = "Datos Insertados Correctamente";

                            }else{
                                $error [] = "Nose ingreso los Datos";
                            } 
    
    }
        } elseif (preg_match($Diner,$numeros)) {
            $empTar= "DINERS CLOUD";
            $sql_revisar="SELECT *FROM tarjeta WHERE nroTar='".$nroTar."'";
            $query_revisar=$conector->query($sql_revisar);
            $ver_revisar=$query_revisar->num_rows;
            if($ver_revisar>0){
            $error [] = "El numero tarjeta ya esta regirtado ¡";
            }else{
                $sql = "INSERT INTO tarjeta (nroTar, empTar, venTar, cvvTar) 
                    VALUES ('$nroTar', '$empTar', '$venTar', '$cvvTar')";
                    $query_insert = $conector->query($sql);
                    if($query_insert){
                            $message [] = "Datos Insertados Correctamente";

                            }else{
                                $error [] = "Nose ingreso los Datos";
                            } 
    
    }
        } else{
            $error [] = "Numero de tarjeta invalido ";
        }
    }
   
            
    
    
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