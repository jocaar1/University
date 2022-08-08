<?php
    include ("conexion.php");
    session_start();
    $studentname = $_POST['name'];
    $lastname = $_POST['lasname'];
    $secondlastname = $_POST['secondlasname'];
    $age = $_POST['edad'];

$insertar = mysqli_query($conexion,"INSERT INTO alumnos VALUES (','$studentname', '$lastname', '$secondlastname', '$age')");

if($insertar){
    echo '<script alert> ("Guardado correctamente");}
    </script>';
}else{
    echo '<script alert> ("No se ha guardado correctamente");}
    </script>';
}
?>