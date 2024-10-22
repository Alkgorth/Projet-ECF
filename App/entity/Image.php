<?php

namespace App\Entity;

class Image extends MainEntity
{
    protected ?int $id_image = null;
    protected string $name = '';
    protected int $id_jeu;

    /**
     * Get the value of id_image
     */
    public function getIdImage(): ?int
    {
        return $this->id_image;
    }

    /**
     * Set the value of id_image
     */
    public function setIdImage(?int $id_image): self
    {
        $this->id_image = $id_image;

        return $this;
    }

    /**
     * Get the value of id_jeu
     */
    public function getIdJeu(): int
    {
        return $this->id_jeu;
    }

    /**
     * Set the value of id_jeu
     */
    public function setIdJeu(int $id_jeu): self
    {
        $this->id_jeu = $id_jeu;

        return $this;
    }
}
