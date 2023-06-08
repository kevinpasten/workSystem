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
    <link rel="stylesheet" href="recursos/boxicons-2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>M.O.P. Home</title>
</head>
<body>

<div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bx-atom'></i>
                <div class="logo_nombre">MOP</div>
            </div>
            <i class="bx bx-menu" id="btn" ></i>
        </div>
        <ul class="nav_list">
            <li>
                <i class="bx bx-search"></i>
                <input type="text" placeholder="Buscar...">
                <span class="tooltip">Buscar</span>
            </li>
            <li>
                <a href="dashboard.php">
                    <i class="bx bx-home"></i>
                    <span class="links_name">Inicio</span>
                </a>
                <span class="tooltip">Inicio</span>
            </li>
            <li>
                <a href="proyectos.php">
                    <i class='bx bx-briefcase'></i>
                    <span class="links_name">Proyectos</span>
                </a>
                <span class="tooltip">Proyectos</span>
            </li>
            <li>
                <a href="presupuestos.php">
                    <i class='bx bx-dollar-circle' ></i>
                    <span class="links_name">Presupuestos</span>
                </a>
                <span class="tooltip">Presupuestos</span>
            </li>
            <li>
                <a href="solicitudes.php">
                    <i class='bx bx-duplicate' ></i>
                    <span class="links_name">Solicitudes</span>
                </a>
                <span class="tooltip">Solicitudes</span>
            </li>
            <li>
                <a href="reportes.php">
                    <i class='bx bx-clipboard' ></i>
                    <span class="links_name">Reportes</span>
                </a>
                <span class="tooltip">Reportes</span>
            </li>
            <li>
                <a href="mantenciones.php">
                    <i class='bx bx-wrench'></i>
                    <span class="links_name">Mantenciones</span>
                </a>
                <span class="tooltip">Mantenciones</span>
            </li>
            <li>
                <a href="usuarios.php">
                    <i class="bx bx-user"></i>
                    <span class="links_name">Usuarios</span>
                </a>
                <span class="tooltip">Usuarios</span>
            </li>
            <li>
                <a href="estadisticas.php">
                    <i class='bx bx-pie-chart' ></i>
                    <span class="links_name">Estadísticas</span>
                </a>
                <span class="tooltip">Estadísticas</span>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <img src="recursos/avatar/rectangle 2.png" alt="">
                    <div class="name_job">
                        <div class="name">Usuario</div>
                        <div class="job">Administrador</div>
                    </div>
                </div>
                <a href="#">
                    <i class='bx bx-log-out' id="log_out"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Contenido principal (Main) -->
    <div class="home_content container">
        <div class="text">Reportes</div>
    </div>





    <!-- live server para php "livereload" implementado con noje.js -->
    <script src="//localhost:35729/livereload.js"></script>
    <!---->
    <script src="../controller/barra_lateral.js"></script>
    <script src="recursos/bootstrap-5.2.3/js/bootstrap.min.js"></script>
</body>
</html>