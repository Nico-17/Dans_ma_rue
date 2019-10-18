<?php
namespace App\Table;

use App\PaginatedQuery;
use App\Model\Defaut;
use \PDO;

class DefautTable{

    private $pdo;
    protected $table = "defaut";

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(Defaut $defaut): void 
    {
        $query = $this->pdo->prepare("INSERT INTO {$this->table} SET lieu = :lieu, nature = :nature, service = :service, date_fin = :date_fin");
        $ok = $query->execute([
            'lieu' => $defaut->getLieu(),
            'service' => $defaut->getService(),
            'nature' => $defaut->getNature(),
            'date_fin' => $defaut->getDateFin()
            
        ]);
        if($ok === false){
            throw new \Exception("Erreur lors de la création du défaut  ");
        }
        $defaut->setId($this->pdo->lastInsertId());
    }

    public function update(Defaut $defaut): void 
    {
        $query = $this->pdo->prepare("UPDATE {$this->table} SET lieu = :lieu, nature = :nature, service = :service, date_fin = :date_fin WHERE id = :id");
        $ok = $query->execute([
            'id' => $defaut->getId(),
            'lieu' => $defaut->getLieu(),
            'service' => $defaut->getService(),
            'nature' => $defaut->getNature(),
            'date_fin' => $defaut->getDateFin()
            
        ]);
        if($ok === false){
            throw new \Exception("Erreur lors de la modification du défaut  n°$id");
        }
    }

    public function delete(int $id): void
    {
        $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = ?");
        $ok = $query->execute([$id]);
        if($ok === false){
            throw new \Exception("Erreur lors de la suppression du défaut  n°$id");
        }
    }

    public function find (int $id): Defaut 
    {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
        $query->setFetchMode(PDO::FETCH_CLASS, Defaut::class);
        $result = $query->fetch();
        if($result === false){
            throw new \exception("Erreur");
        }
        return $result;
    }

    public function findPaginated()
    {
        $paginatedQuery = new PaginatedQuery (
            "SELECT * 
            FROM {$this->table} 
            ORDER BY date_observation DESC",
            "SELECT COUNT(id) FROM {$this->table}",
            $this->pdo
        );
        $defauts = $paginatedQuery->getItems(Defaut::class);
        return [$defauts, $paginatedQuery];
    }

}