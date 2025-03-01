Proyecto: "Biblioteca Digital Interactiva"
Descripción:
El objetivo es desarrollar un sistema web donde los usuarios puedan explorar un catálogo de libros, gestionar su lista personal de lectura, escribir reseñas y calificar libros. Además, habrá un panel de administración para gestionar la base de datos de libros.

Especificaciones del Proyecto

1. Página principal ( index.php)
· Mostrar:
 · Introducción a la plataforma. 
 · Listado de libros populares  (ordenados por calificación promedio).
 · Enlaces a las secciones principales:
 · Catálogo de libros.
 · Mi lista de lectura (requiere inicio de sesión).
 · Panel de administración (solo para administradores).
· Incluir un banner dinámico con imágenes de libros destacados.

2. Catálogo de Libros ( catalogo.php)
· Mostrar un listado de libros disponibles con:
 · Imagen de la portada.
 · Título y autor.
 · Géneros (Ej.: Fantasía, Misterio, Ciencia Ficción).
 · Año de publicación.
 · Calificación promedio. //NO INCLUIDO
 · Botón "Ver más" para acceder a la página de detalle.
· Permitir filtración por : //NO INCLUIDO
 · Género.
 · Año de publicación.
 · Calificación mínima. //NO INCLUIDO

3. Detalle del libro ( detalle.php)
· Mostrar información completa del libro seleccionado:
 · Título, autor, géneros, año de publicación, sinopsis y calificación promedio.
 · Imagen de la portada.
 · Sección de reseñas donde los usuarios puedan: //NO INCLUIDO
 · Leer reseñas y evaluación de otros usuarios.  //NO INCLUIDO
 · Escribir su propia reseña (requiere inicio de sesión).//NO INCLUIDO
· Botón "Añadir a mi lista" para agregar el libro a la lista de lectura.

4. Mi Lista de Lectura ( mi_lista.php)
· Los usuarios pueden:
 · Ver los libros añadidos a su lista personal.
 · Marcar un libro como "Leído" , "Leyendo" o "Pendiente" . //NO INCLUIDO
 · Eliminar libros de la lista.
· Guardar la lista de lectura en un archivo lista_lectura.txt vinculado al usuario.

5. Reseñas y Calificaciones (reseñas.php) //NO INCLUIDO
· Los usuarios pueden:
 · Escribir una reseña para un libro, incluyendo:
 · Puntuación (1 a 5 estrellas).
 · Comentario (opcional).
 · Leer reseñas de otros usuarios.
 · Calcular y actualizar la calificación promedio del libro en función de las reseñas.

6. Panel de Administración ( admin.php)
· Funciones del administrador:
 · Gestionar Libros:
  · Añadir nuevos libros al catálogo.
  · Editar información de libros existentes.
  · Eliminar libros de la base de datos.
 · Gestionar Reseñas: //NO INCLUIDO
  · Revisar y eliminar reseñas inapropiadas.
 · Consultar estadisticas: //NO INCLUIDO
  · Libros más populares (por calificación promedio). //NO INCLUIDO
  · Géneros más leídos. //NO INCLUIDO
  · Usuarios más activos (cantidad de reseñas). //NO INCLUIDO

Extras Opcionales
· Búsqueda Avanzada:
 · Buscar libros por título.
· Sistema de Recomendaciones:
 · Mostrar recomendaciones personalizadas basadas en los géneros de los libros en la lista de lectura del usuario. //NO INCLUIDO
· Modo oscuro:
 · Permitir activar/desactivar un tema oscuro.
· Los 10 mejores: //NO INCLUIDO
 · Mostrar los libros mejores calificados.
· Diseño Profesional: 
 · Estilizar la plataforma con CSS y JavaScript.

Resumen del Flujo del Proyecto
1. Usuarios:
· Explora el catálogo de libros.
· Gestiona tu lista de lectura.
· Escriben y leen reseñas.
2. Administrador:
· Gestiona el catálogo de libros.
· Supervisa y elimina reseñas inapropiadas.
· Consulta estadísticas de la plataforma.