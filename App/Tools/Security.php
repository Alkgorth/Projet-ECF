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

    public static function Loggin(string $password, string $user): bool
    {
        $user = new User();

        if (self::verifyPassword($password, $user->getPassword())) {
            $_SESSION['user'] = [
                'id' => $user->getIdUser()
            ];
            return true;
        }
     return false;
    }
}
