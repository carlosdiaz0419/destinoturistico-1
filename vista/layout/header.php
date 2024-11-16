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
    <link rel="stylesheet" href="Vista/css/detalleReserva.css">


</head>
<body>
    <header class="encabezado">
        <div class="logo">
            <h1>Explorando Chiapas</h1>
        </div>
        <nav>
            <ul class="nav-menu">
                <a href="index.php">Inicio</a>
                <a href="index.php?i=mostrarNosotros">Sobre Nosotros</a>
                <a href="index.php?p=mostrarPaquetes">Reservar</a>
                <a href="index.php?i=mostrarExperiencias">Experiencias</a>
                <a href="index.php?i=mostrarTestimonios">Testimonios</a>
                    <?php if ($isEmployee): ?>
                    <a href="index.php?d=editarBD">Editar</a>
                    <?php endif; ?>
                    <?php if ($isAuthenticated): ?>
                        <a href="index.php?s=logout">Cerrar Sesión</a>
                    <?php else: ?>
                        <a href="index.php?s=mostrarSesion">Iniciar Sesión</a>
                    <?php endif; ?>
            </ul>
        </nav>
    </header>
</body>
</html>
