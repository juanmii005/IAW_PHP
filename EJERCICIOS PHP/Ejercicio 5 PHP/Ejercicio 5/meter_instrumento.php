<?php
    include 'funciones.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST ['nombre'];
        $tipo = $_POST ['tipo'];
        $origen = $_POST ['origen'];
        $modelo = $_POST ['modelo'];

        $resultado = insertar_instrumento($conn, $nombre, $tipo, $origen, $modelo);
    }
?>