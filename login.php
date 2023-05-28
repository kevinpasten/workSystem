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
        <div class="col-md-4 text-center">
            <h1>M.O.P.</h1>
            <h6>Multi-Organizador de Proyectos</h6>             
            <label for="email">Email: </label>
            <input class="form-control" type="text" name="email" placeholder="Ingresar usuario" id="">
            <label for="clave">Contraseña: </label>
            <input class="form-control" type="password" name="clave" id="">               
            

            <div class="row">
                <div class="form-check text-start">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Default checkbox</label>
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