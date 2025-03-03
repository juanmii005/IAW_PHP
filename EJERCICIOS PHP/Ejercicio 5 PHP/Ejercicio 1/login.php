<?php
include_once 'funciones.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $resultado = usuarios_registrados($conn, $usuario, $contraseña);
}
?>
