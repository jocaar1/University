<?php

//Indicar la conexion de la pagina

    require ("ConexionBaseDatos.php");

//Crear una tabla en la base de datos universidad, llamado Usuario 
//Insertar un usuario y contraseña (not null)
//Comenzar la sesion con la funcion session_start();

    session_start();

    $usuario = $_POST['username'];
    $password = $_POST['pass'];

    $validar_informacion = mysqli_query(
        $conexion, "SELECT * FROM usuarios WHERE username = '$usuario' AND pass = '$password'"
    );

//validar que haya información en la base de datos 
    
    if(mysqli_num_rows($validar_informacion) > 0){

//Nos mande a la pagina inicial de la universidad

        header("Location: ../HTML/index.html");
    }else if($numrow == 0){

 //creamos una alerta para indicar que el mensaje no existe y nos regrese al login

        echo "El usuario no existe en la base de datos";
    }
?>