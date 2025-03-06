<?php
include_once "conexion.php";

function crear_base($conn) {
    $consulta = "CREATE DATABASE IF NOT EXISTS musica";
    $comprobacion = mysqli_query($conn, $consulta);

    if ($comprobacion) {
        echo "Se ha creado la base de datos correctamente";
        echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";

    } else {
        echo "No se ha podido crear la base de datos";
        echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";

    }
}

function crear_tabla($conn) {
    mysqli_select_db($conn, "musica");
    $consulta = "CREATE TABLE IF NOT EXISTS instrumento (
                 codigo INT AUTO_INCREMENT PRIMARY KEY,
                 nombre VARCHAR(20) NOT NULL,
                 tipo VARCHAR(20),
                 origen VARCHAR(20),
                 modelo VARCHAR(20));";
    $comprobacion = mysqli_query($conn, $consulta);

    if ($comprobacion) {
        echo "<center><h2>Se ha creado la tabla correctamente</h2>";
        echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
    } else {
        echo "<center><h2>No se ha podido crear la tabla</h2>";
        echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
    }
}

function insertar_instrumento($conn, $nombre, $tipo, $origen, $modelo) {
    mysqli_select_db($conn, "musica");
    $consulta = "SELECT nombre FROM instrumento WHERE nombre = '$nombre'";
    $comprobacion = mysqli_query($conn, $consulta);

    if (mysqli_num_rows($comprobacion) > 0) {
        echo "<center><h2>Ese instrumento ya esta en la base de datos</h2>";
        echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
    } else {
        $insercion = "INSERT INTO instrumento(nombre, tipo, origen, modelo) VALUES ('$nombre','$tipo','$origen','$modelo')";
        $insertar = mysqli_query($conn, $insercion);

        if ($insertar) {
            echo "<center><h2>El instrumento ha sido añadido a la base de datos</h2>";
            echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
        } else {
            echo "<center><h2>No se ha podido añadir el instrumento a la base de datos</h2>";
            echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
        }

    }

}

function consultar_codigo($conn, $codigo) {
    mysqli_select_db($conn, "musica");
    $consulta = "SELECT * FROM instrumento WHERE codigo = '$codigo'";
    $comprobacion = mysqli_query($conn, $consulta);

    if (mysqli_num_rows($comprobacion) > 0) {
        while ($row = mysqli_fetch_assoc($comprobacion)) {
            echo "<center><h3>El instrumento con codigo " . $row["codigo"] . " esta registrado en la base de datos con la siguiente informacion:</h3>";
            echo "Nombre: " . $row["nombre"] . "<br>";
            echo "Codigo: " . $row["codigo"] . "<br>";
            echo "Tipo: " . $row["tipo"] . "<br>";
            echo "Origen: " . $row["origen"] . "<br><br>";
        }
        echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
    } else {
        echo "<center><h2>No se ha podido encontrar el instrumento con ese id</h2>";
            echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
    }

}

function consultar_instrumentos($conn) {
    mysqli_select_db($conn, "musica");
    $consulta = "SELECT * FROM instrumento";
    $comprobacion = mysqli_query($conn, $consulta);

    if (mysqli_num_rows($comprobacion) > 0) {
        while ($row = mysqli_fetch_assoc($comprobacion)) {
            echo "<center><h3>El instrumento con codigo " . $row["codigo"] . " tiene la siguiente informacion:</h3>";
            echo "Nombre: " . $row["nombre"] . "<br>";
            echo "Codigo: " . $row["codigo"] . "<br>";
            echo "Tipo: " . $row["tipo"] . "<br>";
            echo "Origen: " . $row["origen"] . "<br><br>";
        }
        echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
    } else {
        echo "<center><h2>No se ha podido encontrar el instrumento con ese id</h2>";
        echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
    }

}

function consultar_nombre($conn, $nombre) {
    mysqli_select_db($conn, "musica");
    $consulta = "SELECT * FROM instrumento WHERE nombre = '$nombre'";
    $comprobacion = mysqli_query($conn, $consulta);

    if (mysqli_num_rows($comprobacion) > 0) {
        while ($row = mysqli_fetch_assoc($comprobacion)) {
            echo "<center><h3>El instrumento con nombre " . $row["nombre"] . " esta registrado en la base de datos con la siguiente informacion:</h3>";
            echo "Nombre: " . $row["nombre"] . "<br>";
            echo "Codigo: " . $row["codigo"] . "<br>";
            echo "Tipo: " . $row["tipo"] . "<br>";
            echo "Origen: " . $row["origen"] . "<br><br>";
        }
        echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
    } else {
        echo "<center><h2>No se ha podido encontrar el instrumento con ese id</h2>";
            echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
    }

}

function consultar_tipo($conn, $tipo) {
    mysqli_select_db($conn, "musica");
    $consulta = "SELECT * FROM instrumento WHERE tipo = '$tipo'";
    $comprobacion = mysqli_query($conn, $consulta);

    if (mysqli_num_rows($comprobacion) > 0) {
        echo "<center><h3>Los instrumentos del tipo seleccionado son:</h3>";
        while ($row = mysqli_fetch_assoc($comprobacion)) {
            echo "Nombre: " . $row["nombre"] . "<br>";
            echo "Codigo: " . $row["codigo"] . "<br>";
            echo "Tipo: " . $row["tipo"] . "<br>";
            echo "Origen: " . $row["origen"] . "<br><br>";
        }
        echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
    } else {
        echo "<center><h2>No se ha podido encontrar el instrumento con ese id</h2>";
            echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
    }

}

function consultar_origen($conn, $origen) {
    mysqli_select_db($conn, "musica");
    $consulta = "SELECT * FROM instrumento WHERE origen = '$origen'";
    $comprobacion = mysqli_query($conn, $consulta);

    if (mysqli_num_rows($comprobacion) > 0) {
        echo "<center><h3>Los instrumentos del origen selccionado son:</h3>";
        while ($row = mysqli_fetch_assoc($comprobacion)) {
            echo "Nombre: " . $row["nombre"] . "<br>";
            echo "Codigo: " . $row["codigo"] . "<br>";
            echo "Tipo: " . $row["tipo"] . "<br>";
            echo "Origen: " . $row["origen"] . "<br><br>";
        }
        echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
    } else {
        echo "<center><h2>No se ha podido encontrar el instrumento con ese id</h2>";
            echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
    }

}
?>