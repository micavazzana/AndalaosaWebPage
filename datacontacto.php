<?php

if (isset($_POST['submit'])) {
    // Recopilar los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['mail'];
    $mensaje = $_POST['mensaje'];

    // Validar los datos del formulario
    if (empty($nombre) || empty($correo) || empty($mensaje)) {
        echo "Por favor complete todos los campos del formulario.";
        exit();
    }

    // Configurar el correo electrónico
    $destinatario = "andalaosafilms@gmail.com";
    $asunto = "Nuevo mensaje del formulario de contacto";
    $cuerpo = "Nombre: $nombre\nCorreo electrónico: $correo\nMensaje: $mensaje";

    // Enviar el correo electrónico
    if (mail($destinatario, $asunto, $cuerpo)) {
        echo "Tu mensaje ha sido enviado con éxito.";
    } else {
        echo "Hubo un problema al enviar tu mensaje. Por favor intenta de nuevo.";
    }
} else {
    echo "Error: El formulario no fue enviado.";
}

?>