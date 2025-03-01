<?php
session_start();
$usuario = $_SESSION['usuario'] ?? 'Invitado';
$archivoLista = "lista_lectura.txt";

if (isset($_GET['id'])) {
    $id_a_eliminar = $_GET['id'];
    if (file_exists($archivoLista)) {
        $lineas = file($archivoLista, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $nuevoContenido = "";
        foreach ($lineas as $linea) {
            list($user, $id) = explode(",", $linea);
            if ($user === $usuario && trim($id) == $id_a_eliminar) {
                continue;
            }
            $nuevoContenido .= $linea . "\n";
        }
        file_put_contents($archivoLista, $nuevoContenido);
    }
}
header("Location: mi_lista.php");
exit;
?>
