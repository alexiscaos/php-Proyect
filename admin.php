<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MeBook - Admin</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<header>
    <div class="header-container">
        <div class="logo">MeBook 📖</div>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="gestionar_libros.php">Gestionar Libros</a>
            <a href="gestionar_reseñas.php">Gestionar Reseñas</a>
        </nav>
    </div>
</header>

<div class="container">
    <h2 class="section-title">Panel de Administración</h2>
    <p>Bienvenido, Administrador.</p>
</div>

<footer>
    <p>MeBook &copy; 2025-2030</p>
</footer>

</body>
</html>
