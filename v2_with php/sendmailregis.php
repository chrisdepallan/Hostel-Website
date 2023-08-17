
<!doctype html>
<head>
<style>
    body{
        background-color: black;
    }
    </style>

</head>
<body>

<?php
session_start();
//Import PHPMailer classes into the global namespace
$email=$_SESSION['email'];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'modderhubmail@gmail.com';                     //SMTP username
    $mail->Password   = 'vpmvcpfmtavtlaia';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('modderhubmail@gmail.com', 'modderhub admin');
    $mail->addAddress($email);     //Add a recipient
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $otp=rand(1000,9999);
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'verify account';
    $mail->Body    = '<b>'.$otp.'</b><br> Use this one time password. Never share an otp with others and we never call you to get the otp. ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    $_SESSION['otp']=$otp;
    echo "<script type='text/javascript'> window.location.href = 'otp_verify_page.php'</script>";

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

</body>
</html>