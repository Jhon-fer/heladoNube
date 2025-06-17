<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Cargar autoload de Composer
require '../vendor/autoload.php';

// Conexión a la base de datos
require_once("../config/conexion.php");

// Verificar que se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar datos
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $correo = $conn->real_escape_string($_POST['correo']);
    $mensaje = $conn->real_escape_string($_POST['mensaje']);

    // Guardar en la base de datos
    $sql = "INSERT INTO contacto (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";
    $conn->query($sql);

    // Configurar PHPMailer
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'verificacion467@gmail.com'; // Tu correo
        $mail->Password = 'opst zaro rqxd ozak';       // Contraseña de aplicación
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';

        $mail->setFrom($correo, $nombre);
        $mail->addAddress('verificacion467@gmail.com'); // Destinatario

        $mail->Subject = 'Nuevo mensaje de contacto';
        $mail->Body    = "Has recibido un mensaje desde el formulario:\n\nNombre: $nombre\nCorreo: $correo\n\nMensaje:\n$mensaje";
        $mail->send();

        // ✅ Estilo moderno de mensaje
        echo '
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Mensaje Enviado</title>
            <style>
                body {
                    background-color: #f4f4f4;
                    font-family: "Segoe UI", sans-serif;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                }
                .mensaje {
                    background: #fff;
                    padding: 30px 40px;
                    border-radius: 12px;
                    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
                    text-align: center;
                }
                .mensaje h2 {
                    color: rgb(0, 180, 90);
                    margin-bottom: 15px;
                }
                .mensaje p {
                    font-size: 16px;
                    color: #333;
                }
                .boton-regresar {
                    margin-top: 20px;
                    padding: 10px 18px;
                    font-size: 14px;
                    background-color: #007bff;
                    color: white;
                    border: none;
                    border-radius: 6px;
                    text-decoration: none;
                    display: inline-block;
                }
                .boton-regresar:hover {
                    background-color: #0056b3;
                }
            </style>
        </head>
        <body>
            <div class="mensaje">
                <h2>✅ Mensaje enviado correctamente</h2>
                <p>Gracias por contactarnos. Te responderemos pronto.</p>
                <a href="javascript:history.back()" class="boton-regresar">⬅ Volver</a>
            </div>
        </body>
        </html>';
    } catch (Exception $e) {
        echo "❌ Error al enviar el mensaje: {$mail->ErrorInfo}";
    }
} else {
    echo "❌ Acceso no permitido.";
}
?>
