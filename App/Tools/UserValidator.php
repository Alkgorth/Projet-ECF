<?php

namespace App\Tools;

use App\Entity\User;
use App\Repository\UserRepository;

class UserValidator extends User
{
    public static function validate(User $user): array
    {
        $error = [];

        if(empty($user->getLastName())){
            $error[] = "Veuillez renseigner votre nom";
        }
        if(empty($user->getFirstName())){
            $error[] = "Veuillez renseigner votre prénom";
        }
        if(empty($user->getMail())){
            $error[] = "Veuillez renseigner votre email";
        } else if (!filter_var($user->getMail(), FILTER_VALIDATE_EMAIL)) {
            $error[] = "Veuillez renseigner un email valide";
        }
        if(empty($user->getAdresse())){
            $error[] = "Veuillez renseigner votre adresse";
        }
        if(empty($user->getZipCode())){
            $error[] = "Veuillez renseigner votre code postal";
        }
        if(empty($user->getCity())){
            $error[] = "Veuillez renseigner votre ville";
        }
        if(empty($user->getPassword())){
            $error[] = "Veuillez renseigner un mot de passe";
        }
        if ($_POST['password'] !== $_POST['passwordConfirm']) {
            $error[] = "Les mots de passe ne correspondent pas.";
        }
        return $error;
    }

    public static function validatePasswords($password, $passwordConfirm) {
        $error = [];
        if ($password !== $passwordConfirm) {
            $error[] = "Les mots de passe ne correspondent pas.";
        }
        return $error;
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
