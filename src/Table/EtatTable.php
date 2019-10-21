<?php
namespace App\Table;

use App\Model\Etat;
use \PDO;

class EtatTable{

    private $pdo;
    protected $table = "etat";
    private $class = Etat::class;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function allEtat(): array 
        {
            $sql ="SELECT * FROM {$this->table}";
            return $this->pdo->query($sql, PDO::FETCH_CLASS, $this->class)->fetchAll();
        }

    public function listEtat(): array
    {
        $etats = $this->allEtat();
        $results = [];
        foreach($etats as $etat){
            $results[$etat->getEtat()] = $etat->getEtat();
        }
        return $results;
    }
}


    