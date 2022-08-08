<?php
  include ("conexion.php");
  $id=$_GET['id'];

  $sql="SELECT * FROM administrativos where Id_adm=$id";
  
  $query=mysqli_query($conexion,$sql);

  $row=mysqli_fetch_array($query);

  ?>
<!doctype html>
<html lang="en">
  <head>
    <title>X University</title>
    <link rel="icon" href="../IMG/icono.png">
    <link rel="stylesheet" href="../CSS/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="fondo">
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="container-fluid">
      <div class="menu">
        <ul>
      <div class="row">
          <div class="col-1">
            <img src="../IMG/icono.png" alt="" height="60px" width="60px">
          </div>
          <div class="col-5">
            <li><h2>X University</h2></li>
          </div>
          <div class="col-1">
            <li><a href="../HTML/Index.html">Inicio</a></li>
          </div>
          <div class="col-1">
            <li><a href="../HTML/Ofertaeducativa.html">Oferta Educativa</a></li>
          </div>
          <div class="col-1">
            <li><a href="../HTML/Acercade.html">Acerca de</a></li>
          </div>
          <div class="col-1">
            <li><a href="../HTML/Servicios.html">Servicios</a></li>
          </div>
          <div class="col-2">
            <li>    
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                  <img src="../IMG/usuario.png" alt="" width="15px" height="15px">
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="../HTML/perfil.html">Perfil</a>
                  <hr>
                  <p>ㅤInsertar</p>
                  <hr>
                  <a class="dropdown-item" href="../HTML/Alumnos.html">Alumnos</a>
                  <a class="dropdown-item" href="../HTML/Profesores.html">Profesores</a>
                  <a class="dropdown-item" href="../HTML/Administrativos.html">Administrativos</a>
                  <hr>
                  <p>ㅤConsultar</p>
                  <hr>
                  <a class="dropdown-item" href="../PHP/consultar_alumnos.php">Alumnos</a>
                  <a class="dropdown-item" href="../PHP/consultar_profes.php">Profesores</a>
                  <a class="dropdown-item" href="../PHP/consultar_admins.php">Administrativos</a>
                  <hr>
                  <a class="dropdown-item" href="../PHP/cerrarsesion.php">Cerrar Sesión</a>
                </div>
              </div>
          </li>
          </div>
      </div>
        </ul>
        </div>
      </div>
    <hr>
    <div class="container mt-5">
                <form action="../PHP/edit_admins.php" method="POST">
                    <input type="hidden"name="id" value="<?php echo $row['Id_adm']?>">
        
                    <input type="text"class="form-control mb-3" name="id" placeholder="id"value="<?php echo $row['Id_adm']?>">
                    <input type="text"class="form-control mb-3" name="nombre" placeholder="Nombre"value="<?php echo $row['Nombre_adm']?>">
                    <input type="text"class="form-control mb-3" name="pater" placeholder="Apellido Paterno"value="<?php echo $row['Apellido_Paterno_adm']?>">
                    <input type="text"class="form-control mb-3" name="mater" placeholder="Apellido Materno"value="<?php echo $row['Apellido_Materno_adm']?>">

                    <input type="submit" class="btn btn-primary btn-block"value="Actualizar">
        
                </form>
    </div>
    <hr>
        <footer>
        <footer>
      <p><i class="fa fa-copyright" aria-hidden="true"></i>2022 Pagina creada por Jocsan Arciniega</p>
    </footer>
    </body>
    </html>