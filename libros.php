<?php
$archivo = 'libros.json';
if(file_exists($archivo)){
    $libros = json_decode(file_get_contents($archivo), true);
} else {
    $libros = [
        [
            "id" => 1,
            "titulo" => "Berserk",
            "autor" => "Kentaro Miura",
            "generos" => ["Fantasía", "Aventura"],
            "anio" => 2007,
            "calificacion" => 4.8,
            "descripcion" => "La historia está ambientada en una época con tintes de la Europa medieval y renacentista, en la cual se cuenta la vida de Guts (cuyo nombre fue traducido como Gatsu en las primeras ediciones en castellano), un mercenario huérfano que acompañado del elfo Puck, caza seres demoníacos llamados apóstoles.",
            "imagen" => "berserk.jpg",
        ],
        [
            "id" => 2,
            "titulo" => "Demian",
            "autor" => "Hermann Hesse",
            "generos" => ["Ciencia Ficción", "Distopía"],
            "anio" => 1919,
            "calificacion" => 4.6,
            "descripcion" => "Una sociedad totalitaria controlada por el Gran Hermano.",
            "imagen" => "demian.jpg",
        ],
        [
            "id" => 3,
            "titulo" => "Crimen y Castigo",
            "autor" => "Hermann Hesse",
            "generos" => ["Ciencia Ficción", "Distopía"],
            "anio" => 1919,
            "calificacion" => 4.6,
            "descripcion" => "Una sociedad totalitaria controlada por el Gran Hermano.",
            "imagen" => "crimen.jpg",
        ],
        [
            "id" => 4,
            "titulo" => "Cuento HP Lovecraft",
            "autor" => "Hermann Hesse",
            "generos" => ["Ciencia Ficción", "Distopía"],
            "anio" => 1919,
            "calificacion" => 4.6,
            "descripcion" => "Una sociedad totalitaria controlada por el Gran Hermano.",
            "imagen" => "Hp.jpg",
        ],
        [
            "id" => 5,
            "titulo" => "Demian",
            "autor" => "Hermann Hesse",
            "generos" => ["Ciencia Ficción", "Distopía"],
            "anio" => 1919,
            "calificacion" => 4.6,
            "descripcion" => "Una sociedad totalitaria controlada por el Gran Hermano.",
            "imagen" => "libro1.jpg",
        ],
        [
            "id" => 6,
            "titulo" => "Demian",
            "autor" => "Hermann Hesse",
            "generos" => ["Ciencia Ficción", "Distopía"],
            "anio" => 1919,
            "calificacion" => 4.6,
            "descripcion" => "Una sociedad totalitaria controlada por el Gran Hermano.",
            "imagen" => "libro2.jpg",
        ],
        [
            "id" => 7,
            "titulo" => "Demian",
            "autor" => "Hermann Hesse",
            "generos" => ["Ciencia Ficción", "Distopía"],
            "anio" => 1919,
            "calificacion" => 4.6,
            "descripcion" => "Una sociedad totalitaria controlada por el Gran Hermano.",
            "imagen" => "libro3.jpg",
        ],
    ];
    file_put_contents($archivo,json_encode($libros));
}

?>
