<?php

namespace App\Entity;

use DateTime;

class Token extends MainEntity
{
    protected ?int $id_token = null;
    protected DateTime $creation_date;
    protected DateTime $expiration_date;
    protected string $token = '';
    protected int $fk_id_user;



    /**
     * Get the value of id_token
     */
    public function getIdToken(): ?int
    {
        return $this->id_token;
    }

    /**
     * Set the value of id_token
     */
    public function setIdToken(?int $id_token): self
    {
        $this->id_token = $id_token;

        return $this;
    }

    /**
     * Get the value of creation_date
     */
    public function getCreationDate(): DateTime
    {
        return $this->creation_date;
    }

    /**
     * Set the value of creation_date
     */
    public function setCreationDate(DateTime $creation_date): self
    {
        $this->creation_date = $creation_date;

        return $this;
    }

    /**
     * Get the value of expiration_date
     */
    public function getExpirationDate(): DateTime
    {
        return $this->expiration_date;
    }

    /**
     * Set the value of expiration_date
     */
    public function setExpirationDate(DateTime $expiration_date): self
    {
        $this->expiration_date = $expiration_date;

        return $this;
    }

    /**
     * Get the value of token
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * Set the value of token
     */
    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get the value of fk_id_user
     */
    public function getFkIdUser(): int
    {
        return $this->fk_id_user;
    }

    /**
     * Set the value of fk_id_user
     */
    public function setFkIdUser(int $fk_id_user): self
    {
        $this->fk_id_user = $fk_id_user;

        return $this;
    }
}

?>