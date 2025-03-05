<?php
include_once 'funciones.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dni = $_POST['dni'];
    $codAsignatura = $_POST['codAsignatura'];

    $resultado = matricular_alumnos($conn, $dni, $codAsignatura);
}
?>