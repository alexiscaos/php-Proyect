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
    <p>Aquí se podrían añadir, editar o eliminar libros. (Funcionalidad en desarrollo)</p>
    <ul>
        <?php foreach ($libros as $libro): ?>
            <li>
                <strong><?= $libro['titulo'] ?></strong> - <?= $libro['autor'] ?>
                | <a class="btn" href="#">Editar</a>
                | <a class="btn" href="#">Eliminar</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<footer>
    <p>MeBook &copy; 2025-2030</p>
</footer>

</body>
</html>
