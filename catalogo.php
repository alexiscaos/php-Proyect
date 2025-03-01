<?php
include 'libros.php';

$busqueda = $_GET['busqueda'] ?? '';
$resultados = [];
if ($busqueda) {
    foreach ($libros as $libro) {
        if (stripos($libro['titulo'], $busqueda) !== false || stripos($libro['autor'], $busqueda) !== false) {
            $resultados[] = $libro;
        }
    }
} else {
    $resultados = $libros;
}
?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MeBook - Catálogo</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<header>
    <div class="header-container">
        <div class="logo">MeBook 📖</div>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="mi_lista.php">Tu Lista</a>
            <a href="login.php">Login Admin</a>
        </nav>
        <form class="search-form" action="catalogo.php" method="GET">
            <input type="text" name="busqueda" placeholder="Buscar..." value="<?= htmlspecialchars($busqueda) ?>">
            <button type="submit">Buscar</button>
        </form>
    </div>
</header>

<div class="container">
    <h2 class="section-title">Catálogo de Libros</h2>
    <ul class="libros-list">
        <?php if (empty($resultados)): ?>
            <li>No se encontraron resultados para "<?= htmlspecialchars($busqueda) ?>"</li>
        <?php else: ?>
            <?php foreach ($resultados as $libro): ?>
                <li>
                    <img src="img/<?= $libro['imagen'] ?>" width="100"><br>
                    <div class="book-info">
                        <strong><?= $libro['titulo'] ?></strong> - <?= $libro['autor'] ?> (<?= $libro['anio'] ?>)<br>
                        Géneros: <?= implode(", ", $libro['generos']) ?><br>
                        Calificación: <?= $libro['calificacion'] ?>/5
                    </div>
                    <a class="btn" href="detalle.php?id=<?= $libro['id'] ?>">Ver más</a>
                    <a class="btn" href="mi_lista.php?agregar=<?= $libro['id'] ?>">Añadir a mi lista</a>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</div>

<footer>
    <p>MeBook &copy; 2025-2030</p>
</footer>

</body>
</html>
