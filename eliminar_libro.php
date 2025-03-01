<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

$archivo = 'libros.json';
$libros = json_decode(file_get_contents($archivo), true);

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$librosActualizados = array_filter($libros, function($libro) use ($id) {
    return $libro['id'] != $id;
});

file_put_contents($archivo, json_encode(array_values($librosActualizados)));

header("Location: gestionar_libros.php");
exit;
?>
