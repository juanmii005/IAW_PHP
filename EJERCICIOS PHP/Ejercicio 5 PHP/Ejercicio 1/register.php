<?php
include_once 'funciones.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $localidad = $_POST['localidad'];
    $centro_de_estudios = $_POST['centro_de_estudios'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $resultado = registro($conn, $dni, $nombre, $apellidos, $localidad, $centro_de_estudios, $usuario, $contraseña);
}

?>
