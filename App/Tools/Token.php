<?php

namespace App\Tools;

use App\Entity\Token as TableToken;

class Token {
    public function generateToken(): string
    {
        $token = bin2hex(random_bytes(32));
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        return $hashedToken;
    }
}

?>