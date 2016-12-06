<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Datos del Formulario Contactanos</title>
</head>

<body>
    <?php
       	$to = "emmanuel.castro@upr.edu, <elliot.lopez1@upr.edu>";
		$message = $_POST['mensaje'];
		$from = $_POST['email'];
		$asunto = $_POST['asunto'];
		$subject = " Aullido Verde Webpage-- $asunto";
		$headers = "From: $from";
		
		if(mail($to,$subject,$message,$headers))
			echo "<p>Su mensaje ha sido recibido, nos comunicaremos con usted proximamento...</p>";
		else
			echo"<p>El envio de su mensaje fallo , trate mas tarde...</p>";
			
?>
        <?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	      if($_POST['email'] != "" && $_POST['asunto'] != "" && $_POST['mensaje'] != "")
	      {
          $email = $_POST['email'];
          $mensaje = "Asunto: " . $_POST['asunto'] . "\n\nMensaje: ". $_POST['message'];
          $mensaje_usuario = "Saludos, " . "\n\nSu mensaje a sido enviado. Pronto nos estaremos comunicando con usted para ayudarle.";
      		
      		if(mail("emmanuel.castro@upr.edu, elliot.lopez1@upr.edu", $_POST['asunto'] , "$mensaje", "From: $email") && mail($email, "Mensaje automático", $mensaje_usuario, "De: Aullido Verde")){
                // echo '';  //presentar modal éxito
            }

      		else{
                // echo ''; //presentar modal error
            }
	   }
    }
  ?>
</body>

</html>