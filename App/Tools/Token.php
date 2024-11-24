<?php

namespace App\Tools;

use App\Entity\Token as TableToken;
use DateTime;

class Token {
    public function generateToken(): string
    {
        $token = bin2hex(random_bytes(32));
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        return $hashedToken;
    }

    public function isTokenValid(mixed $token)
    {
        if (!is_object($token) || !method_exists($token, 'getExpirationDate')) {
            throw new \InvalidArgumentException("Le token fourni est invalide.");
        }

        $now = new DateTime();
        return $token->getExpirationDate() > $now;
    }
}

?>