<!--Como todos sabemos este archivo permitira la conexion
//a la base de datos, no es algo del otro mundo y no necesita explicacion
//atte. Abner -->


<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'universidad';

    $conection = @mysqli_connect($host,$user,$password,$db);

        if(!$conection){
            echo "Ocurrio un error durante la conexion con la db.";
        }
?>

