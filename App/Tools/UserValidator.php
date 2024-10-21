<?php

namespace App\Tools;

use App\Entity\User;
use App\Repository\UserRepository;

class UserValidator extends User
{
    public static function validate(): array
    {
        $errors = [];

        $user = new User();

        if(empty($user->getLastName())){
            $errors[] = "Veuillez renseigner votre nom";
        }
        if(empty($user->getFirstName())){
            $errors[] = "Veuillez renseigner votre prénom";
        }
        if(empty($user->getMail())){
            $errors[] = "Veuillez renseigner votre email";
        }
        if(empty($user->getAdresse())){
            $errors[] = "Veuillez renseigner votre adresse";
        }
        if(empty($user->getZipCode())){
            $errors[] = "Veuillez renseigner votre code postal";
        }
        if(empty($user->getCity())){
            $errors[] = "Veuillez renseigner votre ville";
        }
        if(empty($user->getPassword())){
            $errors[] = "Veuillez renseigner un mot de passe";
        }
        return $errors;
    }
}