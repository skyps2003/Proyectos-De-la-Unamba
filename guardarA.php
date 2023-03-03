<?php
    include_once 'config.php';
    include_once 'conexion.php';
    
    $reg = date('Y-m-d H:i:s');

    if(empty($_POST['Codigo'])){
        $error[]="Ingrese el Codigo ";
    }elseif(empty($_POST['Nombre'])){
        $error[]="Ingrese el Nombre ";
    }elseif(empty($_POST['Apellido'])){
        $error[]="Ingrese el Apellido ";
    }elseif(empty($_POST['Sexo'])){
        $error[]="Ingrese el Sexo ";
    }elseif(empty($_POST['idk'])){
        $error[]="Ingrese el idk ";
    }elseif(empty($_POST['Celular'])){
        $error[]="Ingrese el Celular ";
    }elseif(empty($_POST['Email'])){
        $error[]="Ingrese el E-mail ";
    }elseif(empty($_POST['Url'])){
        $error[]="Ingrese el Url ";
    }
    elseif(empty($_POST['IPS'])){
        $error[]="Ingrese el Ips ";
    }else{

            
            $Codigo = $_POST['Codigo'];
            $DNI = $_POST['DNI'];
            $Nombre = $_POST['Nombre'];
            $Apellido = $_POST['Apellido'];
            $Sexo = $_POST['Sexo'];
            $idk = $_POST['idk'];
            $Celular = $_POST['Celular'];
            $Email = $_POST['Email'];
            $Url = $_POST['Url'];
            $IPS = $_POST['IPS'];
            date_default_timezone_set('America/Lima');
            $reg = date('Y-m-d H:i:s');

            //creando las expresiones regulares

            $E_Codigo="/^(1[0-9]|2[0-2])[1,2][0-5]\d{2}$/";
            $E_DNI = "/^\d{8}$/";
            $E_Nombre="/\D/i"; 
            $E_Apellido ="/\D/i";
            $E_Sexo ="/^(f|m)$/i";
            $E_Celular="/^9\d{8}$/" ;
            $E_Email="/\b[a-zA-Z0-9\._-]+@[a-zA-Z0-9\._-]*\.[a-z]{2,4}\b/i";
            $E_Url="/\b(w{3}\.|[a-z\:]{5,6}\/\/)?[a-zA-Z0-9\._-]*\.[a-z]{2,5}\b/i" ;
            $E_IPS="/\b(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/i";;
            
            //validar las expresiones regulares

          
            $val_Codigo = preg_match($E_Codigo,$Codigo);
            $val_DNI = preg_match($E_DNI,$DNI);
            $val_Nombre = preg_match($E_Nombre,$Nombre);
            $val_Apellido = preg_match($E_Apellido,$Apellido);
            $val_Sexo = preg_match($E_Sexo,$Sexo);
            
            $val_Celular = preg_match($E_Celular,$Celular);
            $val_Email = preg_match($E_Email,$Email);
            $val_Url = preg_match($E_Url,$Url);
            $val_ips = preg_match($E_IPS,$IPS);
            

            //insertar 
            
         
                if($val_Codigo){
                    if($val_DNI){
                        if($val_Nombre){
                            if($val_Apellido){
                                if($val_Sexo){
                                        if($val_Celular){
                                            if($val_Email){
                                                if($val_Url){
                                                    if($val_ips){
                                                        
                                                        $sql_revisar="SELECT *FROM alumno WHERE codAlu='".$Codigo."'";
                                                        $query_revisar=$conector->query($sql_revisar);
                                                        $ver_revisar=$query_revisar->num_rows;
                                                        if($ver_revisar>0){
                                                            $error [] = "El codigo de estudiante ya existe ¡";
                                                        }else{
                                                                $sql_revisar="SELECT *FROM alumno WHERE docAlu='".$DNI."'";
                                                                $query_revisar=$conector->query($sql_revisar);
                                                                $ver_revisar=$query_revisar->num_rows;
                                                                if($ver_revisar>0){
                                                                    $error [] = "El DNI del estudiante ya existe ¡";
                                                                }else{

                                                                $sql_revisar="SELECT *FROM alumno WHERE nomAlu='$Nombre' AND apeAlu='$Apellido' AND fnaAlu='$idk'";
                                                                $query_revisar=$conector->query($sql_revisar);
                                                                $ver_revisar=$query_revisar->num_rows;
                                                                if($ver_revisar>0){
                                                                    $error [] = "Ya existe un usuario con el mismo nombre, apellido y fecha de nacimiento";
                                                                }else{
                                                                $sql_revisar="SELECT *FROM alumno WHERE celAlu='".$Celular."'";
                                                                $query_revisar=$conector->query($sql_revisar);
                                                                $ver_revisar=$query_revisar->num_rows;
                                                                if($ver_revisar>0){
                                                                    $error [] = "El celular del estudiante ya existe ¡";
                                                                }else{

                                                                    $sql = "INSERT INTO alumno(codAlu,docAlu,nomAlu,apeAlu,sexAlu,fnaAlu,celAlu,emaAlu,urlAlu,ipeAlu,regAlu)                    
                                                                    VALUES ('$Codigo','$DNI','$Nombre','$Apellido','$Sexo','$idk','$Celular','$Email','$Url','$IPS','$reg')";
                                                                    $query_insert = $conector->query($sql);
                                                                    if($query_insert){
                                                                        $message [] = "Datos Insertados Correctamente";
            
                                                                    }else{
                                                                        $error [] = "Nose ingreso los Datos";
                                                                    }

                                                                }
                                                                    
                                                            }
                                                            }
            
                                                        }

                                                    }else{
                                                        $error[]="Ingrese un Nro. IPS Valido";
                                                    }
                                                
                                                }else{
                                                    $error[]="Ingrese una URL Valido";
                                                }
                                                
                                            }else{
                                                $error[]="Ingrese un E-mail Valido";
                                            }
                                        }else{
                                            $error[]="Ingrese un  Nro. de Celular Valido";
                                        }
                                        
                                    
                                }else{
                                    $error[]="Ingrese el sexo Valido";
                                }
                                
                            }else{
                                $error[]="Ingrese un Apellido  Valido";
                            }
                        }else{
                            $error[]="Ingrese un Nombre Valido";
                        }
                        
                    }else{
                        $error[]="Ingrese un DNI Valido";
                    }
                }else{
                    $error[]="Ingrese un Codigo Valido";
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