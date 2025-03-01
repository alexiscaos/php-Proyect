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
    <title>MeBook - Gestionar Reseñas</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<header>
    <div class="header-container">
        <div class="logo">MeBook 📖</div>
        <nav>
            <a href="admin.php">Panel Admin</a>
            <a href="gestionar_libros.php">Gestionar Libros</a>
        </nav>
    </div>
</header>

<div class="container">
    <h2 class="section-title">Gestionar Reseñas</h2>
    <p>Aqui se gestionan las reseñas (No si ni como logre gestionar los libros usando JSON)</p>
    <img src="img/reseñas.jpg" alt="">
</div>

<footer style="position: absolute">
    <p>MeBook &copy; 2025-2030</p>
</footer>

</body>
</html>
