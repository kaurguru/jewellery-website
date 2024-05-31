<script>composer require emailer/phpmailer</script>
<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'ashnachauhan120@gmail.com'; // Your Gmail email address
    $mail->Password   = 'amak pthz qwqr ciwo';        // Your Gmail password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Sender and recipient settings
    $mail->setFrom('ashnachauhan120@gmail.com', 'ashna'); // Your name and email address
    $mail->addAddress('gk7108389@gmail.com', 'gurleen'); // Recipient email address

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'hello';
    $mail->Body    = 'This is a test email sent from PHPMailer using Gmail SMTP.';

    // Send the email
    $mail->send();
    echo 'Email has been sent successfully!';
} catch (Exception $e) {
    echo "Email could not be sent. Error: {$mail->ErrorInfo}";
}
?>
