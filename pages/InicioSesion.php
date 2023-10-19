
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SoftCodEPM</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
    crossorigin="anonymous">
    <script src="../../js/bootstrap.min.js"></script>
<script src="../../js/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="../../css/styles.css">

</head>
<body>

<form  action="../functions.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <br>
                        <br>
                        <br>
                   <!--<center> <img class="img-thumbnail" src="../../img/logo.png" width="100"></center>-->
                   <br>
                   <h2 class="text-center">¡BIENVENIDO!</h2>
                                    <h3 class="text-center">Iniciar Sesión</h3>
                                    <p>Primero debes iniciar sesion para poder comentar con tu nombre de usuario..</p>
                       <br>
                            <div class="form-group">
                                <label for="correo"><i class="fa fa-user" aria-hidden="true"></i> Usuario: </label><br>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su usuario"
                                 required>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="fa fa-key" aria-hidden="true"></i> Contraseña: </label><br>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su contraseña" required>
                                <input type="hidden" name="accion" value="acceso_user">
                            </div>
                            <div class="form-group">
                             <br>
                    <center>
                                <button type="submit"class="btn btn-primary btn-block"> Ingresar <i class="fa fa-check-circle" aria-hidden="true"></i></button> 
                                <br>
                                <br>
                                <a href="Registro.php" data-toggle="modal" data-target="#user"> ¿Aun no tienes cuenta? Presiona Aqui</a>
                                </center>
                      
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>