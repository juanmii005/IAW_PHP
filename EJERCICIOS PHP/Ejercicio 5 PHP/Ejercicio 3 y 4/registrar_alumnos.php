<?php
    include_once 'funciones.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $dni = $_POST ['dni'];
        $nombre = $_POST ['nombre'];
        $apellidos = $_POST ['apellidos'];
        $localidad = $_POST ['localidad'];
        $año_inicio = $_POST ['año_inicio'];
        $acceso = $_POST ['acceso'];

        $resultado = registro_alumnos($conn, $dni, $nombre, $apellidos, $localidad, $año_inicio, $acceso);
    }
?>