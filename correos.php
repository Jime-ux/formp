<?php 
    $destinatario = 'jime.nieto@gmail.com';

    //esto es al correo al que se enviara el mensaje

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde la pagina Jimena Nieto";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;


    mail($destinatario, $nombre, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";

?>