<?php

namespace App\Entity;

class Contenu extends MainEntity
{
    protected ?int $id_order = null;
    protected int $id_jeu;
    protected int $quantity;
    protected float $price_total;

    /**
     * Get the value of id_order
     */
    public function getIdOrder(): ?int
    {
        return $this->id_order;
    }

    /**
     * Set the value of id_order
     */
    public function setIdOrder(?int $id_order): self
    {
        $this->id_order = $id_order;

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
     * Get the value of quantity
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     */
    public function setQuantity(string $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }



    /**
     * Get the value of price_total
     */
    public function getPriceTotal(): float
    {
        return $this->price_total;
    }

    /**
     * Set the value of price_total
     */
    public function setPriceTotal(float $price_total): self
    {
        $this->price_total = $price_total;

        return $this;
    }
}
