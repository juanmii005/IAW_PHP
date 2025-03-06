<?php

include "funciones.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST["codigo"];

    $resultado = consultar_codigo($conn, $codigo);


}
?>