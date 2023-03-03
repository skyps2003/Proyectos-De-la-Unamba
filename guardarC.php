<?php
    include_once 'config.php';
    include_once 'conexion.php';
    date_default_timezone_set('America/Lima');
    $reg = date('Y-m-d H:i:s');


    if(empty($_POST['Codigo'])){
        $error[]="Ingrese el Codigo ";
    }elseif(empty($_POST['Nombre'])){
        $error[]="Ingrese el Nombre ";
    }elseif(empty($_POST['Creditos'])){
        $error[]="Ingrese el Creditos ";
    }elseif(empty($_POST['Requisito'])){
        $error[]="Ingrese el Requisito ";
    }elseif(empty($_POST['Semestre'])){
        $error[]="Ingrese el Semestre ";
    }elseif(empty($_POST['AF'])){
        $error[]="Ingrese el Area de Formacion ";
    }elseif(empty($_FILES['Imagen']['name'])){
        $error[]="Inserte la Imagen ";
    }else{

        $Codigo = $_POST['Codigo'];
        $Nombre = $_POST['Nombre'];
        $Creditos = $_POST['Creditos'];
        $Requisito = $_POST['Requisito'];
        $Semestre = $_POST['Semestre'];
        $AF = $_POST['AF'];
        $I =$_FILES["Imagen"]["name"];
        $T=$_FILES["Imagen"]['tmp_name'];
        $Carpeta='C:\xampp\htdocs\PaginaWeb\IMAGENES';
        $IMAGEN=$Carpeta.'/'.$I;
        move_uploaded_file($I,$Carpeta);

        //creando las expresiones regulares 

        $E_Codigo = "/^\D{3}((10[1-6]|20[1-6]|30[1-6]|40[1-6]|50[1-6]|60[1-6]|70[1-5]|80[1-6]|90[1-5]|100[1-4])|E0[1-8])$/i";
        $E_Nombre = "/^\D/i";
        $E_Requisito = "/^\D/i";
        $E_Creditos = "/^[2-6]$/";
        $E_Semestre = '/^20[0-9][0-9]-(i|ii)$/i';
        $E_AF = "/^(ESPECIALIDAD|GENERAL|ESPECIFICO)$/i";


        //validamos las expresiones regulares

        $val_Codigo= preg_match($E_Codigo,$Codigo);
        $val_Nombre= preg_match($E_Nombre,$Nombre);
        $val_Requisito= preg_match($E_Requisito,$Requisito);
        $val_Credito= preg_match($E_Creditos,$Creditos);
        $val_Semestre= preg_match($E_Semestre,$Semestre);
        $val_AF= preg_match($E_AF,$AF);
        //Insertar

        if($val_Codigo){
            if($val_Nombre){
                if($val_Requisito){
                    if($val_Credito){
                        if($val_Semestre){
                            if($val_AF){
                                                            
                                $sql_revisar="SELECT *FROM curso WHERE codCur='".$Codigo."'";
                                $query_revisar=$conector->query($sql_revisar);
                                $ver_revisar=$query_revisar->num_rows;
                                if($ver_revisar>0){
                                    $error [] = "El codigo del Curso ya existe ¡";
                                }else{
                                    $sql="INSERT INTO curso(codCur,nomCur,creCur,preCur,sacCur,afoCur,ImgCur,regCur)
                                    VALUES ('$Codigo','$Nombre','$Creditos','$Requisito','$Semestre','$AF','$IMAGEN','$reg')";
                                    $query_insert = $conector->query($sql);
                                    if($query_insert){
                                            $message [] = "Datos Insertados Correctamente";

                                        }else{
                                            $error [] = "Nose ingreso los Datos";
                            }
                            }


                            }else{
                                $error[]="Ingrese un Area de Formacion Valido";
                            }

                        }else{
                            $error[]="Ingrese un Semestre Valido";
                        }

                    }else{
                        $error[]="Ingrese un Credito Valido";
                    }

                }else{
                    $error[]="Ingrese un Requisito Valido";
                }

            }else{
                $error[]="Ingrese un Nombre Valido";
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