<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include 'libros.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MeBook - Gestionar Libros</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header>
    <div class="header-container">
        <div class="logo">MeBook 📖</div>
        <nav>
            <a href="admin.php">Panel Admin</a>
            <a href="gestionar_reseñas.php">Gestionar Reseñas</a>
        </nav>
    </div>
</header>
<div class="container">
    <h2 class="section-title">Gestionar Libros</h2>
    <p>Aquí se pueden editar o eliminar libros.</p>
    <ul>
        <?php foreach ($libros as $libro): ?>
            <li>
                <strong><?= htmlspecialchars($libro['titulo']) ?></strong> - <?= htmlspecialchars($libro['autor']) ?>
                | <a class="btn" href="editar_libro.php?id=<?= $libro['id'] ?>">Editar</a>
                | <a class="btn" href="eliminar_libro.php?id=<?= $libro['id'] ?>" onclick="return confirm('¿Seguro que deseas eliminar este libro?');">Eliminar</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a class="btn" href="admin.php">Volver al Panel de Administración</a>
</div>
<footer style="position: absolute">
    <p>MeBook &copy; 2025-2030</p>
</footer>
</body>
</html>
