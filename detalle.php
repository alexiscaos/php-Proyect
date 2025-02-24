<?php
include 'libros.php';

$id = isset($_GET['id']) ? $_GET['id'] : 1;
$libro = null;
foreach ($libros as $l) {
    if ($l['id'] == $id) {
        $libro = $l;
        break;
    }
}
if (!$libro) {
    echo "Libro no encontrado.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MeBook - Detalle</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<header>
    <div class="header-container">
        <div class="logo">MeBook 📖</div>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="catalogo.php">Catálogo</a>
            <a href="mi_lista.php">Tu Lista</a>
        </nav>
    </div>
</header>

<div class="container">
    <h2 class="section-title"><?= $libro['titulo'] ?></h2>
    <img src="img/<?= $libro['imagen'] ?>" width="200"><br>
    <p><strong>Autor:</strong> <?= $libro['autor'] ?></p>
    <p><strong>Géneros:</strong> <?= implode(", ", $libro['generos']) ?></p>
    <p><strong>Año:</strong> <?= $libro['anio'] ?></p>
    <p><strong>Descripción:</strong> <?= $libro['descripcion'] ?></p>
    <p><strong>Calificación:</strong> <?= $libro['calificacion'] ?>/5</p>
    <a class="btn" href="mi_lista.php?agregar=<?= $libro['id'] ?>">Añadir a mi lista</a>
</div>

<footer>
    <p>MeBook &copy; 2025-2030</p>
</footer>

</body>
</html>
