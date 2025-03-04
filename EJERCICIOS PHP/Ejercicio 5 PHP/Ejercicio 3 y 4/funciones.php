<?php
include_once 'conexion.php';

function registro($conn, $codigo, $nombre, $numero_creditos) {
    $comprobacion = mysqli_query($conn, "SELECT codigo FROM asignaturas WHERE codigo = '$codigo'");
    
    if(mysqli_num_rows($comprobacion) > 0){
        echo "<center><h2>La asignatura no se ha introducido en la base de datos porque ya existe una con ese codigo</h2>";
        echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
    } else {
        $consulta = "INSERT INTO asignaturas (codigo, nombre, numero_creditos) VALUES ('$codigo', '$nombre', '$numero_creditos')";
        $registro = mysqli_query($conn, $consulta);
        
        if ($registro) {
            echo "<center><h2>La asignatura se ha introducido en la base de datos correctamente</h2>";
            echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
        } 

        return $registro;
    }
}

function registro_alumnos($conn, $dni, $nombre, $apellidos, $localidad, $año_inicio, $acceso) {
    $comprobacion = mysqli_query($conn, "SELECT dni FROM alumnos WHERE dni = '$dni'");

    if (mysqli_num_rows($comprobacion) > 0) {
        echo "<center><h2>El alumno ya esta registrado en la base de datos</h2>";
        echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
    } else {
        $consulta_alumnos = "INSERT INTO alumnos (dni, nombre, apellidos, localidad, año_inicio, acceso) VALUES ('$dni', '$nombre', '$apellidos', '$localidad', '$año_inicio', '$acceso')";
        $registrar_alumnos = mysqli_query($conn, $consulta_alumnos);

        if ($registrar_alumnos) {
            echo "<center><h2>El alumno se ha registrado en la base de datos correctamente</h2>";
            echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
        }

        return $registrar_alumnos;

    }

}

function consultar_asignatura($conn, $codigo) {
    $consulta = "SELECT * FROM asignaturas WHERE codigo = '$codigo'";
    $informacion = mysqli_query($conn, $consulta);

    if(mysqli_num_rows($informacion) > 0){
        while($row = mysqli_fetch_assoc($informacion)){
            echo "<center><h2>La asignatura " . $row['nombre'] . " esta registradA en la base de datos</h2>";
            echo "<strong>Los datos registrados son los siguientes:</strong><br><br>";          
            echo "Nombre: " . $row['nombre'] . "<br>";
            echo "Codigo: " . $row['codigo'] . "<br>";
            echo "Creditos: " . $row['numero_creditos'] . "<br><br>";
            echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA DE INICIO</a>";
        }
    } else {
        echo "<center><h2>La asignatura no esta registrada</h2>";
        echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";

    }
    
    return $informacion;
}

function consultar_alumno($conn, $dni) {
    $consulta = "SELECT * FROM alumnos WHERE dni = '$dni'";
    $informacion = mysqli_query($conn, $consulta);

    if(mysqli_num_rows($informacion) > 0){
        while($row = mysqli_fetch_assoc($informacion)){
            echo "<center><h2>El alumno " . $row['nombre'] . " " . $row['apellidos'] . " esta registrado en la base de datos</h2>";
            echo "<strong>Los datos registrados son los siguientes:</strong><br><br>";          
            echo "Nombre: " . $row['nombre'] . "<br>";
            echo "Apellidos: " . $row['apellidos'] . "<br>";
            echo "DNI: " . $row['dni'] . "<br>";
            echo "Localidad: " . $row['localidad'] . "<br>";
            echo "Año de inicio: " . $row['año_inicio'] . "<br>";
            echo "Modo de acceso: " . $row['acceso'] . "<br><br>";
            echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA DE INICIO</a>";
        }
    } else {
        echo "<center><h2>El alumno no esta registrado</h2>";
        echo "<a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";

    }
    
    return $informacion;
}

?>