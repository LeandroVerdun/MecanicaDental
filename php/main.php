<?php

    //conexion a la base de datos
    function cnecxion(){
        $pdo = new PDO( 'mysql:host=localhost;dbname=inventory', 'root', '');
        return $pdo;   
    }

    function verificar_datos($filtro,$cadena){
        if(preg_match("/^".$filtro."$/",$cadena)){
           return false;
        }else{
           return true;
        }
      }

    

      function limpiar_cadena($cadena){
        $cadena=trim($cadena);
        $cadena=stripslashes($cadena);
        $cadena=str_ireplace("<script>","",$cadena);
        $cadena=str_ireplace("</script>","",$cadena);
        $cadena=str_ireplace("<script src", "", $cadena);
        $cadena=str_ireplace("<script type=", "", $cadena);
        $cadena=str_ireplace("SELECT * FROM", "", $cadena);
        $cadena=str_ireplace("DELETE FROM", "", $cadena);
        $cadena=str_ireplace("INSERT INTO", "", $cadena);
        $cadena=str_ireplace("DROP TABLE", "", $cadena);
        $cadena=str_ireplace("DROP DATABASE", "", $cadena);
        $cadena=str_ireplace("TRUNCATE TABLE", "", $cadena);
        $cadena=str_ireplace("SHOW TABLES;", "", $cadena);
        $cadena=str_ireplace("SHOW DATABASES;", "", $cadena);
        $cadena=str_ireplace("<?php", "", $cadena);
        $cadena=str_ireplace("?>", "", $cadena);
        $cadena=str_ireplace("--", "", $cadena);
        $cadena=str_ireplace("^", "", $cadena);
        $cadena=str_ireplace("<", "", $cadena);
        $cadena=str_ireplace("[", "", $cadena);
        $cadena=str_ireplace("]", "", $cadena);
        $cadena=str_ireplace("==", "", $cadena);
        $cadena=str_ireplace(";", "", $cadena);
        $cadena=str_ireplace("::", "", $cadena);
        $cadena=trim($cadena);
        $cadena=stripslashes($cadena);
        return $cadena;
     }



     function renombrar_fotos($nombre) {
        $nombre=str_ireplace(" ","_", $nombre);
        $nombre=str_ireplace("/","_", $nombre);
        $nombre=str_ireplace("#","_", $nombre);
        $nombre=str_ireplace("-","_", $nombre);
        $nombre=str_ireplace("$","_", $nombre);
        $nombre=str_ireplace(".","_", $nombre);
        $nombre=str_ireplace(",","_", $nombre);
        $nombre=$nombre."_".rand(0,100);
        return $nombre;
     }


     function table_page($page,$Npages,$url,$buttons) {
        $table= '<nav class="pagination is-centered is-rounded" role="navigation" aria-label="pagination">';
        if($page<=1) {
            $table.='
                <a class="pagination-previus" href="'.$url.($page-1).'">Anterior</a>
                <ul class="pagination-list">
                    <li><a class="pagination-link" href="'.$url.'1">1</a></li>
                    <li><span class="pagination-ellipsis">&hellip;</span></li>';
             
        }
        $ci=0;
        for($i=$page; $i<=$Npages;$i++) {

            if($ci>=$buttons) {
                break;
            }

            if($page==$i){
                $table.='<li><a class="pagination-link is-current" href="'.$url.$i.'">'.$i.'</a></li>';
            }else{
                $table.='<li><a class="pagination-link" href="'.$url.$i.'">'.$i.'</a></li>';
            }
            $ci++;
        }


        if($page==$Npages) {
            $table.='
            </ul>
            <a class="pagination-next is-disabled" disabled>Siguiente</a>
            ';
        }else{
            $table.='
            <li><span class="pagination-ellipsis">&hellip;</span></li>
            <li><a class="pagination-link" href="'.$url.$Npages.'">'.$Npages.'</a></li>
            </ul>
            <a class="pagination-next" href="'.$url.($page+1).'" >Siguiente</a>
            ';
        }

        $table.='</nav>';
        return $table;
    }
    

 