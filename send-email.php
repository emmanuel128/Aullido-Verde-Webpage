<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Datos del Formulario Contactanos</title>
</head>

<body>
   <?php
<<<<<<< HEAD
	
	$contacts = array(
//		"angel.acosta2@upr.edu",
		"elliot.lopez1@upr.edu"
//		"ingrid.arroyo@upr.edu",
		//....add todos los e-mails que quieran
		);
	foreach($contacts as $contact)
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  if($_POST['email'] != "" && $_POST['asunto'] != "" && $_POST['mensaje'] != "")
			  {
				// poner el de acosta y presidenta
				$to = $contact;
				$message = $_POST['mensaje'];
				$from = $_POST['email'];
				$asunto = $_POST['asunto'];
				$subject = "Aullido Verde Webpage: $asunto";
				$headers = "From: $from";
				$user_message = "Saludos, \n\nSu mensaje a sido enviado. Pronto nos estaremos comunicando con usted para ayudarle.";
				$user_subject = "Mensaje automático";
				$user_header = "De: Aullido Verde";
=======
		//....add todos los e-mails que quieran		
		// var emails = "angel.acosta2@upr.edu, , ingrid.arroyo@upr.edu";
		$emails = "emmanuel.castro@upr.edu, elliot.lopez1@upr.edu";
>>>>>>> origin/master

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if($_POST['email'] != "" && $_POST['asunto'] != "" && $_POST['mensaje'] != "")
			{
			// poner el de acosta y presidenta
			$to = $emails;
			$message = $_POST['mensaje'];
			$from = $_POST['email'];
			$asunto = $_POST['asunto'];
			$subject = "Aullido Verde Webpage: $asunto";
			$headers = "From: $from";
			$user_message = "Saludos, \n\nSu mensaje a sido enviado. Pronto nos estaremos comunicando con usted para ayudarle.";
			$user_subject = "Mensaje automático";
			$user_header = "De: Aullido Verde";

			// header("Refresh: 0; url=index.html");
			if(mail($to, $subject, $message, $headers) && mail($from, $user_subject, $user_message, $user_header)) {
				echo '<script language= "javascript">';
				echo 'alert("El mensaje ha sido enviado");';
				echo '</script>';
			} else { 
				echo '<script language= "javascript">';
				echo 'alert("El mensaje no pudo ser enviado, trate de nuevo.");';
				echo '</script>';
				// 'alert("El mensaje ha sido enviado");';
				// '$("#ok-modal").modal("show");';
			}
		}
	}
    ?>

</body>

</html>