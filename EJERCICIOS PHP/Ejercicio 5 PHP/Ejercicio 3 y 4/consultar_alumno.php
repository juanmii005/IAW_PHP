<?php
include_once 'funciones.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dni = $_POST['dni'];

    $resultado = consultar_alumno($conn, $dni);
}
?>
