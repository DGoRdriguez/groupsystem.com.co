<?php
$nombre = $_POST['nombre'];
$email = $_POST['mail'];
$mensaje = $_POST['mensaje'];
$para = 'serviciosgroupsystem@gmail';
$titulo = 'Contactanos Web Site Group System';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, Muchas Gracias.. Pronto te contactamos.');
window.location.href = 'http://www.serviciosgroupsystem.com';
</script>";
} else {
echo 'Falló el envio';
}
}
?>
