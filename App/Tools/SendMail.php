<?php
// déplacer ici les fonctions en rapport avec les envois de mails

namespace App\Tools;

use App\Repository\UserRepository;
use App\Entity\User;
use App\Controller\ConnexionsController;
use App\Tools\configSecu;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require 'vendor\autoload.php';

class SendMail
{
    public static function mailCreateUser($last_name, $first_name, $email)
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
            $mail->Subject = 'Confirmation de la création de votre compte client';
            $mail->Body    = '<h2>Bonjour</h2>
                            <p>Bienvenue ' . $last_name . ' ' . $first_name . ' chez GameStore !</p>
                            <a href="http://localhost:3000/index.php?controller=connexions&action=connexion">Pour vous connecter cliquez ici</a>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; // pour les boites mail plus anciennes

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public static function mailForgottenPassword($last_name, $first_name, $email, $tokenValue)
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

            $resetPasswordUrl = 'http://localhost:3000/index.php?controller=connexions&action=reinitialiserMdp&token=' . urlencode($tokenValue);

            $mail->Body    = '<h2>Réinitialisation de mot de passe</h2>
                            <p>Bonjour' . $last_name . ' ' . $first_name . ' Vous avez fait une demande pour réinitialiser votre mot de passe.</p>
                            <p>Pour réinitialiser votre mot de passe, veuillez cliquer sur le lien suivant :</p>
                            <a href="' . $resetPasswordUrl . '">Réinitialiser votre mot de passe</a>
                            <p>Ce lien expirera dans 1 heure.</p>';

            $mail->AltBody = 'Bonjour, vous avez fait une demande pour réinitialiser votre mot de passe. 
                            Pour réinitialiser votre mot de passe, veuillez cliquer sur le lien suivant :
                            ' . $resetPasswordUrl . '
                            Ce lien expirera dans 1 heure.'; // pour les boites mail plus anciennes

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
