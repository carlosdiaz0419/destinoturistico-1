<?php include ("vista/layout/header.php"); ?>

<h2>Iniciar Sesión</h2>
<form action="index.php?s=sesion" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>
        
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" id="contrasena" required>
        
        <button type="submit">Ingresar</button>
</form>
    <br>
    <br>
    <br>
    <br>
    <br><br><br><br><br><br><br><br><br><br><br><br>
<?php require("vista/layout/footer.php");?>
