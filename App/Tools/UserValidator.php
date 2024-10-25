<?php

namespace App\Tools;

use App\Entity\User;
use App\Repository\UserRepository;

class UserValidator extends User
{
    public static function validate(User $user): array
    {
        $errors = [];

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

    public static function getCurrentUserMail(): int|bool
    {
        if((isset($_SESSION['user']) && isset($_SESSION['user']['mail']))) {
            return $_SESSION['user']['mail'];
        } else {
            return false;
        }
    }

    public static function getCurrentUserId(): int|bool
    {
        if((isset($_SESSION['user']) && isset($_SESSION['user']['id']))) {
            return $_SESSION['user']['id'];
        } else {
            return false;
        }
    }
}
