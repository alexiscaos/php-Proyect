<?php
session_start();
include 'libros.php'; // Incluye el array de libros

$usuario = $_SESSION['usuario'] ?? 'Invitado';
$archivoLista = "lista_lectura.txt";

// Si se recibe el parámetro para agregar un libro, se añade al archivo
if (isset($_GET['agregar'])) {
    $id_libro = $_GET['agregar'];
    $linea = "$usuario,$id_libro\n";
    file_put_contents($archivoLista, $linea, FILE_APPEND);
    header("Location: mi_lista.php");
    exit;
}

// Leer la lista de lectura para el usuario actual
$lista = [];
if (file_exists($archivoLista)) {
    $lineas = file($archivoLista, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lineas as $linea) {
        list($user, $id) = explode(",", $linea);
        if ($user === $usuario) {
            $lista[] = trim($id);
        }
    }
}

// Función para obtener los datos completos del libro por su ID
function obtenerLibro($id, $libros) {
    foreach ($libros as $libro) {
        if ($libro['id'] == $id) {
            return $libro;
        }
    }
    return null;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MeBook - Mi Lista</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">MeBook 📖</div>
            <nav>
                <a href="index.php">Inicio</a>
                <a href="catalogo.php">Catálogo</a>
                <a href="login.php">Login Admin</a>
            </nav>
        </div>
    </header>

    <div class="container">
        <h2 class="section-title">Mi Lista de Lectura</h2>
        <?php if (empty($lista)): ?>
            <p>No has añadido libros a tu lista.</p>
        <?php else: ?>
            <ul>
                <?php foreach ($lista as $id_libro): ?>
                    <?php $libro = obtenerLibro($id_libro, $libros); ?>
                    <?php if ($libro): ?>
                        <li>
                            <img src="img/<?= htmlspecialchars($libro['imagen']) ?>" width="100" alt="<?= htmlspecialchars($libro['titulo']) ?>">
                            <strong><?= htmlspecialchars($libro['titulo']) ?></strong> (ID: <?= $id_libro ?>)
                            <a class="btn" href="eliminar.php?id=<?= $id_libro ?>">Eliminar</a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>

    <footer>
        <p>MeBook &copy; 2025-2030</p>
    </footer>
</body>
</html>
