<!DOCTYPE html>
<html>
<html lang="es/MX">
<head>
    <meta charset="utf-8">
    <!-- Diseño responsivo-->
    <meta viewport="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="css/login.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css bootstrap/bootstrap.min.css">
    <!-- Bootstrap JS,JQuery y Ajax-->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS personazalidados -->
    <script src="js/script.js"></script>
    <!-- *********** -->
</head>
<body>
<form method="POST">
    
<div id="login">
    <h3 class="text-center text-white pt-2">Administador</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="login-box col-md-12">
                    <form id="login-form" class="form" action="" method="post">
                        <h3 class="text-center text-info">Iniciar sesion</h3>
                        <div id=mensaje>
                        <?php
                        if(isset($errorLogin)){
                        echo $errorLogin;
                        }
                         ?>
                        </div>
                        <div class="form-group">
                            <label for="username" class="text-info">Usuario:</label><br>
                            <input type="text" name="username" id="username" name="usr" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Contraseña:</label><br>
                            <input type="password" name="password" id="password" name="pss" class="form-control">
                        </div>
                        <div class="form-group">
                            <p class="center"><input type="submit" name="submit" class="btn btn-info btn-md" value="Iniciar sesion"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>