<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservas";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $adultos = $_POST['adultos'];
    $niños = $_POST['niños'];
    $infantes = $_POST['infantes'];
    $fecha = $_POST['fecha'];
    $tour = $_POST['tour'];
    $total = $_POST['total'];
    $pago_nombre = $_POST['pago_nombre'];
    $pago_correo = $_POST['pago_correo'];
    $pago_telefono = $_POST['pago_telefono'];

    $sql = "INSERT INTO reservas_tour (nombre, correo, telefono, adultos, niños, infantes, fecha, tour, total, pago_nombre, pago_correo, pago_telefono)
            VALUES ('$nombre', '$correo', '$telefono', '$adultos', '$niños', '$infantes', '$fecha', '$tour', '$total', '$pago_nombre', '$pago_correo', '$pago_telefono')";

    if ($conn->query($sql) === TRUE) {
        echo "Reserva guardada con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

