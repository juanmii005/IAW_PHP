<?php

include "funciones.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $resultado = crear_tabla($conn);

}

?>