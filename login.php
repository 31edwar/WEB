<?php
session_start(); // Iniciar sesión

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener el correo electrónico y la contraseña del formulario
    $correo_electronico = $_POST['correo_electronico'];
    $contrasena = $_POST['contrasena'];

    // Conectar a la base de datos (reemplaza con tus propios datos de conexión)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_paila";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta para verificar las credenciales
    $sql = "SELECT * FROM usuario WHERE correo_electronico = '$correo_electronico'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($contrasena, $row['contrasena'])) {
            // Las credenciales son correctas, iniciar sesión
            $_SESSION['correo_electronico'] = $correo_electronico;
            header("Location: home.php");
            exit();
        } else {
            echo "<script>alert('Inicio de sesión fallido. Verifica tu correo y contraseña.');</script>";
          
        }
    } else {

        echo "<script>alert('Usuario no encontrado.');</script>";
        
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="signin">
    <div class="back-img">
      <div class="sign-in-text">
        <h2 class="active">Login</h2>
      </div><!--/.sign-in-text-->
      <div class="layer">
      </div><!--/.layer-->
    </div><!--/.back-img-->
    <div class="form-section">
      <form action="login.php" method="post">
        <!-- Email -->
        <label class="mdl-textfield__label" for="sample3">Correo</label>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" name="correo_electronico" type="email" id="sample3">
        </div>
        <br/>
        <br/>
        <!-- Contraseña -->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <label class="mdl-textfield__label" for="sample3">Contraseña</label>
          <input pattern=".{8,}" class="mdl-textfield__input" name="contrasena" type="password" id="sample3">
        </div>
        <br/>
        <a href="registro.php" class="forgot-text">Crear Una Cuenta</a>
        <!-- CheckBox -->
        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
        </label>
      </div><!--/.form-section-->
      <button class="sign-in-btn mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--raised mdl-button--colored">
        Iniciar Sesion
      </button><!--/button-->
    </div><!--/.signin-->
  </form>
</body>
</html>

<style>
.signin{
  position: relative;
  height: 700px;
  width: 500px;
  margin: auto;
  box-shadow: 0px 30px 125px -5px #000;}
/*Background Img*/
.back-img{
  position: relative;
  width: 100%;
  height: 250px;
  background: url('IMG/BACRGROUND.png')no-repeat   center center;
background-size: cover;
}
.laye  

</style>
