<?php include ("layout/header.php"); ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonios</title>
</head>
<body>
    <div class="container">
        <h1>Testimonios</h1>
        <?php if (!empty($experiences)): ?>
            <?php foreach ($experiences as $exp): ?>
                <div class="experience">
                    <img src="<?= htmlspecialchars($exp['photo']) ?>" alt="Foto de <?= htmlspecialchars($exp['name']) ?>">
                    <div class="experience-details">
                        <h2><?= htmlspecialchars($exp['name']) ?></h2>
                        <p><?= htmlspecialchars($exp['experience']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="no-experiences">No hay experiencias disponibles aún. ¡Sé el primero en compartir la tuya!</p>
        <?php endif; ?>
    </div>

    <div class="form-container">
        <h2>Comparte tu Experiencia</h2>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label for="name">Tu Nombre</label>
            <input type="text" id="name" name="name" placeholder="Escribe tu nombre" required>

            <label for="experience">Tu Experiencia</label>
            <textarea id="experience" name="experience" placeholder="Describe tu experiencia" required></textarea>

            <label for="photo">Sube una Foto</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>

<?php require("layout/footer.php");?>