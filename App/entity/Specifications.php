<?php

namespace App\Entity;

class Specifications extends MainEntity
{
    protected ?int $id_store = null;
    protected ?int $id_jeu = null;
    protected ?int $id_plateforme = null;
    protected ?float $price = null;
    protected ?int $quantity = null;
    protected ?bool $discounted = null;
    protected ?float $promo = null;


   

    /**
     * Get the value of id_store
     */
    public function getIdStore(): ?int
    {
        return $this->id_store;
    }

    /**
     * Set the value of id_store
     */
    public function setIdStore(?int $id_store): self
    {
        $this->id_store = $id_store;

        return $this;
    }

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
     * Get the value of price
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of quantity
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     */
    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of discounted
     */
    public function isDiscounted(): ?bool
    {
        return $this->discounted;
    }

    /**
     * Set the value of discounted
     */
    public function setDiscounted(?bool $discounted): self
    {
        $this->discounted = $discounted;

        return $this;
    }

    /**
     * Get the value of promo
     */
    public function getPromo(): ?float
    {
        return $this->promo;
    }

    /**
     * Set the value of promo
     */
    public function setPromo(?float $promo): self
    {
        $this->promo = $promo;

        return $this;
    }
}
