<?php
include_once 'funciones.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $numero_creditos = $_POST['numero_creditos'];

    $resultado = registro($conn, $codigo, $nombre, $numero_creditos);
}
?>
