<?php
include_once 'funciones.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $resultado = consultar_alumno($conn);
}
?>
