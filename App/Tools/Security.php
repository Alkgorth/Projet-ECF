<?php

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


class Security
{
    public static function hashPassword(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public static function verifyPassword(string $password, string $hash): bool
    {
        return password_verify($password, $hash);
    }

    public static function isLogged(): bool
    {
        return isset($_SESSION['user']);
    }


}
