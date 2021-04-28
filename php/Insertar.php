<?php




 $data = array();   

$hoy = date('h-i-s, j-m-y');
$rd= rand(1,999);
$folio = $hoy . "-INT-". $rd;

$Boletin = "0";
$idt = $_POST['Programa'];

 $Nombre=$_POST['nombre'];
      $ApellidoPaterno=$_POST['apellidoP'];   
      $ApellidoMaterno= " ";
      $Correo=$_POST['Correo'];
      $CodigoPais="52";
      $CodigoArea="52"; 
      $Telefono=$_POST['tel'];   
      $Empresa=$_POST['Empresa'];
      $Info=$_POST['info'];
      $Campus=$_POST['Campus']; 
      $areas=$_POST['Area'];  
      $programas=$_POST['Programa'];
      $Tipo=$_POST['Tipo'];
      $Campana = $_POST['campana'];
      $Comentario= $_POST['message'];
      $Aviso = $_POST['privacidad'];
    $Pais  = $_POST['Pais'];
    $Empresa = $_POST['Empresa'];
    $Puesto = $_POST['Puesto'];
$email = $_POST['correoEnviar'];



  


$nombreAdmin = 'administrador';


      

      
        
                
                
    $asunto = 'Solicitud de informacion';
    $mensaje = '<table><tbody><tr><td>Nombre:</td><td>'.$Nombre.'  </td></tr><tr><td>email:</td><td>'.$Correo.'</td></tr><tr><td>telefono</td><td>'.$Telefono.'</td></tr><tr><td>Comentarios</td><td>'. $Comentario.'</td></tr></tbody></table>';

        require "../lib/phpmailer/class.phpmailer.php";
    
            $mail = new PHPMailer;
      
      //indico a la clase que use SMTP
          $mail->IsSMTP();
          $mail->CharSet = 'UTF-8';
          //permite modo debug para ver mensajes de las cosas que van ocurriendo
      //  $mail->SMTPDebug = 1;

      //Debo de hacer autenticacion SMTP
          $mail->SMTPAuth = true;
         $mail->SMTPSecure = "tls";

      //indico el servidor de Gmail para SMTP
          $mail->Host = 'prointra.mx';

          //$mail->Host = "contactoposgradosyeducacionc.com.mx";

      //indico el puerto que usa Gmail
         //$mail->Port = 587;

      //indico un usuario / clave de un usuario de gmail
          $mail->Username = "primera@prointra.mx";
          $mail->Password = "Primera_3007";
       
          $mail->From = "primera@prointra.mx";
        
          $mail->FromName = "Administrador";
        
          $mail->Subject = $asunto;
        
          $mail->addAddress($email, $nombreAdmin);
        
          $mail->MsgHTML($mensaje);

          if($mail->Send())
        {
   $data['success'] = true;
    }
        else
        {
  $data['success6'] = false;
    }
                
 echo json_encode($data);





















