<?php
namespace App\Table;

use App\PaginatedQuery;
use App\Model\Service;
use \PDO;

class ServiceTable{

    private $pdo;
    protected $table = "services";

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(Service $services): void 
    {
        $query = $this->pdo->prepare("INSERT INTO {$this->table} SET services = :services, contact = :contact, tel = :tel, courriel = :courriel");
        $ok = $query->execute([
            'services' => $services->getServices(),
            'contact' => $services->getContact(),
            'tel' => $services->getTel(),
            'courriel' => $services->getCourriel()
            
        ]);
        if($ok === false){
            throw new \Exception("Erreur lors de la création du service");
        }
    }

    public function update(Service $service): void 
    {
        $query = $this->pdo->prepare("UPDATE {$this->table} SET services = :services, contact = :contact, tel = :tel, courriel = :courriel WHERE services = :services");
        $ok = $query->execute([
            'services' => $service->getServices(),
            'contact' => $service->getContact(),
            'tel' => $service->getTel(),
            'courriel' => $service->getCourriel()
            
        ]);
        if($ok === false){
            throw new \Exception("Erreur lors de la modification du service");
        }
    }

    public function delete($services): void
    {
        $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE services = ?");
        $ok = $query->execute([$services]);
        if($ok === false){
            throw new \Exception("Erreur lors de la suppression du service  $services");
        }
    }

    public function find (string $services): Service 
    {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE services = :services");
        $query->execute(['services' => $services]);
        $query->setFetchMode(PDO::FETCH_CLASS, Service::class);
        $result = $query->fetch();
        if($result === false){
            throw new \Exception("Erreur");
        }
        return $result; 
    }
 
    public function findPaginated()
    {
        $paginatedQuery = new PaginatedQuery (
            "SELECT * 
            FROM {$this->table} 
            ORDER BY services DESC",
            "SELECT COUNT(services) FROM {$this->table}",
            $this->pdo
        );
        $services = $paginatedQuery->getItems(Service::class);
        return [$services, $paginatedQuery];
    }

}