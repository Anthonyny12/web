
<?php
// CONEXIÓN
$conexion = new mysqli("localhost", "root", "", "prueba");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// GUARDAR DATOS DEL FORMULARIO
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["Nombre"];
    $curso = $_POST["Curso"];
    $edad = $_POST["Edad"];

    $sql = "INSERT INTO rer (Nombre, Curso, Edad) VALUES ('$nombre', '$curso', '$edad')";
    if ($conexion->query($sql) === TRUE) {
        echo "<p class='mensaje exito'>¡Registro guardado exitosamente!</p>";
    } else {
        echo "<p class='mensaje error'>Error al guardar: " . $conexion->error . "</p>";
    }
}
?>

