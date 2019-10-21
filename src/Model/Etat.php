<?php
namespace App\Model;

class Etat{

    private $etat;

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;
        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }
}