<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class SupportController extends Controller
{
    public function sendEmail () {

        require '../../../../vendor/autoload.php'; // load Composer's autoloader

        $mail = new PHPMailer(true); // Passing `true` enables exceptions

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.titan.email';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'support@u-communityb.com';                     // SMTP username
            $mail->Password   = "Medical@123";                               // SMTP password
            $mail->SMTPSecure = 'SSL';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('support@u-communityb.com', 'Support');
            $mail->addAddress('okhawesamuel@gmail.com', 'Samuel');     // Add a recipient
            $mail->addReplyTo('support@u-communityb.com', 'Okhawe Samuel');

            // Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            print_r("Message could not be sent. Mailer Error: {$mail->ErrorInfo}") ;
        }
    }
}
