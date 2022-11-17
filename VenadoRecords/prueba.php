<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'daviladelbosque131201@gmail.com';                     //SMTP username
    $mail->Password   = 'pjzblipkdmshbihi';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('daviladelbosque131201@gmail.com', 'Sebastián');
    $mail->addAddress ($_POST['correo']);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Importante!!!';
    $mail->Body    = 'Tu nueva contraseña es: ';


    $mail->send();
    echo 'Correo enviado correctamente';
} catch (Exception $e) {
    echo "Ocurrió un error al envirar el correo: {$mail->ErrorInfo}";
}


?>

