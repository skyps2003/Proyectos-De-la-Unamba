<?php
    include_once 'confige.php';
    include_once 'conexione.php';


    $inicial = $_POST["inicial"];
    $palabra = $_POST["palabra"];
    $remplazo = $_POST["remplazo"];

    $texto_reemplazado = preg_replace('/\b' . preg_quote($palabra, '/') . '\b/i', $remplazo, $inicial, -1, $cantidad_reemplazos);

            $sql = "INSERT INTO comentario (inicial, palabra, remplazo, final, cantidad) 
             VALUES ('$inicial', '$palabra', '$remplazo', '$texto_reemplazado', '$cantidad_reemplazos')";
             $query_insert = $conector->query($sql);
             if($query_insert){
                    $message [] = "Datos Insertados Correctamente";

                    }else{
                         $error [] = "Nose ingreso los Datos";
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