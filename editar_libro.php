<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

$archivo = 'libros.json';
$libros = json_decode(file_get_contents($archivo), true);

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$libroEncontrado = null;
$indice = null;

foreach ($libros as $i => $libro) {
    if ($libro['id'] == $id) {
        $libroEncontrado = $libro;
        $indice = $i;
        break;
    }
}

if (!$libroEncontrado) {
    echo "Libro no encontrado.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titulo = $_POST['titulo'] ?? $libroEncontrado['titulo'];
    $autor = $_POST['autor'] ?? $libroEncontrado['autor'];
    $generos = isset($_POST['generos']) ? explode(',', $_POST['generos']) : $libroEncontrado['generos'];
    $anio = intval($_POST['anio'] ?? $libroEncontrado['anio']);
    $calificacion = floatval($_POST['calificacion'] ?? $libroEncontrado['calificacion']);
    $descripcion = $_POST['descripcion'] ?? $libroEncontrado['descripcion'];
    $imagen = $_POST['imagen'] ?? $libroEncontrado['imagen'];

    $libros[$indice] = [
        "id" => $id,
        "titulo" => $titulo,
        "autor" => $autor,
        "generos" => array_map('trim', $generos),
        "anio" => $anio,
        "calificacion" => $calificacion,
        "descripcion" => $descripcion,
        "imagen" => $imagen
    ];

    file_put_contents($archivo, json_encode($libros));
    header("Location: gestionar_libros.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MeBook - Editar Libro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header>
    <div class="header-container">
        <div class="logo">MeBook 📖</div>
        <nav>
            <a href="gestionar_libros.php">Volver a Gestión de Libros</a>
        </nav>
    </div>
</header>
<div class="container">
    <h2 class="section-title">Editar Libro</h2>
    <form method="post" action="editar_libro.php?id=<?= $id ?>">
        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo" value="<?= htmlspecialchars($libroEncontrado['titulo']) ?>" required><br><br>
        
        <label for="autor">Autor:</label><br>
        <input type="text" id="autor" name="autor" value="<?= htmlspecialchars($libroEncontrado['autor']) ?>" required><br><br>
        
        <label for="generos">Géneros (separados por coma):</label><br>
        <input type="text" id="generos" name="generos" value="<?= htmlspecialchars(implode(',', $libroEncontrado['generos'])) ?>"><br><br>
        
        <label for="anio">Año de publicación:</label><br>
        <input type="number" id="anio" name="anio" value="<?= $libroEncontrado['anio'] ?>" required><br><br>
        
        <label for="calificacion">Calificación:</label><br>
        <input type="number" step="0.1" id="calificacion" name="calificacion" value="<?= $libroEncontrado['calificacion'] ?>" required><br><br>
        
        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" cols="50" required><?= htmlspecialchars($libroEncontrado['descripcion']) ?></textarea><br><br>
        
        <label for="imagen">Imagen (nombre del archivo):</label><br>
        <input type="text" id="imagen" name="imagen" value="<?= htmlspecialchars($libroEncontrado['imagen']) ?>" required><br><br>
        
        <button class="btn" type="submit">Guardar Cambios</button>
    </form>
</div>
<footer>
    <p>MeBook &copy; 2025-2030</p>
</footer>
</body>
</html>
