<?php
 include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <!--<link rel="stylesheet" href="../css/estilos.css">-->
    <link rel="stylesheet" href="../css/panel.css">
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
  <a class="navbar-brand" href="index.php"><img class="logo" src="../img/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Modificar
        </a>
        <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php">Pagina Principal</a>
          <a class="dropdown-item" href="paquetes.php">Paquetes</a>
          <a class="dropdown-item" href="destinos.php">Destinos</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../logout.php"><span class="fas fa-sign-out-alt"></span> Salir</a>
      </li>
  </ul>
  </div>
</nav>
</header>
<body>
<div><br/><h1 class="DestinosD">Destinos</h1><br></div>

<div class="container">
  <div class="row">
    <?php
      $cont = 1;
      $result3 = $enlace->query("SELECT * FROM destinos ");
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo utf8_encode('<div class="col-md-4">
        <div class="card mb">
          <form enctype="multipart/form-data" method="POST" action=editDestinos.php?id='.$row3['iddestino'].'>
          <img class="card-img-top" src="');echo  "../".($row3['ruta'].'" alt="Carousel 1">
          <h6 class="mt-1"><span class="fa fa-map-marker"></span>'.$row3['lugar'].'</h6>
            <div class="card-body mb">
                <h5 class="card-title">Imagen '.$cont.'</h5>
                <p class="card-text">Tamaño recomendado:348x232 pixeles</p>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Subir imagen en formato jpg o png</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
                   </div>
                   <div class="form-group">
                   <h5 class="card-title">Lugar</h5>
                    <input type="text" class="form-control" id="numero"  placeholder="Ej. Mazatlan,Sinaloa" name="lugar">
                   </div>
                   <div class="form-group">
                   <h5 class="card-title">Descripcion del lugar</h5>
                    <textarea class="form-control" id="descripcion" name="descripcion" required>Escribe aqui</textarea required>
                   </div>
                <button type="submit" class="btn btn-primary mb"><span class="fas fa-edit"></span></a> Cambiar datos</button>
                <button type="submit" class="btn btn-danger mb" formaction="deleteDestacados.php?id='.$row3['idDestino'].'"><span class="fas fa-trash-alt"></span></a> Eliminar</button>
              </form>
              </div>
            </div>
            <br/>
            <br/>
        </div>');
          ++$cont;
          }
        }
        ?>
         </div>
      </div>
<div class="container">
  <div class="row">
 <div class="col-md-4">
        <div class="card mb">
          <form enctype="multipart/form-data" method="POST" action=createDestacado.php>
          <img class="card-img-top" src="http://www.placehold.it/348x232" alt="Carousel 1">
            <div class="card-body mb">
                <h5 class="card-title">Agregar Destino</h5>
                <p class="card-text">Tamaño recomendado:348x232 pixeles</p>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Subir imagen en formato jpg o png</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
                   </div>
                   <div class="form-group">
                   <h5 class="card-title">Lugar</h5>
                    <input type="text" class="form-control" id="numero"  placeholder="Ej. Mazatlan,Sinaloa" name="lugar">
                   </div>
                   <h5 class="card-title">Descripcion del lugar</h5>
                    <textarea class="form-control" id="descripcion" name="descripcion" required>Escribe aqui</textarea>
                   </div>
                <button type="submit" class="btn btn-primary mb"><span class="fas fa-upload"></span></a> Subir imagen</button>
              </form>
              </div>
            </div>
        </div>
  </div>
</div>
</body>
</html>