<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre_p = isset($_POST['nombre_p']) ? $_POST['nombre_p'] : '';
    $mesa = isset($_POST['mesa']) ? $_POST['mesa'] : '';
    $platillo = isset($_POST['platillo']) ? $_POST['platillo'] : '';
    $observacion = isset($_POST['observacion']) ? $_POST['observacion'] : '';
    $pago = isset($_POST['pago']) ? $_POST['pago'] : '';

    // Validar campos obligatorios
    if (!empty($nombre_p) && !empty($mesa) && !empty($platillo) && !empty($observacion) && !empty($pago)) {
        // Establecer los detalles de la conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "login_paila";

        // Crear la conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error de conexión a la base de datos: " . $conn->connect_error);
        }

        // Preparar la consulta SQL con sentencias preparadas
        $sql = "INSERT INTO pedidos (nombre_p, mesa, platillo, observacion, pago) VALUES (?, ?, ?, ?, ?)";

        // Crear una sentencia preparada
        $stmt = $conn->prepare($sql);

        // Vincular los parámetros
        $stmt->bind_param("sssss", $nombre_p, $mesa, $platillo, $observacion, $pago);

        // Ejecutar la consulta SQL y verificar el resultado
        if ($stmt->execute()) {
            // Redirigir a home.php
            header("Location: home.php");
            exit(); // Asegurarse de que el script se detenga después de redirigir
        } else {
            echo "Error al agregar el pedido: " . $stmt->error;
        }

        // Cerrar la conexión
        $stmt->close();
        $conn->close();
    } else {
    }
}
?>
