<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $empresa = $_POST['empresa'];
    $cargo = $_POST['cargo'];
    $evento = $_POST['evento'];
    $consentimiento = isset($_POST['consentimiento']) ? 1 : 0;

    // Conexión a la base de datos
    $conn = new mysqli("host", "usuario", "contraseña", "base_de_datos");

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Preparar y ejecutar la consulta de inserción
    $stmt = $conn->prepare("INSERT INTO registros (nombre, apellido, correo, telefono, empresa, cargo, evento, consentimiento) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssi", $nombre, $apellido, $correo, $telefono, $empresa, $cargo, $evento, $consentimiento);

    if ($stmt->execute()) {
        // Redirigir a una página de éxito
        header("Location: gracias.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}
?>
