<?php

include "funciones.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST["tipo"];

    $resultado = consultar_tipo($conn, $tipo);


}
?>