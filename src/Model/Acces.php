<?php
namespace App\Model;

class Acces{

    private $acces;

    public function setAcces(string $acces): self
    {
        $this->acces = $acces;
        return $this;
    }

    public function getAcces(): ?string
    {
        return $this->acces;
    }
}