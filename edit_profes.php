<?php
    include("conexion.php");
    

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $pater=$_POST['pater'];
    $mater=$_POST['mater'];
    $carrera=$_POST['car'];
    
    $sql="UPDATE profesores SET Id_profesor ='$id', Nombre_prof ='$nombre', Apellido_Paterno_prof ='$pater', Apellido_Materno_prof ='$mater', Carrera ='$carrera' where Id_profesor ='$id'";
    $query=mysqli_query($conexion,$sql);
    header("location:consultar_profes.php");
      
?>