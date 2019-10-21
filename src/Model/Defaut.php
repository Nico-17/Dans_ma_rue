<?php
namespace App\Model;

use \DateTime;

class Defaut{

    private $id;

    private $nature;

    private $lieu;

    private $services;

    private $photo;

    private $date_observation;

    private $etat;

    private $date_fin;

    private $X;

    private $Y;

    private $marqueur;

    public function getX(): ?float
    {
        return $this->X;
    }

    public function setX(float $X): self
    {
        $this->X = $X;
        return $this;
    }

    public function getY(): ?float
    {
        return $this->Y;
    }

    public function setY(float $Y): self
    {
        $this->Y = $Y;
        return $this;
    }

    public function getMarqueur(): ?int
    {
        return $this->marqueur;
    }

    public function setMarqueur(int $marqueur): self
    {
        $this->marqueur = $marqueur;
        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;
        return $this;
    }

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

    public function setId(int $id): self 
    {
        $this->id = $id;
        return $this;
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

    public function getServices(): ?string
    {
        return $this->services;
    }

    public function setServices(string $services): self
    {
        $this->services = $services;
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

    public function getDateObservation(): DateTime
    {
        return new DateTime($this->date_observation);
    }

    public function setDateObservation(string $date_observation): self
    {
        $this->date_observation = $date_observation;
        return $this;
    }

    public function getDateFin()
    {
        return $this->date_fin;
    }
    
    public function setDateFin(string $date_fin): self
    {
        $this->date_fin = $date_fin;
        return $this;
    }

}

?>