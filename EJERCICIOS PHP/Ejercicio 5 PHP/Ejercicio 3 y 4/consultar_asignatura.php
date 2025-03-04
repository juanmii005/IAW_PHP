<?php
include_once 'funciones.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigo = $_POST['codigo'];

    $resultado = consultar_asignatura($conn, $codigo);
}
?>
