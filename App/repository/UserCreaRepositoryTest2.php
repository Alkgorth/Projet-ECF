<?php

namespace App\Repository;

use App\Db\Mysql;
use App\Entity\Game;
use App\Entity\User;

class UserCreaRepository extends MainRepository
{
    public function createUser($last_name, $first_name, $adresse, $zip_code, $password, $passwordConfirm, $mail) {
        $errors = $this->validatePasswords($password, $passwordConfirm);

        if (empty($errors)) {
            $hashedPassword = $this->hashPassword($password);

            try {
                $this->insertUser($last_name, $first_name, $adresse, $zip_code, $hashedPassword, $mail);
                echo "<div class='alert alert-success text-center'>Compte créé avec succès.</div>";
            } catch (\Exception $e) {
                $this->handleException($e);
            }
        } else {
            foreach ($errors as $error) {
                echo "<div class='alert alert-danger text-center'>$error</div>";
            }
        }
    }

    private function validatePasswords($password, $passwordConfirm) {
        $errors = [];
        if ($password !== $passwordConfirm) {
            $errors[] = "Les mots de passe ne correspondent pas.";
        }
        return $errors;
    }

    private function hashPassword($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    private function insertUser($last_name, $first_name, $adresse, $zip_code, $hashedPassword, $mail) {
        $query = $this->pdo->prepare("INSERT INTO app_user (last_name, first_name, mail, adresse, zip_code, password, role) 
            VALUES (:name, :prenom, :adresse, :email, :code_postal, :password, '['\"USER\"']')");
        $query->bindParam(':name', $last_name, $this->pdo::PARAM_STR);
        $query->bindParam(':prenom', $first_name, $this->pdo::PARAM_STR);
        $query->bindParam(':adresse', $adresse, $this->pdo::PARAM_STR);
        $query->bindParam(':email', $mail, $this->pdo::PARAM_STR);
        $query->bindParam(':code_postal', $zip_code, $this->pdo::PARAM_STR);
        $query->bindParam(':password', $hashedPassword, $this->pdo::PARAM_STR);

        $query->execute([
            ':name' => $last_name,
            ':prenom' => $first_name,
            ':adresse' => $adresse,
            ':email' => $mail,
            ':code_postal' => $zip_code,
            ':password' => $hashedPassword
        ]);
    }

    private function handleException($e) {
        if ($e->getCode() == 23000) {
            echo "<div class='alert alert-danger text-center'>Erreur : L'utilisateur existe déjà.</div>";
        } else {
            echo "<div class='alert alert-danger text-center'>Erreur : " . $e->getMessage() . "</div>";
        }
    }
}