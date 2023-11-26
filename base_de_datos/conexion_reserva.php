<?php
// Datos de conexión a la base de datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_paila";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$celular = $_POST['celular'];
$fecha = $_POST['date'];
$puestos = $_POST['puestos'];

// Preparar y ejecutar la consulta SQL
$sql = "INSERT INTO reservas (nombre, celular, fecha, puestos) VALUES ('$nombre', '$celular', '$fecha', '$puestos')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Reserva realizada.');</script>";
} else {
    echo "Error al insertar el registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
}
?>

    <!-- Book Table Section -->
    <section id="book-table" class="bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 d-none d-md-block">
                    <img src="assets/imgs/contact.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="w-100 rounded shadow">
                </div>
                <div class="col-md-6">
                    <form action="home.php" method="post" onsubmit="return validateForm()">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="celular">Celular</label>
                            <input type="number" class="form-control" name="celular" id="celular" placeholder="Celular" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Fecha y Hora</label>
                            <input type="datetime-local" class="form-control" name="date" id="date" required>
                        </div>
                        <div class="form-group">
                            <label for="Puestos">Puestos</label>
                            <input type="number" class="form-control" name="puestos" id="seats" placeholder="Puestos" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Reservar Una Mesa</button>
                    </form>

                    <script>
                        // Obtén la referencia al campo de fecha
                        var dateInput = document.getElementById('date');

                        // Obtén la fecha actual
                        var currentDate = new Date();

                        // Establece la fecha mínima permitida como la fecha actual
                        dateInput.min = currentDate.toISOString().slice(0, 16);

                        // Añade un evento para verificar fechas ocupadas
                        dateInput.addEventListener('change', function () {
                            var selectedDate = new Date(dateInput.value);

                            // Lógica para verificar si la fecha está ocupada
                            if (selectedDate.getTime() < currentDate.getTime()) {
                                alert('La fecha seleccionada ya ha pasado. Por favor, elige una fecha futura.');
                                dateInput.value = ''; // Limpia el campo de fecha
                            }
                            // Puedes agregar más lógica aquí para verificar otras fechas ocupadas
                        });
                    </script>

                    <script>
                        function validateForm() {
                            const nombre = document.forms[0]["nombre"].value;
                            const celular = document.forms[0]["celular"].value;
                            const date = document.forms[0]["date"].value;
                            const puestos = document.forms[0]["puestos"].value;

                            if (nombre === '' || celular === '' || date === '' || puestos === '') {
                                alert("Por favor, complete todos los campos.");
                                return false;
                            }
                            return true;
                        }
                    </script>

                </div>
            </div>
        </div>
    </section>
    <!-- End OF Book Table Section -->
