<?php
    include_once 'confige.php';
    include_once 'conexione.php';
    $idCli = $_POST['idCli'];
    $equIP = $_POST['equIP'];
    $nroIP = $_POST['nroIP'];



    if (preg_match('/^172\.([1][6-9]|[2][0-9]|[3][0-1])\.[0-9]{1,3}\.[0-9]{1,3}$/', $nroIP)) {
        $famIP="B";
        if (preg_match('/\.0$/', $nroIP)) {
            $estIP="Reservada";
            $sql_revisar="SELECT *FROM cliente_ip WHERE nroIP='".$nroIP."'";
            $query_revisar=$conector->query($sql_revisar);
            $ver_revisar=$query_revisar->num_rows;
            if($ver_revisar>0){
                $error [] = "El IP  ya existe ¡";
                }else{
        
                     $sql = "INSERT INTO cliente_ip (idCli, equIP, nroIP, famIP, estIP) 
                     VALUES ('$idCli', '$equIP', '$nroIP', '$famIP', '$estIP')";
                     $query_insert = $conector->query($sql);
                     if($query_insert){
                            $message [] = "Datos Insertados Correctamente";
        
                            }else{
                                 $error [] = "Nose ingreso los Datos";
                            } 
             }
       } elseif (preg_match('/\.1$/', $nroIP)) {
           $estIP="Servidor";
           $sql_revisar="SELECT *FROM cliente_ip WHERE nroIP='".$nroIP."'";
           $query_revisar=$conector->query($sql_revisar);
           $ver_revisar=$query_revisar->num_rows;
           if($ver_revisar>0){
               $error [] = "El IP  ya existe ¡";
               }else{
       
                    $sql = "INSERT INTO cliente_ip (idCli, equIP, nroIP, famIP, estIP) 
                    VALUES ('$idCli', '$equIP', '$nroIP', '$famIP', '$estIP')";
                    $query_insert = $conector->query($sql);
                    if($query_insert){
                           $message [] = "Datos Insertados Correctamente";
       
                           }else{
                                $error [] = "Nose ingreso los Datos";
                           } 
            }
       } else {
           $estIP="Publico";
           $sql_revisar="SELECT *FROM cliente_ip WHERE nroIP='".$nroIP."'";
           $query_revisar=$conector->query($sql_revisar);
           $ver_revisar=$query_revisar->num_rows;
           if($ver_revisar>0){
               $error [] = "El IP  ya existe ¡";
               }else{
       
                    $sql = "INSERT INTO cliente_ip (idCli, equIP, nroIP, famIP, estIP) 
                    VALUES ('$idCli', '$equIP', '$nroIP', '$famIP', '$estIP')";
                    $query_insert = $conector->query($sql);
                    if($query_insert){
                           $message [] = "Datos Insertados Correctamente";
       
                           }else{
                                $error [] = "Nose ingreso los Datos";
                           } 
            }
       }
        
        
    } elseif (preg_match('/^192\.168\.[0-9]{1,3}\.[0-9]{1,3}$/', $nroIP)) {
        $famIP="C";
        if (preg_match('/\.0$/', $nroIP)) {
            $estIP="Reservada";
            $sql_revisar="SELECT *FROM cliente_ip WHERE nroIP='".$nroIP."'";
            $query_revisar=$conector->query($sql_revisar);
            $ver_revisar=$query_revisar->num_rows;
            if($ver_revisar>0){
                $error [] = "El IP  ya existe ¡";
                }else{
        
                     $sql = "INSERT INTO cliente_ip (idCli, equIP, nroIP, famIP, estIP) 
                     VALUES ('$idCli', '$equIP', '$nroIP', '$famIP', '$estIP')";
                     $query_insert = $conector->query($sql);
                     if($query_insert){
                            $message [] = "Datos Insertados Correctamente";
        
                            }else{
                                 $error [] = "Nose ingreso los Datos";
                            } 
             }
       } elseif (preg_match('/\.1$/', $nroIP)) {
           $estIP="Servidor";
           $sql_revisar="SELECT *FROM cliente_ip WHERE nroIP='".$nroIP."'";
           $query_revisar=$conector->query($sql_revisar);
           $ver_revisar=$query_revisar->num_rows;
           if($ver_revisar>0){
               $error [] = "El IP  ya existe ¡";
               }else{
       
                    $sql = "INSERT INTO cliente_ip (idCli, equIP, nroIP, famIP, estIP) 
                    VALUES ('$idCli', '$equIP', '$nroIP', '$famIP', '$estIP')";
                    $query_insert = $conector->query($sql);
                    if($query_insert){
                           $message [] = "Datos Insertados Correctamente";
       
                           }else{
                                $error [] = "Nose ingreso los Datos";
                           } 
            }
       } else {
           $estIP="Publico";
           $sql_revisar="SELECT *FROM cliente_ip WHERE nroIP='".$nroIP."'";
           $query_revisar=$conector->query($sql_revisar);
           $ver_revisar=$query_revisar->num_rows;
           if($ver_revisar>0){
               $error [] = "El IP  ya existe ¡";
               }else{
       
                    $sql = "INSERT INTO cliente_ip (idCli, equIP, nroIP, famIP, estIP) 
                    VALUES ('$idCli', '$equIP', '$nroIP', '$famIP', '$estIP')";
                    $query_insert = $conector->query($sql);
                    if($query_insert){
                           $message [] = "Datos Insertados Correctamente";
       
                           }else{
                                $error [] = "Nose ingreso los Datos";
                           } 
            }
       }

    } else{

        $error[]="Ingrese un ips Valido";
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

    








