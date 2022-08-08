<?php
    include ("conexion.php");
    session_start();
    $username = $_POST['user'];
    $password = $_POST['pass'];

$insertar = mysqli_query($conexion,"INSERT INTO usuarios VALUES ('$username', '$password')");

if($insertar){
    echo '<script alert> ("Guardado correctamente");}
    </script>';
}else{
    echo '<script alert> ("No se ha guardado correctamente");}
    </script>';
}
?>