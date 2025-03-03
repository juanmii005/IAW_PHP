<?php
include_once 'conexion.php';

function registro($conn, $dni, $nombre, $apellidos, $localidad, $centro_de_estudios, $usuario, $contraseña) {
    $consulta = "INSERT INTO usuarios (dni, nombre, apellidos, localidad, centro_de_estudios, usuario, contraseña) VALUES ('$dni', '$nombre', '$apellidos', '$localidad', '$centro_de_estudios', '$usuario', '$contraseña')";
$final = mysqli_query($conn, $consulta);
    
    if($final){
        echo "<h2>El usuario se ha introducido correctamente en la base de datos</h2>";
        echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA DE INICIO</a>";
    } else {
        echo "<h2>El usuario no se ha introducido en la base de datos</h2>";
        echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA DE INICIO</a>";
    }
    
    return $final;
}

function usuarios_registrados($conn, $usuario, $contraseña) {
    $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' and contraseña = '$contraseña'";
    $datos = mysqli_query($conn, $consulta);

    if(mysqli_num_rows($datos) > 0){
        while($row = mysqli_fetch_assoc($datos)){
            echo "<h2>Bienvenido a la base de datos gestión " . $row['nombre'] . " " . $row['apellidos'] . "</h2>";
            echo "<strong>Tus datos registrados son los siguientes:</strong><br><br>";          
            echo "Usuario: " . $row['usuario'] . "<br>";
            echo "DNI: " . $row['dni'] . "<br>";
            echo "Localidad: " . $row['localidad'] . "<br>";
            echo "Centro de Estudios: " . $row['centro_de_estudios'] . "<br><br>";
            echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA DE INICIO</a>";
        }
    } else {
        echo "<h2>Usuario, contraseña o ambos no coinciden con los datos de la base</h2>";
        echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA DE INICIO</a>";

    }
    
    return $datos;
}
?>