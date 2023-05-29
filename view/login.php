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
    <link rel="stylesheet" href="recursos/css/login.css">
    <title>Iniciar Sesión</title>
</head>

<body>
    
<?php
$email = '';
$password = '';
$errorPassword = '';
$errorEmail = '';
$validar = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if ($password == '' || strlen($password) < 6) {
        $errorPassword = "<div class=\"invalid-feedback\">Por favor ingresar contraseña (mínimo 6 caracteres)</div>";
        $validar = "was-validated";
    }
    if ($email == '') {
        $errorEmail = "<div class=\"invalid-feedback\">Por favor ingresar email</div>";
        $validar = "was-validated";
    }

}
?>

<div class="login shadow-lg">
    <h1 class="text-center">M.O.P.</h1>
    <h5 class="text-center">Multi-Organizaor de Proyectos</h5>

    <form class="needs-validation" action="login.php" method="POST">

        <div class="form-group <?php echo $validar?>">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" required>
            <?php echo $errorEmail;?>
        </div>

        <div class="form-group <?php echo $validar?>">
            <label class="form-label" for="password">Contraseña</label>
            <input class="form-control" type="password" name="password" required>
            <?php echo $errorPassword;?>
        </div>

        <div class="form-group form-check">
            <input class="form-check-input" type="checkbox" name="recordarme" id="recordarme">
            <label class="form-check-label" for="recordarme">Recordarme</label>
        </div>

        <input class="btn btn-success w-100" type="submit" value="INGRESAR">
    </form>
</div>


    <!-- live server para php "livereload" implementado con noje.js -->
    <script src="//localhost:35729/livereload.js"></script>
    <!---->
   <script src="recursos/bootstrap-5.2.3/js/bootstrap.min.js"></script>

</body>
</html>