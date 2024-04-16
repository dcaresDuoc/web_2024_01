<?php
    session_start();
    $mensaje = isset($_SESSION['mensaje']) ? $_SESSION['mensaje'] : "No hay mensaje.";
    unset($_SESSION['mensaje']); // Limpiar el mensaje de la sesión
?>