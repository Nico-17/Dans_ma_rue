<?php
namespace App\Model;

use \DateTime;

class Defaut{

    private $id;

    private $nature;

    private $lieu;

    private $service;

    private $photo;

    private $date_observation;

    private $etats = [];

    private $date_fin;
    

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNature(): ?string
    {
        return $this->nature;
    }

    public function setNature(string $nature): self
    {
        $this->nature = $nature;
        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;
        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(string $service): self
    {
        $this->service = $service;
        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto( $photo): self
    {
        $this->photo = $photo;
        return $this;
    }

    public function getDateObserv(): DateTime
    {
        return new DateTime($this->date_observation);
    }

    public function setDateObserv(string $date_observation): self
    {
        $this->date_observation = $date_observation;
        return $this;
    }

    public function getDateFin(): DateTime
    {
        return new DateTime($this->date_fin);
    }
    
    public function setDateFin(string $date_fin): self
    {
        $this->date_fin = $date_fin;
        return $this;
    }
}

?>