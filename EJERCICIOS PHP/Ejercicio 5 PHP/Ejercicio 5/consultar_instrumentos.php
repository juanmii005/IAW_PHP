<?php

include "funciones.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $resultado = consultar_instrumentos($conn);


}
?>