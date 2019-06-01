<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel</title>
    <link rel="stylesheet" href="css/panel.css">
    <link rel="stylesheet" href="css bootstrap/bootstrap.min.css">
    <!-- Bootstrap JS,JQuery y Ajax-->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
          <?php echo $user->getNombre(); ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="logout.php">Salir</a>
        </div>
      </li>
  </ul>
  </div>
</nav>
</header>

</html>