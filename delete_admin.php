<?php
    include("conexion.php");

    $id_borrar=$_GET['id'];

    $sql=("DELETE FROM administrativos where Id_adm='$id_borrar'");
    $query=mysqli_query($conexion,$sql);
    header("Location:../php/consultar_admins.php");
    
?>