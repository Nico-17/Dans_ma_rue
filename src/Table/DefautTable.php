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
        $adress = $defaut->getLieu();
        $adress = urlencode($adress);
        $json = file_get_contents("https://api-adresse.data.gouv.fr/search/?q={$adress}");
        $obj = json_decode($json, true);
        $x = $obj["features"][0]["geometry"]["coordinates"][1];
        $y = $obj["features"][0]["geometry"]["coordinates"][0]; 
        $query = $this->pdo->prepare("INSERT INTO {$this->table} SET lieu = :lieu, nature = :nature, services = :services, date_fin = :date_fin, X = $x, Y = $y, etat = :etat, photo = :photo");
        $ok = $query->execute([
            'lieu' => $defaut->getLieu(),
            'etat' => $defaut->getEtat(),
            'services' => $defaut->getServices(),
            'nature' => $defaut->getNature(),
            'date_fin' => $defaut->getDateFin(),
            'photo' => $defaut->getPhoto()
            
        ]);
        if($ok === false){
            throw new \Exception("Erreur lors de la création du défaut  ");
        }
        $defaut->setId($this->pdo->lastInsertId());
    }

    public function update(Defaut $defaut): void 
    {
        $adress = $defaut->getLieu();
        $adress = urlencode($adress);
        $json = file_get_contents("https://api-adresse.data.gouv.fr/search/?q={$adress}");
        $obj = json_decode($json, true);
        $x = $obj["features"][0]["geometry"]["coordinates"][1];
        $y = $obj["features"][0]["geometry"]["coordinates"][0]; 
        $query = $this->pdo->prepare("UPDATE {$this->table} SET lieu = :lieu, nature = :nature, services = :services, date_fin = :date_fin, X = $x, Y = $y, etat = :etat, photo = :photo WHERE id = :id");
        $ok = $query->execute([
            'id' => $defaut->getId(),
            'lieu' => $defaut->getLieu(),
            'etat' => $defaut->getEtat(),
            'services' => $defaut->getServices(),
            'nature' => $defaut->getNature(),
            'date_fin' => $defaut->getDateFin(),
            'photo' => $defaut->getPhoto()
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