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
    

    // Obtener el correo del formulario
    $correo_electronico = $_POST['correo_electronico'];

    // Verificar si el correo existe en la base de datos de usuarios registrados
    $email_check_query = "SELECT * FROM usuario WHERE correo_electronico='$correo_electronico' LIMIT 1";
    $result = $conn->query($email_check_query);

    if ($result->num_rows > 0) {
        // El correo existe en la base de datos de usuarios registrados, permitir el envío del formulario
        $nombre = $_POST['nombre'];
        $celular = $_POST['celular'];
        $mensaje = $_POST['mensaje'];

        // Preparar la consulta SQL
        $sql = "INSERT INTO contacto (nombre, correo_electronico, celular, mensaje) VALUES ('$nombre', '$correo_electronico', '$celular', '$mensaje')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Mensaje Enviado.');</script>";
            header("Location: home.php");
        } else {
            echo "Error al agregar la reserva: " . $conn->error;
        }
    } else {
        // El correo no existe en la base de datos de usuarios registrados, mostrar un mensaje de error
        echo "<script>alert('Correo no registrado.');</script>";
    }

    $conn->close();
}
?>

<!doctype html>
<!--[if lte IE 9]>
<html lang="en" class="oldie">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us Form</title>
  <link rel="stylesheet" media="all" href="css/style_con.css" />
  <link rel="icon" type="image/x-icon" href="assets/imgs/fav.ico">


</head>
<body>
<div class="container">
	<div class="row">
			<h1>Contatenos</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">¡Nos encantaría saber de usted!</h4>
	</div>
	<div class="row input-container">
  <form action="contacto.php" method="post">
  <div class="styled-input wide">
    <input type="text" name="nombre" required />
    <label>Nombre</label> 
  </div>
  <div class="styled-input">
    <input type="text" name="correo_electronico" pattern="[@}" required />
    <label>Correo Electronico</label> 
  </div>
  <div class="styled-input" style="float:right;">
    <input type="text" name="celular" required />
    <label>Celular</label> 
  </div>
  <div class="styled-input wide">
    <textarea name="mensaje" required></textarea>
    <label>Mensaje</label>
  </div>
  <div class="btn-lrg submit-btn">
    <input type="submit" value="Enviar Mensaje" />
  </div>
</form>

</body>
</html>