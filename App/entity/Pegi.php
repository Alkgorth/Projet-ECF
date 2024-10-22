<?php

namespace App\Entity;

class Pegi extends MainEntity
{
    protected ?int $id_pegi = null;
    protected int $label;

    /**
     * Get the value of id_pegi
     */
    public function getIdPegi(): ?int
    {
        return $this->id_pegi;
    }

    /**
     * Set the value of id_pegi
     */
    public function setIdPegi(?int $id_pegi): self
    {
        $this->id_pegi = $id_pegi;

        return $this;
    }

    /**
     * Get the value of label
     */
    public function getLabel(): int
    {
        return $this->label;
    }

    /**
     * Set the value of label
     */
    public function setLabel(int $label): self
    {
        $this->label = $label;

        return $this;
    }
}
