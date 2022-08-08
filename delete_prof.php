<?php
    include("conexion.php");

    $id_borrar=$_GET['id'];

    $sql=("DELETE FROM profesores where Id_profesor='$id_borrar'");
    $query=mysqli_query($conexion,$sql);
    header("Location:../php/consultar_profes.php");
    
?>