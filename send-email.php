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
</body>

</html>