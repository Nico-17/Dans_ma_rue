<?php
namespace App\Table;

use App\Model\Acces;
use \PDO;

class AccesTable{

    private $pdo;
    protected $table = "acces";
    private $class = Acces::class;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function allAcces(): array 
        {
            $sql ="SELECT * FROM {$this->table}";
            return $this->pdo->query($sql, PDO::FETCH_CLASS, $this->class)->fetchAll();
        }

    public function listAcces(): array
    {
        $access = $this->allAcces();
        $results = [];
        foreach($access as $acces){
            $results[$acces->getAcces()] = $acces->getAcces();
        }
        return $results;
    }
}


    