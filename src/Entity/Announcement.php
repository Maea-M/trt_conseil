<?php

namespace App\Entity;

class Annoucement 
{
    private int $id;
    private string $entitled;
    private string $description;
    private string $workplace;

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

    public function getWorkplace()
    {
        return $this->workplace;
    }


    public function setWorkplace(string $workplace): self
    {
        $this->workplace = $workplace;

        return $this;
    }
}