<?php
require_once(__DIR__.'/../../config/config.php');

class Database{

    // private PDO $_pdo; // OR private object $_pd

    public static function getInstance(){  
        $pdo = new PDO(
            DSN,
            LOGIN,
            PASSWORD, // vars declared in the config.php
        );
        // setting default fetch mode
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 
        return $pdo;
    }
}
