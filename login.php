<?php
session_start();
$error = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['admin'] = true;
        header("Location: admin.php");
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MeBook - Login Admin</title>
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
    <h2 class="section-title">Login de Administrador</h2>
    <?php if ($error): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>
    <form method="post" action="login.php">
        <label for="username">Usuario: admin </label><br>
        <input type="text" name="username" id="username" required><br><br>
        
        <label for="password">Contraseña: admin123</label><br>
        <input type="password" name="password" id="password" required><br><br>
        
        <button class="btn" type="submit">Iniciar Sesión</button>
    </form>
</div>

<footer style="position: absolute">
    <p>MeBook &copy; 2025-2030</p>
</footer>

</body>
</html>
