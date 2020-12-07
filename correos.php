
<?php
/*en esta pagina se ultiza lo que es el envio de email al correo de la pagina , inmediatamete seleccione enviar , mostrar un mesaj en pantalla diciendo que el  mensaje que ha enviado el cliente se envio exitosamente*/
    $destinatario='moonperfumesshop@gmail.com';

    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $mensaje=$_POST['mensaje'];

$header="ENVIADO DESDE LA PAGINA MOON PERFUMES SHOP";
$mensajeCompleto=$mensaje. "\nAtentamente: " . $nombre;

mail($destinatario, $mensaje,$mensajeCompleto,$header);
echo "<script>alert('CORREO ENVIADO EXITOSAMENTE')</script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>