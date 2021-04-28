<?php
    
    $nombre = 'name';
    $email = 'desarrollovec@itesm.mx';
    $asunto = 'tu asunto';
    $mensaje = 'ho';
    $adjunto = '';
        
        require "phpmailer/class.phpmailer.php";
    
            $mail = new PHPMailer;
      
      //indico a la clase que use SMTP
          $mail->IsSMTP();
          //permite modo debug para ver mensajes de las cosas que van ocurriendo
         $mail->SMTPDebug = 1;

      //Debo de hacer autenticacion SMTP
          $mail->SMTPAuth = true;
         // $mail->SMTPSecure = "tls";

      //indico el servidor de Gmail para SMTP
          $mail->Host = "contactoposgradosyeducacionc.com.mx";

      //indico el puerto que usa Gmail
       //   $mail->Port = 80;

      //indico un usuario / clave de un usuario de gmail
          $mail->Username = "info-educacionc@contactoposgradosyeducacionc.com.mx";
          $mail->Password = "a18273645!";
       
          $mail->From = "info-educacionc@contactoposgradosyeducacionc.com.mx";
        
          $mail->FromName = "Administrador";
        
          $mail->Subject = $asunto;
        
          $mail->addAddress($email, $nombre);
        
          $mail->MsgHTML($mensaje);
        
/*    
       if ($adjunto ["size"] > 0)
      {
           
          $mail->addAttachment($adjunto ["tmp_name"], $adjunto ["name"]);
   }
  */  
        
          if($mail->Send())
        {
    $msg= "En hora buena el mensaje ha sido enviado con exito a $email";
    }
        else
        {
    $msg = "Lo siento, ha habido un error al enviar el mensaje a $email";
    }