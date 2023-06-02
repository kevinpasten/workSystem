<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/bootstrap-5.2.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Iniciar Sesión</title>
</head>
<body>

    <div class="login shadow-lg">
        <h1 class="text-center">M.O.P.</h1>
        <h5 class="text-center">Multi-Organizador de Proyectos</h5>

        <form id="login" class="needs-validation" action="" method="POST">

            <div class="form-group"><!-- was-validated -->
                <label class="form-label" for="email">Email</label>
                <input class="form-control" id="email" type="email" name="email" required>
                <div class="invalid-feedback">Por favor ingresar email</div>
            </div>

            <div id="validar" class="form-group"><!-- was-validated -->
                <label class="form-label" for="password">Contraseña</label>
                <input class="form-control" id="password" type="password" name="password" required>
                <div class="invalid-feedback">Por favor ingresar contraseña</div>
            </div>

            <div class="form-check"><!-- was-validated -->
                <input class="form-check-input" type="checkbox" name="recordarme" id="recordarme">
                <label class="form-check-label" for="recordarme">Recordarme</label>
            </div>

            <input class="btn btn-success w-100" type="submit" onclick="validarForm()" value="INGRESAR">
        </form>
    </div>


    <!-- live server para php "livereload" implementado con noje.js -->
    <script src="//localhost:35729/livereload.js"></script>
    <!---->
    
    <script src="recursos/bootstrap-5.2.3/js/bootstrap.min.js"></script>
    <script src="../controller/validar.js"></script>
</body>
</html>