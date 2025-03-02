<?php
include_once 'funciones.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contraseña'];

    $resultado = usuarios_registrados($conn, $usuario, $contraseña);
}
?>
