<?php
$nombre = $_POST['nombre'];$compania = $_POST['compania'];
$email = $_POST['email'];$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$para = 'comunicaciones@groupsystem.com.co';
$titulo = 'Nuevo Mensaje de Contactanos Web Site Group System';
$tituloCte = 'Contactanos Web Site Group System';$header = 'From: ' . $para;$headerCte = 'From: ' . $email;
$msjGS = "\nCompañia: $compania\nNombre Contacto: $nombre\nTeléfono: $telefono\nE-Mail: $email\nMensaje:\n$mensaje\n";$msjCte = "\nSrs.: $compania\nEstimado: $nombre\n\nHemos Recibido su solicitud, un asesor se comunicara lo mas pronto posible.\n\n\n\nCordialmente,\nGROUP SYSTEM S A S\nEmail. comunicaciones@groupsystem.com.co\nTel. 660 66 40\nCel. 313 898 78 58 – 301 785 84 00\n";
  
if (mail($para, $titulo, $msjGS, $header)) {
		if (mail($email, $tituloCte, $msjCte, $headerCte)) {					echo "<script language='javascript'>					alert('Mensaje enviado, Muchas Gracias.. Pronto te contactamos.');					window.location.href = 'http://groupsystem.com.co/Web/index.html';					</script>";			} else {					echo "<script language='javascript'>					alert('El Mensaje no pudo ser  enviado, por favor indiquenos su necesidad al e-mail comunicaciones@groupsystem.com');					window.location.href = 'http://groupsystem.com.co/Web/contacto.html';					</script>";			}
} else {
		echo "<script language='javascript'>		alert('El Mensaje no pudo ser  enviado, por favor indiquenos su necesidad al e-mail comunicaciones@groupsystem.com');		window.location.href = 'http://groupsystem.com.co/Web/contacto.html';		</script>";
}
?>
