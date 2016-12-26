<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Datos del Formulario Contactanos</title>
</head>

<body>
   <?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	      if($_POST['email'] != "" && $_POST['asunto'] != "" && $_POST['mensaje'] != "")
	      {
              // poner el de acosta y presidenta
            $to = "emmanuel.castro@upr.edu";
            $message = $_POST['mensaje'];
            $from = $_POST['email'];
            $asunto = $_POST['asunto'];
            $subject = "Aullido Verde Webpage: $asunto";
            $headers = "From: $from";
            $user_message = "Saludos, \n\nSu mensaje a sido enviado. Pronto nos estaremos comunicando con usted para ayudarle.";
            $user_subject = "Mensaje automático";
            $user_header = "De: Aullido Verde";

            header("Refresh: 0; url=index.html");
            if(mail($to, $subject, $message, $headers) && mail($from, $user_subject, $user_message, $user_header)) {
                echo '<script language= "javascript">';
                echo 'alert("El mensaje ha sido enviado");';
                echo '</script>';
            } else { 
                echo '<script language= "javascript">';
                echo '$("#myModal").modal("show");';
                echo '</script>';
				// 'alert("El mensaje ha sido enviado");';
				// '$("#ok-modal").modal("show");';
            }
      		/*
      		if(mail($to, $subject, $message, $headers) && mail($from, $user_subject, $user_message, $user_header)){
                 $ok_modal_flag = true;  //presentar modal éxito
            }

      		else{
                $error_modal_flag = true; //presentar modal error
            }
            */
	   }
    }
    ?>

</body>

</html>