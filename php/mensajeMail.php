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

    $to = "tu_correo@example.com";
    $subject = "Nuevo Registro de Contacto";
    $message = "Nombre: $nombre
    Apellido: $apellido
    Correo: $correo
    Teléfono: $telefono
    Empresa: $empresa
    Cargo: $cargo
    Evento: $evento
    Consentimiento: $consentimiento";
    $headers = "From: $correo";

    mail($to, $subject, $message, $headers);

    // Redirigir a una página de éxito
    header("Location: gracias.html");
    exit();
}
?>
