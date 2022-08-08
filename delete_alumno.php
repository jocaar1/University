<?php
    include("conexion.php");

    $id_borrar=$_GET['id'];

    $sql=("DELETE FROM alumnos where id='$id_borrar'");
    $query=mysqli_query($conexion,$sql);
    header("Location:../php/select_alumnos.php");
    
?>