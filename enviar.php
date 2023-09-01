<?php

$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$Subject = $_POST['Asunto'];
$Mensaje = $_POST['Mensaje'];

if ($Nombre=='' || $Email=='' || $Mensaje==''){ // Si falta un dato en el formulario mandara una alerta al usuario.

echo "<script>alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";

}else{

    $to = "rpotosi2021@gmail.com";
    $subject = "Nuevo mensaje de formulario de contacto";
    $headers = "From: $Email\r\n";
    $headers .= "Reply-To: $Email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    $message = "Nombre: $Nombre\n";
    $message .= "Email: $Email\n";
    $message .= "Asunto: $Subject\n";
    $message .= "Mensaje:\n\n$Mensaje\n";

    if (mail($to, $subject, $message, $headers)) {
        echo  "<script>alert('Formulario enviado exitosamente, le responderemos lo más pronto posible.');location.href ='javascript:history.back()';</script>";
    } else {
        echo "<script>alert('Ha ocurrido un error al enviar el formulario. Por favor, inténtelo de nuevo más tarde.');location.href ='javascript:history.back()';</script>";
    }
}

?>
