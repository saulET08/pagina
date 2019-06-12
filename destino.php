<?php
include('admin/conexion.php');

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/jpg" href="img/logo.png">
  <!-- Diseño responsivo-->
  <meta name="viewport" content="width=device-width"/>
  <title>RocaTours</title>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css bootstrap/bootstrap.min.css">
  <!-- Bootstrap JS,JQuery y Ajax-->
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
  <!-- *********** -->
</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-grey fixed-top">
   <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="paquetes.php">Paquetes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="destinos.html">Destinos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contacto.html">Contacto</a>
      </li>
  </ul>
  </div>
</nav>
</header>
<body>
<!--contenido-->
<br><br><br>
<section class="parrallax" <?php
            $id=$_GET['id'];
            $result3 = $enlace->query("SELECT *FROM paquetes WHERE idpaquete=$id");
            if ($result3->num_rows > 0) {
                while($row3 = $result3->fetch_assoc()) {
                  echo utf8_encode('style="width: 100%;
  height: 100%;
  position: relative;
  background-image: url('.$row3['ruta'].');
  background-size: 300%;
  animation: movimiento 50s infinite linear alternate;"');
                  echo utf8_encode('<div class="capa-gradient"></div>
    <div class="container-details2">
      <div class="details2">
        <h1>'.$row3['lugar'].'</h1>
        <p>'.$row3['descripcion'].'</p>
        <button id="btn_guanajuato" onclick="location.href='destinos.php'"> Regresar </button>
      </div>
    </div>')
                }
              }
    ?>
>
</section>
<footer class="container-fluid bg-grey py-5">
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 ">
               <div class="logo-part">
                  <img class="logo2" src="img/logo.png" width="200" height="200">
                  <br>
                  <br>
                  <p>Av Sahuatoba 103b, Bella Vista, 34047 Durango, Dgo.</p>
                  <p>Teléfono: 01 618 267 6632</p>
                  <p>Horario: 3:00 PM - 8:00 PM</p>
                  <p> Roca Tours® 2019, Derechos Reservados. 
               </div>
            </div>
            <div class="col-md-6 px-4">
               <h6> Acerca de Nosotros</h6>
               <p>Conoce nuestra empresa y nuestra historia.</p>
               <!--<a href="#" class="btn-footer"> Más información </a><br>-->
               <a href="contacto.html" class="btn-footer"> Contactanos</a>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 px-4">
               <h6> ROCA TOURS</h6>
               <div class="row ">
                  <div class="col-md-6">
                     <ul>
                        <li> <a href="index.html"> Inicio</a> </li>
                        <li> <a href="paquetes.html"> Paquetes</a> </li>
                        <li> <a href="destinos.html"> Destinos</a> </li>
                        <li> <a href="contacto.html"> Contacto</a> </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-6 ">
               <h6> Redes sociales</h6>
               <div class="social">
                  <a href="https://www.facebook.com/ROCATOURS1/" target="_blank"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
                  <!--<a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
                  <a href="https://web.whatsapp.com/" target="blank"><i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i></a>-->
                  <a href="https://www.google.com/maps/uv?hl=es-419&pb=!1s0x869bc9542fa1c6cf:0xfa81a172c4715ac!2m22!2m2!1i80!2i80!3m1!2i20!16m16!1b1!2m2!1m1!1e1!2m2!1m1!1e3!2m2!1m1!1e5!2m2!1m1!1e4!2m2!1m1!1e6!3m1!7e115!4s/maps/place/roca%2Btours%2Bmaps/@24.0304996,-104.6866561,3a,75y,285.69h,90t/data%3D*213m4*211e1*213m2*211smtQcI9aPoxVrfKv1QoXf4g*212e0*214m2*213m1*211s0x869bc9542fa1c6cf:0xfa81a172c4715ac?sa%3DX!5sroca+tours+maps+-+Buscar+con+Google&imagekey=!1e2!2smtQcI9aPoxVrfKv1QoXf4g&sa=X&ved=2ahUKEwj3lpaFqLDhAhUNna0KHfZECYgQpx8wD3oECAwQBg" target="_blank"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i></a>
               </div>
               <!--<p>That's technology limitation of LCD monitors</p>-->
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</footer>
</body>
</html>