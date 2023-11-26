<?php
// Establecer la conexión a la base de datos
$servername = "localhost"; // generalmente "localhost"
$username = "root";
$password = "";
$dbname = "login_paila"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Verificar si se reciben los datos correctamente
if(isset($_POST['nombre_apellido']) && isset($_POST['correo_electronico']) && isset($_POST['numero_telefonico']) && isset($_POST['contrasena'])) {
    $nombre_apellido = $_POST['nombre_apellido'];
    $correo_electronico = $_POST['correo_electronico'];
    $numero_telefonico = $_POST['numero_telefonico'];
    $contrasena = $_POST['contrasena'];
    
    if (strlen($contrasena) < 8) {
        
        echo "<script>alert('a contraseña debe tener al menos 8 caracteres')</script>.";
        exit();
    }
    // Encriptar la contraseña (hashing)
    $contrasena_encriptada = password_hash($contrasena, PASSWORD_DEFAULT);
    

    // Verificar si el correo electrónico ya está en la base de datos
    $check_email_query = "SELECT * FROM usuario WHERE correo_electronico='$correo_electronico'";
    $email_result = $conn->query($check_email_query);
    if ($email_result->num_rows > 0) {
        
        echo "<script>alert('El correo electrónico ya está registrado')</script>.";
    } else {
        // Verificar si el número telefónico ya está en la base de datos
        $check_phone_query = "SELECT * FROM usuario WHERE numero_telefonico='$numero_telefonico'";
        $phone_result = $conn->query($check_phone_query);
        if ($phone_result->num_rows > 0) {
            echo "<script>alert('El número telefónico ya está registrado')</script>.";
            
        } else {
            // Preparar la consulta SQL para insertar en la tabla
            $sql = "INSERT INTO usuario (nombre_apellido, correo_electronico, numero_telefonico, contrasena)
                    VALUES ('$nombre_apellido', '$correo_electronico', '$numero_telefonico', '$contrasena_encriptada')";

            if ($conn->query($sql) === TRUE) {
                // Registro exitoso, redireccionar a index.php
                header("Location: login.php");
                exit(); // Asegurarse de que el código se detenga después de la redirección
            } else {
                echo "Error al registrar: " . $conn->error;
            }
        }
    }
} else {
     echo "Por favor, complete todos los campos.";
}

// Cerrar la conexión
$conn->close();
?>

<div id="login-box">
  <div class="left">
    <h1>Crear Una Cuenta</h1>

    <form action="registro.php" method="post">
    <input type="text" name="nombre_apellido" placeholder="Nombre y Apellido" required />
  <input type="text" name="correo_electronico" placeholder="Correo electrónico" pattern="[@}" required />
  <input type="text" name="numero_telefonico" placeholder="Numero telefonico" required />
  <input type="password" name="contrasena" placeholder="Contraseña" required />
  
  
    <input type="submit" name="signup_submit" value="Registrarse" required/>
  </div>
</form >
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>
  <link rel="stylesheet" href="css/style.css">

</div>
