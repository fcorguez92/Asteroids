<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $comentario = $_POST["comentario"];

    // Envía un correo electrónico con los datos del formulario
    $destinatario = "fcorguezsevilla@gmail.com";
    $asunto = "Comentario sobre Meteor Crusher";
    $mensaje = "Nombre: " . $nombre . "\nCorreo electrónico: " .
        $correo . "\nComentario: " . $comentario;
    $cabeceras = "From: correo_electronico_que_quieras@example.com" . "\r\n" .
        "Reply-To: " . $correo . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
    mail($destinatario, $asunto, $mensaje, $cabeceras);
} else {
    echo "Hola mundo";
    
}

?>