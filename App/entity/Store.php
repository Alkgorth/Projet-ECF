<?php

namespace App\Entity;

class Store extends MainEntity
{
    protected ?int $id_store = null;
    protected string $city = '';

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
     * Get the value of city
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set the value of city
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }
}
