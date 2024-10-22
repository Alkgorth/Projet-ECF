<?php

namespace App\Entity;

class UserOrder extends MainEntity
{
    protected ?int $id_order = null;
    protected string $order_date = '';
    protected string $order_status = '';
    protected int $id_store;
    protected int $id_user;

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
     * Get the value of order_date
     */
    public function getOrderDate(): string
    {
        return $this->order_date;
    }

    /**
     * Set the value of order_date
     */
    public function setOrderDate(string $order_date): self
    {
        $this->order_date = $order_date;

        return $this;
    }

    /**
     * Get the value of order_status
     */
    public function getOrderStatus(): string
    {
        return $this->order_status;
    }

    /**
     * Set the value of order_status
     */
    public function setOrderStatus(string $order_status): self
    {
        $this->order_status = $order_status;

        return $this;
    }

    /**
     * Get the value of id_store
     */
    public function getIdStore(): int
    {
        return $this->id_store;
    }

    /**
     * Set the value of id_store
     */
    public function setIdStore(int $id_store): self
    {
        $this->id_store = $id_store;

        return $this;
    }

    /**
     * Get the value of id_user
     */
    public function getIdUser(): int
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     */
    public function setIdUser(int $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }
}
