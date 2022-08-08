<?php
    include("conexion.php");
    

    $id=$_POST['id'];
    $nombre=$_POST['studentname'];
    $pater=$_POST['lastname'];
    $mater=$_POST['studentlastname'];
    $edad=$_POST['age'];
    
    $sql="UPDATE alumnos SET id ='$id',studentname='$nombre', lastname='$pater', studentlastname='$mater', age = $edad where id ='$id'";
    $query=mysqli_query($conexion,$sql);
    header("location:select_alumnos.php");
      
?>