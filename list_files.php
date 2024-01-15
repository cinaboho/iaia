<?php
$dir = $_GET['dir'];

// Obtener la lista de archivos en la carpeta
$files = scandir($dir);

// Filtrar los archivos para excluir "." y ".."
$files = array_filter($files, function($file) {
    return !in_array($file, array('.', '..'));
});

// Devolver la lista de archivos como un JSON
echo json_encode(array_values($files));
?>
