<?php
    include ("conexion.php");
    session_start();
    $name_p = $_POST['name_prof'];
    $lastname_p = $_POST['pater_prof'];
    $secondlastname_p = $_POST['mater_prof'];
    $carrera_p = $_POST['carrera'];
    
$insertar = mysqli_query($conexion,"INSERT INTO profesores VALUES ('$name_p', '$lastname_p', '$secondlastname_p', '$carrera_p')");

?>