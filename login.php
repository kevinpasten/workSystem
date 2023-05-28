<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/bootstrap-5.2.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="recursos/css/estilos.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    
    <div class="container d-flex justify-content-center align-items-center login">
        <div class="row">

            <h1>M.O.P.</h1>
            <h6>Multi-Organizador de Proyectos</h6>

            <div class="row row-cols-1 justify-content-start">
                <div class="flex-row-2">
                    <label for="usuario">Usuario: </label>
                    <input type="text" name="usuario" placeholder="Ingresar usuario" id="">
                </div>
                
                <div class="flex-row">
                <label for="clave">Contraseña: </label>
                <input type="password" name="clave" id="">
                </div>

                
            </div>
        </div>
    </div>
    
    <!-- live server para php "livereload" implementado con noje.js -->
    <script src="//localhost:35729/livereload.js"></script>
    <!---->
    <script src="recursos/bootstrap-5.2.3/js/bootstrap.min.js"></script>
</body>
</html>