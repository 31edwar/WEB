<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";  // Nombre del servidor (en este caso, localhost)
    $username = "root";   // Nombre de usuario de la base de datos
    $password = ""; // Contraseña de la base de datos
    $dbname = "login_paila"; // Nombre de la base de datos
    
    // Crear la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }
    

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
$mensaje = $_POST['mensaje'];

// Preparar la consulta SQL
$sql = "INSERT INTO reservas (nombre, correo, celular, mensaje) VALUES ('$nombre', '$correo', '$celular', '$mensaje')";

if ($conn->query($sql) === TRUE) {
     echo "<script>alert('Reserva agregada correctamente.');</script>";

} else {
    echo "Error al agregar la reserva: " . $conn->error;
}

$conn->close();
}
?>
