<?php

// Verifica si el usuario está autenticado y es cliente o empleado
$isAuthenticated = isset($_SESSION['tipo_usuario']);
$isEmployee = $isAuthenticated && $_SESSION['tipo_usuario'] === 'empleado';
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encabezado con Navegación</title>
    <link rel="stylesheet" href="vista/css/style.css">
    <link rel="stylesheet" href="vista/css/paquetes.css">
    <link rel="stylesheet" href="vista/css/inicio.css">
    <link rel="stylesheet" href="vista/css/nosotros.css">
    <link rel="stylesheet" href="vista/css/detalleReserva.css">
    <link rel="Stylesheet" href="vista/css/Experiencias.css">
    <link rel="Stylesheet" href="vista/css/Testimonios.css">

</head>
<body>
    <header class="encabezado">
        <div class="logo">
            <h1>Explorando Chiapas</h1>
        </div>
        <nav>
            <ul class="nav-menu">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php?i=mostrarNosotros">Sobre Nosotros</a></li>
                <li><a href="index.php?p=mostrarPaquetes">Reservar</a></li>
                <li><a href="index.php?i=mostrarExperiencias">Experiencias</a></li>
                <li><a href="index.php?i=mostrarTestimonios">Testimonios</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
