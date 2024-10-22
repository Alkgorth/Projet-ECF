<?php

namespace App\Entity;

use DateTime;

class About extends MainEntity
{
    protected ?int $id_about = null;
    protected string $developpeur = '';
    protected string $editeur = '';
    protected DateTime $date_de_sortie;

    

    /**
     * Get the value of id_about
     */
    public function getIdAbout(): ?int
    {
        return $this->id_about;
    }

    /**
     * Set the value of id_about
     */
    public function setIdAbout(?int $id_about): self
    {
        $this->id_about = $id_about;

        return $this;
    }

    /**
     * Get the value of developpeur
     */
    public function getDeveloppeur(): string
    {
        return $this->developpeur;
    }

    /**
     * Set the value of developpeur
     */
    public function setDeveloppeur(string $developpeur): self
    {
        $this->developpeur = $developpeur;

        return $this;
    }

    /**
     * Get the value of editeur
     */
    public function getEditeur(): string
    {
        return $this->editeur;
    }

    /**
     * Set the value of editeur
     */
    public function setEditeur(string $editeur): self
    {
        $this->editeur = $editeur;

        return $this;
    }

    /**
     * Get the value of date_de_sortie
     */
    public function getDateDeSortie(): DateTime
    {
        return $this->date_de_sortie;
    }

    /**
     * Set the value of date_de_sortie
     */
    public function setDateDeSortie(DateTime $date_de_sortie): self
    {
        $this->date_de_sortie = $date_de_sortie;

        return $this;
    }
}