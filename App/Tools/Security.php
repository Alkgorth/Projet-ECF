<?php

namespace App\Tools;

use App\Repository\UserRepository;
use App\Entity\User;

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

    // public static function logIn(string $mail, string $password): bool
}
