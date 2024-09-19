<?php

namespace App\Entity;

class Game
{
    protected ?int $id = null;
    protected string $title = '';
    protected string $description = '';
    protected string $image = '';
    protected int $type_id = 0;


    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

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
     * Get the value of image
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of type_id
     */
    public function getTypeId(): int
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     */
    public function setTypeId(int $type_id): self
    {
        $this->type_id = $type_id;

        return $this;
    }
}
