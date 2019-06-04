<?php
  include('conexion.php');
  $id=$_GET['id'];
  $result3 = $enlace->query("SELECT * FROM slider WHERE idSlider=$id");
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Editar Carousel</title>
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
  ?>
  <div id="login">
    <h3 class="text-center text-white pt-2">Editar carousel</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="login-box col-md-12">
  <form enctype="multipart/form-data" method="POST" action=<?php echo "editSlider.php?id=".$id; ?>>
    <div class="form-group">
      <label for="usuario">Numero de orden</label>
      <input type="text" class="form-control" id="numero"  placeholder="Introduce un numero del 1 al 3 para orden de las imagenes" name="numero" value="<?php echo utf8_encode($row3['numero']); ?>">
    </div>
    <div class="form-group">
      <label for="exampleFormControlFile1">Subir imagen en formato jpg o png</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
    </div>
    <button id="boton" type="submit" class="btn btn-primary" href='editSliderForm.php?id=".$row3[idSlider]."'>Subir</button>
  </form>
</div>
</div>
</div>
</div>
</div>
<?php
    }
  }
  $enlace->close();
?>
</body>
</html>