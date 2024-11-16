<?php
// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $experience = htmlspecialchars($_POST['experience']);

    // Procesar la foto
    $targetDir = "uploads/";
    $fileName = basename($_FILES["photo"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    // Crear el directorio "uploads" si no existe
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Subir la imagen
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath)) {
        // Guardar la experiencia en el archivo JSON
        $data = [
            "name" => $name,
            "experience" => $experience,
            "photo" => $targetFilePath
        ];

        // Cargar las experiencias existentes
        $jsonData = file_get_contents('experiences.json');
        $experiences = json_decode($jsonData, true) ?? [];

        // Añadir la nueva experiencia
        $experiences[] = $data;

        // Guardar el JSON actualizado
        file_put_contents('experiences.json', json_encode($experiences, JSON_PRETTY_PRINT));

        echo "¡Experiencia subida exitosamente!";
    } else {
        echo "Error al subir la foto.";
    }
}
?>
