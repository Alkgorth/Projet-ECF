<?php
// déplacer ici les fonctions en rapport avec les envois de mails

namespace App\Tools;

use App\Repository\UserRepository;
use App\Entity\User;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Tools\configSecu;

//Load Composer's autoloader
require 'vendor\autoload.php';

class SendMail
{

    public static function mailForgottenPassword($last_name, $first_name, $email)
    {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'ap.percheron@gmail.com';                     //SMTP username
            $mail->Password   = ConfigSecu::$smtpPassword;                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('ap.percheron@gmail.com', 'Mailer');
            $mail->addAddress($email, $last_name . ' ' . $first_name);     //Add a recipient
            $mail->addReplyTo('ap.percheron@gmail.com', 'Information');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->CharSet = 'UTF-8';
            $mail->ContentType = 'text/html; charset=UTF-8';
            $mail->Subject = 'Demande de réinitiamisation de mot de passe';
            $mail->Body    = '<h2>Réinitialisation de mot de passe</h2>
                            <p>Bonjour' . $last_name . ' ' . $first_name . ' vous avez fait une demande pour un mot de passe oublié !</p>
                            <a href="http://localhost:3000/index.php?controller=connexions&action=reinitialiserMdp">Pour réinitialiser votre mot de passe, cliquez ici</a>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; // pour les boites mail plus anciennes

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}