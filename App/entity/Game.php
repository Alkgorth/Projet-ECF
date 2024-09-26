<?php

namespace App\Entity;

class Game
{
    protected ?int $id_jeu = null;
    protected string $name = '';
    protected string $description = '';
    protected string $id_pegi = '';



    /**
     * Get the value of id_jeu
     */
    public function getIdJeu(): ?int
    {
        return $this->id_jeu;
    }

    /**
     * Set the value of id_jeu
     */
    public function setIdJeu(?int $id_jeu): self
    {
        $this->id_jeu = $id_jeu;

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

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of id_pegi
     */
    public function getIdPegi(): string
    {
        return $this->id_pegi;
    }

    /**
     * Set the value of id_pegi
     */
    public function setIdPegi(string $id_pegi): self
    {
        $this->id_pegi = $id_pegi;

        return $this;
    }
}
