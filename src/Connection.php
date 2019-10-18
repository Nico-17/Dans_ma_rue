<?php
namespace App;

use \PDO;

class Connection{
    public $encodage;

    public static function getPDO (): PDO
    {

        return new PDO('mysql:host=localhost;dbname=Dans_Ma_Rue', 'root', 'root',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}
?>