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
  <nav class="navbar navbar-expand-lg navbar-dark bg-grey nav-fixed-top">
  <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="paquetes.php">Paquetes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="destinos.php">Destinos</a>
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
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php
       $cont = 0;
       $result3 = $enlace->query("SELECT * FROM slider ");
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo utf8_encode('<li data-target="#carouselExampleCaptions" data-slide-to="'.$cont);
            if($cont==0){echo (' class="active"></li>');}else {echo ('"></li>');}
            ++$cont;
          }
        }
        ?>
    </ol>
    <div class="carousel-inner">
      <?php
       $result3 = $enlace->query("SELECT * FROM slider ");
       $firts = $enlace->query("SELECT *FROM slider limit 1");
       $primera = $firts->fetch_assoc();
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
            echo utf8_encode('<div class="carousel-item');
            if($row3['idSlider']==$primera['idSlider']){echo (' active">');}else {echo ('">');}
            echo ('<img src="'.$row3['ruta'].'" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
            </div>');
            }
        }
      ?>
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
<div><h1 class="DestinosD">Destinos mas destacados</h1><br></div>

<main>
  <section class="destinos">
  <div class="container">
  <div class="row">
        <?php
         $result3 = $enlace->query("SELECT * FROM destacados ");
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
        echo utf8_encode('<div class="col-md-4">
        <div class="card mb">
          <img class="card-img-top" src="');echo  "".($row3['ruta'].'" alt="Carousel 1">
          <h6 class="mt-1"><span class="fa fa-map-marker"></span>'.$row3['lugar'].'</h6>
          </div>
          </div>');
        }
      }
          ?>
          </div>
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
                        <li> <a href="index.php"> Inicio</a> </li>
                        <li> <a href="paquetes.php"> Paquetes</a> </li>
                        <li> <a href="destinos.php"> Destinos</a> </li>
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