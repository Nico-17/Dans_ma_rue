<?php
namespace App\Table;

use App\PaginatedQuery;
use App\Model\Utilisateur;
use \PDO;

class UtilisateurTable{

    private $pdo;
    protected $table = "user";

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(Utilisateur $user): void 
    {
        $query = $this->pdo->prepare("INSERT INTO {$this->table} SET prenom = :prenom, nom = :nom, role = :role, acces = :acces, username = :username, password = :password");
        $ok = $query->execute([
            'prenom' => $user->getPrenom(),
            'nom' => $user->getNom(),
            'role' => $user->getRole(),
            'acces' => $user->getAcces(),
            'username' => $user->getUsername(),
            'password' => $user->getPassword()
        ]);
        if($ok === false){
            throw new \Exception("Erreur lors de la création de l'utilisateur");
        }
        $user->setId($this->pdo->lastInsertId());
    }

    public function update(Utilisateur $user): void 
    {
        $query = $this->pdo->prepare("UPDATE {$this->table} SET prenom = :prenom, nom = :nom, role = :role, acces = :acces, username = :username, password = :password WHERE id = :id");
        $ok = $query->execute([
            'id' => $user->getId(),
            'prenom' => $user->getPrenom(),
            'nom' => $user->getNom(),
            'role' => $user->getRole(),
            'acces' => $user->getAcces(),
            'username' => $user->getUsername(),
            'password' => $user->getPassword()
        ]);
        if($ok === false){
            throw new \Exception("Erreur lors de la modification de l'utilisateur");
        }
    }

    public function delete(int $id): void
    {
        $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = ?");
        $ok = $query->execute([$id]);
        if($ok === false){
            throw new \Exception("Erreur lors de la suppression de l'utilisateur");
        }
    }

    public function find (int $id): Utilisateur 
    {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
        $query->setFetchMode(PDO::FETCH_CLASS, Utilisateur::class);
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
            ORDER BY id DESC",
            "SELECT COUNT(id) FROM {$this->table}",
            $this->pdo
        );
        $users = $paginatedQuery->getItems(Utilisateur::class);
        return [$users, $paginatedQuery];
    }

}