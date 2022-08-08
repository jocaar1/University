<?php
    include("conexion.php");
    

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $pater=$_POST['pater'];
    $mater=$_POST['mater'];
    
    $sql="UPDATE administrativos SET Id_adm ='$id',Nombre_adm='$nombre', Apellido_Paterno_adm='$pater', Apellido_Materno_adm='$mater' where Id_adm ='$id'";
    $query=mysqli_query($conexion,$sql);
    header("location:consultar_admins.php");
      
?>