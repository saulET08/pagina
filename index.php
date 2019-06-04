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
	<link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/mobile.css">
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
  <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="100" height="100"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="paquetes.html">Paquetes</a>
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
<!--slider-->
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
        $result3 = $enlace->query("SELECT * FROM slider where idSlider='1' "); 
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo utf8_encode($row3['ruta']);
            }
        }
        ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php 
        $result3 = $enlace->query("SELECT * FROM slider where idSlider='2' "); 
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo utf8_encode($row3['ruta']);
            }
        }
        ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php 
        $result3 = $enlace->query("SELECT * FROM slider where idSlider='3 ' "); 
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo utf8_encode($row3['ruta']);
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
<div><h1 class="DestinosD">Destinos mas destacados</h1><br></div>

<main>
  <section class="destinos">
    <div class=destino1>
      <img src="<?php 
        $result3 = $enlace->query("SELECT * FROM destacados where idDestacado='1' "); 
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo utf8_encode($row3['ruta']);
            }
        }
        ?>">
      <h6 class="mt-1"><span class="fa fa-map-marker"></span><?php 
        $result3 = $enlace->query("SELECT * FROM destacados where idDestacado='1' "); 
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo utf8_encode($row3['lugar']);
            }
        }
        ?></h6>
      <p class="texto">Viaja a Mazatlan</p>
    </div>
    <div class=destino2>
      <img src="<?php 
        $result3 = $enlace->query("SELECT * FROM destacados where idDestacado='2' "); 
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo utf8_encode($row3['ruta']);
            }
        }
        ?>">
      <h6 class="mt-1"><span class="fa fa-map-marker"></span><?php 
        $result3 = $enlace->query("SELECT * FROM destacados where idDestacado='2' "); 
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo utf8_encode($row3['lugar']);
            }
        }
        ?></h6>
      <p class="texto">Viaja a Sayulita</p>
    </div>
    <div class=destino3>
      <img src="<?php 
        $result3 = $enlace->query("SELECT * FROM destacados where idDestacado='3' "); 
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo utf8_encode($row3['ruta']);
            }
        }
        ?>">
      <h6 class="mt-1"><span class="fa fa-map-marker"></span><?php 
        $result3 = $enlace->query("SELECT * FROM destacados where idDestacado='3' "); 
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo utf8_encode($row3['lugar']);
            }
        }
        ?></h6>
      <p class="texto">Viaja a Mexiquillo</p>
    </div>
  </section>

</main>

 <footer class="container-fluid bg-grey py-5">
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 ">
               <div class="logo-part">
                  <img src="img/logo.png" width="200" height="200">
                  <br>
                  <br>
                  <p>Av Sahuatoba 103b, Bella Vista, 34047 Durango, Dgo.</p>
                  <p>Teléfono: 01 618 267 6632</p>
                  <p>Horario: 3:00 PM - 8:00 PM</p>
               </div>
            </div>
            <div class="col-md-6 px-4">
               <h6> Acerca de Nosotros</h6>
               <p>Conoce nuestra empresa y nuestra historia.</p>
               <a href="#" class="btn-footer"> Más información </a><br>
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
                  <a href="https://www.facebook.com/ROCATOURS1/"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i></a>
                  <a href="https://www.google.com/maps/uv?hl=es-419&pb=!1s0x869bc9542fa1c6cf:0xfa81a172c4715ac!2m22!2m2!1i80!2i80!3m1!2i20!16m16!1b1!2m2!1m1!1e1!2m2!1m1!1e3!2m2!1m1!1e5!2m2!1m1!1e4!2m2!1m1!1e6!3m1!7e115!4s/maps/place/roca%2Btours%2Bmaps/@24.0304996,-104.6866561,3a,75y,285.69h,90t/data%3D*213m4*211e1*213m2*211smtQcI9aPoxVrfKv1QoXf4g*212e0*214m2*213m1*211s0x869bc9542fa1c6cf:0xfa81a172c4715ac?sa%3DX!5sroca+tours+maps+-+Buscar+con+Google&imagekey=!1e2!2smtQcI9aPoxVrfKv1QoXf4g&sa=X&ved=2ahUKEwj3lpaFqLDhAhUNna0KHfZECYgQpx8wD3oECAwQBg"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i></a>
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