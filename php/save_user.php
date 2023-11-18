<?php
    require_once "main.php";
    
    $name= limpiar_cadena($_POST['user_name']);
    $lastname= limpiar_cadena($_POST['user_lastname']);

    $user= limpiar_cadena($_POST['user_user']);
    $email= limpiar_cadena($_POST['user_email']);

    $key_1= limpiar_cadena($_POST['user_key_1']);
    $key_2= limpiar_cadena($_POST['user_key_2']);


    if($name=="" || $lastname=="" || $user=="" || $key_1=="" || $key_2==""){
        echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            No has llenado todos los campos que son obligatorios
        </div>';
        exit();

    }

    if(verificar_datos('[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}',$name)){
        echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            Los caracteres son invalidos
        </div>';
        exit();

    }