<?php
$nombre = $_POST["Nombre"];
$correo = $_POST ["mail"];
$comentarios = $_POST ["comentarios"];
$para = "valentinavaccarezzato@gmail.com";
$asunto = "Contacto Web";
$cuerpo = "<h1>Hola, recibiste un contacto</h1>Nombre:".$nombre."<br>Correo electrónico:".$mail."<br>Comentarios:".$comentarios."<br>Chaito";
$cabecera = "From:" . $para. "\r\n";
$cabecera.= "MIME-Version: 1.0\r\n";
$cabecera.= "Content-Type: text/html; charset=UTF-8\r\n";

if ( !mail($para, $asunto, $cuerpo, $cabecera)) {
    echo "E-Mail no enviado";
     
} else {
    echo "E-Mail  enviado";
    
}

mail($para, $asunto, utf8_decode($message), $header);



?>