<?php

namespace App\Entity;

class Plateforme extends MainEntity
{
    protected ?int $id_plateforme = null;
    protected string $name = '';

    /**
     * Get the value of id_plateforme
     */
    public function getIdPlateforme(): ?int
    {
        return $this->id_plateforme;
    }

    /**
     * Set the value of id_plateforme
     */
    public function setIdPlateforme(?int $id_plateforme): self
    {
        $this->id_plateforme = $id_plateforme;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
