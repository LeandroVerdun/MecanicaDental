<?php require "./inc/session_start.php";?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "./inc/head.php";?>
</head>
<body>
    <?php
        //ponemos que por defecto nos lleve a login
        if(!isset($_GET['vista']) || $_GET['vista']==""){
            $_GET['vista']="login";
        }
        //verificamos que la vista exista, que el valor no sea login ni 404
        if(is_file("./vistas/".$_GET['vista'].".php") && $_GET['vista']
        !="login" && $_GET['vista']!="404"){
            

            if($_GET['vista']=="user_new"){
                include "./vistas/user_new.php";   
            }else{
                //cargamos el navbar
                include "./inc/navbar.php";
                //cargamos el script para que sea una pagina dinamica en movil
                include "./inc/script.php";
                //incluimos las vistas cargadas dinamicamente con el metodo get
                include "./vistas/".$_GET['vista'].".php";

            }

        

            


        }else{
            //le ponemos que cargue la vista login si se carga con el metodo post
            if($_GET['vista']=="login"){
                include "./vistas/login.php";   
            }else{
                //de lo contrario que no exista la vista le tiramos un 404
                include "./vistas/404.php";
            }
        }
     
    ?>

</body>
</html>