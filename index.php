<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MeBook - Inicio</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<header>
    <div class="header-container">
        <div class="logo">MeBook 📖</div>
        <nav>
            <a href="catalogo.php">Catálogo</a>
            <a href="mi_lista.php">Tu Lista</a>
            <a href="login.php">Login Admin</a>
        </nav>
        <form class="search-form" action="catalogo.php" method="GET">
            <input type="text" name="busqueda" placeholder="Buscar...">
            <button type="submit">Buscar</button>
        </form>
    </div>
</header>

<div class="container">
    <!-- Carrusel -->
    <div class="carousel" id="carousel">
        <div class="carousel-track" id="carouselTrack">
            <div class="carousel-slide">
                <img src="img/libro1.jpg" alt="Libro Destacado 1">
            </div>
            <div class="carousel-slide">
                <img src="img/libro2.jpg" alt="Libro Destacado 2">
            </div>
            <div class="carousel-slide">
                <img src="img/libro3.jpg" alt="Libro Destacado 3">
            </div>
        </div>
        <button class="carousel-btn left" id="btnPrev">&#10094;</button>
        <button class="carousel-btn right" id="btnNext">&#10095;</button>
    </div>

    <h2 class="section-title">Bienvenido a MeBook</h2>
    <p>En MeBook gestionarás tus libros, explorarás el catálogo y podrás opinar sobre ellos.</p>

    <h3 class="section-title">Novedades</h3>
    <div class="expositor">
        <img src="img/Hp.jpg" alt="Novedad 1" width="150">
        <img src="img/demian.jpg" alt="Novedad 2" width="150">
        <img src="img/libro2.jpg" alt="Novedad 3" width="150">
    </div>

    <h3 class="section-title">Recomendaciones</h3>
    <div class="expositor">
        <img src="img/libro1.jpg" alt="Recomendado 1" width="150">
        <img src="img/crimen.jpg" alt="Recomendado 2" width="150">
        <img src="img/berserk.jpg" alt="Recomendado 3" width="150">
    </div>
</div>

<footer>
    <p>MeBook &copy; Copyright 2025-2030 &lt;3</p>
</footer>

<!-- Carrusel del Codepen c: -->
<script>
    const track = document.getElementById('carouselTrack');
    const slides = Array.from(track.children);
    const btnPrev = document.getElementById('btnPrev');
    const btnNext = document.getElementById('btnNext');
    let currentIndex = 0;

    function showSlide(index) {
        const slideWidth = slides[0].getBoundingClientRect().width;
        track.style.transform = `translateX(-${slideWidth * index}px)`;
    }

    btnPrev.addEventListener('click', () => {
        currentIndex = currentIndex > 0 ? currentIndex - 1 : slides.length - 1;
        showSlide(currentIndex);
    });

    btnNext.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    });
</script>

</body>
</html>
