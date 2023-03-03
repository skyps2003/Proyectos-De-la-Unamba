<?PHP
    include_once 'config.php';
    include_once 'conexion.php';
    date_default_timezone_set('America/Lima');
    $reg = date('Y-m-d H:i:s');


    $curso = $_POST['curso'];
    $alumno = $_POST['alumno'];
    $matricula = $_POST['matricula'];

     $sql_revisar="SELECT * FROM matricula WHERE idCur = '$curso' AND idAlu = '$alumno'";
     $query_revisar=$conector->query($sql_revisar);
     $ver_revisar=$query_revisar->num_rows;
     if($ver_revisar>0){
      $error [] = "El alumno ya está matriculado en este curso¡";
    }else{
     $sql = "INSERT INTO matricula (idCur,idAlu,estMat,regMat) 
             VALUES ('$curso', '$alumno', '$matricula', '$reg')";    
              $query_insert = $conector->query($sql);
                 if ($query_insert) {
               $message[] = "Datos insertados correctamente";														
                 } else {
                    $error[] = "No se insertó ningún dato";
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