<?php

    include_once 'config.php';
    include_once 'conexion.php';

    
         
              if (isset($_GET['eli_id'])) {
                $eli_sql="delete from alumno where idAlu='$_GET[eli_id]'";
                $con_sql=mysqli_query($conector, $eli_sql);
                
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