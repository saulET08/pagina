<?php
 include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css bootstrap/bootstrap.min.css">
    <!-- Bootstrap JS,JQuery y Ajax-->
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
  <a class="navbar-brand" href="index.html"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Modificar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="admin/index.php">Pagina Principal</a>
          <a class="dropdown-item" href="#">Paquetes</a>
          <a class="dropdown-item" href="#">Destinos</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Crear usuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Modificar usuario</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../logout.php">Salir</a>
        </div>
      </li>
  </ul>
  </div>
</nav>
</header>
<body>
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php 
        $result3 = $enlace->query("SELECT * FROM slider where numero='1' "); 
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo "../".utf8_encode($row3['ruta']);
            }
        }
        ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php 
        $result3 = $enlace->query("SELECT * FROM slider where numero='2' "); 
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo "../".utf8_encode($row3['ruta']);
            }
        }
        ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php 
        $result3 = $enlace->query("SELECT * FROM slider where numero='3' "); 
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo "../".utf8_encode($row3['ruta']);
            }
        }
        ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>  
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Numero de orden imagenes</th>
        <th scope="col">Ruta</th>
        <th scope="col">Editar</th>
        <th scope="col">Borrar</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('conexion.php');
        $result3 = $enlace->query("SELECT * FROM slider");
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo "<tr>
                <td>".utf8_encode($row3['numero'])."</td>
                <td>".utf8_encode($row3['ruta'])."</td>
    
                <td><a href='editSliderForm.php?id=".$row3['idSlider']."'><span class='fas fa-edit'> Editar</span></a></td>
                <td><a href='delUser.php?id=".$row3['idSlider']."'><span class='fas fa-trash-alt'> Eliminar</span></a></td>
              </tr>";
            }
        }
        $enlace->close();
      ?>
    </tbody>
  </table>
<div><h1 class="DestinosD">Destinos mas destacados</h1><br></div>

<main>
  <section class="destinos">
    <div class=destino1>
      <img src="<?php 
        $result3 = $enlace->query("SELECT * FROM destacados where numero='1' "); 
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo "./".utf8_encode($row3['ruta']);
            }
        }
        ?>">
      <h6 class="mt-1"><span class="fa fa-map-marker"><?php 
        $result3 = $enlace->query("SELECT * FROM destacados where numero='1' "); 
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo utf8_encode($row3['lugar']);
            }
        }
        ?></span></h6>
      <p class="texto">Viaja a Mazatlan</p>
    </div>
    <div class=destino2>
      <img src="img/sayind.jpg">
      <h6 class="mt-1"><span class="fa fa-map-marker"></span>Sayulita, Nayarit.</h6>
      <p class="texto">Viaja a Sayulita</p>
    </div>
    <div class=destino3>
      <img src="img/mexind.jpg">
      <h6 class="mt-1"><span class="fa fa-map-marker"></span>Mexiquillo, Durango.</h6>
      <p class="texto">Viaja a Mexiquillo</p>
    </div>
  </section>
 </main>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Numero de orden imagenes</th>
        <th scope="col">Ruta</th>
        <th scope="col">Lugar</th>
        <th scope="col">Editar</th>
        <th scope="col">Borrar</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('conexion.php');
        $result3 = $enlace->query("SELECT * FROM destacados");
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo "<tr>
                <td>".utf8_encode($row3['numero'])."</td>
                <td>".utf8_encode($row3['ruta'])."</td>
                <td>".utf8_encode($row3['lugar'])."</td>
    
                <td><a href='editSliderForm.php?id=".$row3['idDestacado']."'><span class='fas fa-edit'> Editar</span></a></td>
                <td><a href='delUser.php?id=".$row3['idDestacado']."'><span class='fas fa-trash-alt'> Eliminar</span></a></td>
              </tr>";
            }
        }
        $enlace->close();
      ?>
    </tbody>
  </table>

</html>