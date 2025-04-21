<?php
$secretKey  = "6Le_BB0rAAAAAOaElFF2diloRMFeV60Uq5vyzbxD";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include 'email-template/admin-email-template-contact-us.php'; // $html
include 'email-template/client-email-template-contact-us.php'; // $html


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
if (isset($_POST['captcha-response-letsDiscuss']) && !empty($_POST['captcha-response-letsDiscuss'])) {

    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['captcha-response-letsDiscuss']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {

$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.futuristic.agency';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'noreply@mail.futuristic.agency';                     // SMTP username
    $mail->Password   = 'Test1239878';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;   

    //Recipients
    // $mail->setFrom('petersongeorge1235@gmail.com', 'Digital Gravity');
    $mail->setFrom('noreply@mail.futuristic.agency', 'OHANA Development');
	$mail->addReplyTo('fawadfareed@digitalgravity.ae');
    $mail->addAddress($_POST['email']);     // Add a recipient
  

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Thank You';
    $mail->Body    =  $client_html;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

   $mail = new PHPMailer(true);

try {

    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.futuristic.agency';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'noreply@mail.futuristic.agency';                     // SMTP username
    $mail->Password   = 'Test1239878';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;

    
    //Recipients
    $mail->setFrom('noreply@mail.futuristic.agency', 'OHANA Development');

    $mail->addAddress('fawadfareed@digitalgravity.ae');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contact Us Form';
    $mail->Body    =  $admin_html;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    

    $mail->send();
    echo 'Message has been sent';
    
}

catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
} else {

    echo "Captcha error, please try again.";
}
} else {

echo "Robot verification failed, please try again.";
}

?>