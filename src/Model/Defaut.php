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
    

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNature(): ?string
    {
        return $this->nature;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function getDateObserv(): DateTime
    {
        return new DateTime($this->date_observation);
    }
}

?>