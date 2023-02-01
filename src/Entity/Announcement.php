<?php

namespace App\Entity;

class Annoucement 
{
    private int $id;
    private string $entitled;
    private string $description;

    public function getId()
    {
        return $this->id;
    }
    public function setId(int $id): self
    {
        $this->id;
        return $this;
    }

    public function getEntitled()
    {
        return $this->entitled;
    }

    public function setEntitled(string $entitled): self
    {
        $this->entitled = $entitled;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}