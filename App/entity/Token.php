<?php

namespace App\Entity;

use DateTime;

class Token extends MainEntity
{
    protected ?int $id_token = null;
    protected DateTime $date_time;
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
     * Get the value of date_time
     */
    public function getDateTime(): DateTime
    {
        return $this->date_time;
    }

    /**
     * Set the value of date_time
     */
    public function setDateTime(DateTime $date_time): self
    {
        $this->date_time = $date_time;

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