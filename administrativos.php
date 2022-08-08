<?php
    include ("conexion.php");
    session_start();
    $name_a = $_POST['name_a'];
    $lastname_a = $_POST['pater_a'];
    $secondlastname_a = $_POST['mater_a'];
    
$insertar = mysqli_query($conexion,"INSERT INTO administrativos VALUES ('','$name_a', '$lastname_a', '$secondlastname_a')");

?>