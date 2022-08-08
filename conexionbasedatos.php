<?php



    $localhost = "localhost";

    $usuario = "root";

    $password = "";

    $nameDB = "universidad";



    $conexion = mysqli_connect($localhost,$usuario,$password,$nameDB);



    $selectconexdb = mysqli_select_db ($conexion, $nameDB);



    if(!$conexion){

        die("La conexión es fallida". mysqli_connect_error());

        exit();

    }else{



 echo "Conexión exitosa";



    }



?>