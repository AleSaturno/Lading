<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar y validar los datos de entrada
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $apellido = filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_STRING);
    $correo = filter_input(INPUT_POST, 'correo', FILTER_VALIDATE_EMAIL);
    $telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
    $empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);
    $cargo = filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_STRING);
    $evento = filter_input(INPUT_POST, 'evento', FILTER_SANITIZE_STRING);
    $consentimiento = filter_input(INPUT_POST, 'consentimiento', FILTER_VALIDATE_BOOLEAN);

    // Validar que los campos obligatorios no estén vacíos
    if (!$nombre || !$apellido || !$correo || !$telefono || !$empresa || !$cargo || !$evento) {
        die('Por favor, completa todos los campos obligatorios.');
    }

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'alesaturno64@gmail.com'; // Reemplaza con tu dirección de Gmail
        $mail->Password = 'olgu cwwr xwvn fgho'; // Reemplaza con la contraseña de aplicación generada
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configuración de codificación
        $mail->CharSet = 'UTF-8';

        // Contenido del correo para el administrador
        $adminBody = "Nombre: " . htmlspecialchars($nombre) . "<br>Apellido: " . htmlspecialchars($apellido) . "<br>Correo: " . htmlspecialchars($correo) . "<br>Teléfono: " . htmlspecialchars($telefono) . "<br>Empresa: " . htmlspecialchars($empresa) . "<br>Cargo: " . htmlspecialchars($cargo) . "<br>Evento: " . htmlspecialchars($evento) . "<br>Consentimiento: " . htmlspecialchars($consentimiento ? 'Sí' : 'No');
        
        // Contenido del correo para el usuario
        $userBody = "Hola " . htmlspecialchars($nombre) . ",<br><br>Gracias por registrarte en el Atacados Anónimos Tour 2024.<br>Estos son los detalles de tu registro:<br><br>
                     Nombre: " . htmlspecialchars($nombre) . "<br>Apellido: " . htmlspecialchars($apellido) . "<br>Correo: " . htmlspecialchars($correo) . "<br>Teléfono: " . htmlspecialchars($telefono) . "<br>Empresa: " . htmlspecialchars($empresa) . "<br>Cargo: " . htmlspecialchars($cargo) . "<br>Evento: " . htmlspecialchars($evento) . "<br><br>
                     Esperamos verte en el evento.<br><br>Saludos,<br>Atacados Anónimos";

        // Enviar correo al administrador
        $mail->setFrom('alesaturno64@gmail.com', 'Atacados Anónimos');
        $mail->addAddress('alesaturno64@gmail.com'); // Reemplaza con tu dirección de Gmail (administrador)
        $mail->isHTML(true);
        $mail->Subject = 'Nuevo Registro de Contacto';
        $mail->Body    = $adminBody;
        $mail->AltBody = strip_tags($adminBody);
        $mail->send();

        // Limpiar direcciones para el siguiente correo
        $mail->clearAddresses();

        // Enviar correo al usuario
        $mail->addAddress($correo);
        $mail->Subject = 'Confirmación de Registro - Atacados Anónimos Tour 2024';
        $mail->Body    = $userBody;
        $mail->AltBody = strip_tags($userBody);
        $mail->send();

        // Redirigir a una página de éxito
        header("Location: ../gracias.php");
        exit();
    } catch (Exception $e) {
        echo "Error al enviar el correo. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
