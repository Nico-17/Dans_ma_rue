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

    public function delete(int $id): void
    {
        $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = ?");
        $ok = $query->execute([$id]);
        if($ok === false){
            throw new \Exception("Erreur lors de la suppression du défaut  n°$id");
        }
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