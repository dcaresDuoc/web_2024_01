<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $pais = $_POST['pais'];
    
    $mensaje = "Estimado(a) {$nombre} {$apellido}, se ha enviado un correo a: {$correo} y un mensaje de WhatsApp al número {$telefono}. Desde ya muchas gracias por confiar en nosotros. Se despide el equipo de Reverdecer.";

    header("Location: confirmacion.html?mensaje=" . urlencode($mensaje));
    exit();
}
?>
