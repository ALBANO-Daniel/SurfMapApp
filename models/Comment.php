<?php

require_once(__DIR__ . '/../helpers/functions/Database.php');

class Comment
{
    private int $_id_comments;
    private string $_comment;
    private int $_category;

    private int $_id_users;
    private int $_id_news;
    private int $_id_spots;

    public function __construct()
    {
        // empty 
    }

    // START -- GETTER/SETTER
    public function getId(): int
    {
        return $this->_id_comments;
    }
    public function setId(int $id): void
    {
        $this->_id_comments = $id;
    }

    public function getComment(): string
    {
        return $this->_comment;
    }
    public function setComment(string $comment): void
    {
        $this->_comment = $comment;
    }

    public function getCategory(): int
    {
        return $this->_category;
    }
    public function setCategory(int $category): void
    {
        $this->_category = $category;
    }

    public function getIdUsers():int
    {
        return $this->_id_users;
    }
    public function setIdUsers(int $id):void
    {
        $this->_id_users = $id;
    }

    public function getIdNews():int
    {
        return $this->_id_news;
    }
    public function setIdNews(int $id):void
    {
        $this->_id_news = $id;
    }
    public function getIdSpots():int
    {
        return $this->_id_spots;
    }    
    public function setIdSpots(int $id):void
    {
        $this->_id_spots = $id;
    }
    // END -- GETTER/SETTER

    // set
    public function setNewsComment():bool
    {
        $pdo = Database::getInstance();
        $sql = "INSERT INTO `comments`(`comment`,`category`,`id_news`,`id_users`)
                VALUES (:comment,:category,:id_news,:id_users);";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':comment', $this->getComment());
        $stmt->bindValue(':category', $this->getCategory(), PDO::PARAM_INT);
        $stmt->bindValue(':id_news', $this->getIdNews(), PDO::PARAM_INT);
        $stmt->bindValue(':id_users', $this->getIdUsers(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            SessionFlash::set(true, 'commentaire envoie');
            return true;
        } else {
            SessionFlash::set(true, 'impossible de ecrire le commentaire');
            return false;
        }
    }
    public function setSpotsComment():int
    {
        $pdo = Database::getInstance();
        $sql = "INSERT INTO `comments`(`comment`,`category`,`id_spots`,`id_users`)
                VALUES (:comment,:category,:id_spots,:id_users);";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':comment', $this->getComment());
        $stmt->bindValue(':category', $this->getCategory(), PDO::PARAM_INT);
        $stmt->bindValue(':id_spots', $this->getIdSpots(), PDO::PARAM_INT);
        $stmt->bindValue(':id_users', $this->getIdUsers(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            SessionFlash::set(true, 'commentaire envoie');
            return intval($pdo->lastInsertId());
        } else {
            SessionFlash::set(true, 'impossible de ecrire le commentaire');
            return false;
        }
    }
    // get
    public static function get(int $id):object
    {
        $pdo = Database::getInstance();
        $sql = "SELECT * FROM `comments` WHERE `id_comments` = :id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
    public static function getAllFromCategory(int $category):array
    {
        $pdo = Database::getInstance();
        $sql = "SELECT * FROM `comments` WHERE `category` = :category";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':category', $category, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public static function getAllFromUser(int $id):array
    {
        $pdo = Database::getInstance();
        $sql = "SELECT * FROM `comments` WHERE `id_users` = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public static function getAllFromNews(int $id):array
    {
        $pdo = Database::getInstance();
        $sql = 'SELECT * FROM `comments` WHERE `id_news` = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public static function getAllFromSpots(int $id):array
    {
        $pdo = Database::getInstance();
        $sql = 'SELECT * FROM `comments` WHERE `id_spots` = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    // edit
    public static function edit(int $id, string $comment):bool
    {
        $timezone = new DateTimeZone('UTC');
        $now = new DateTime('now', $timezone);
        $now = $now->date;

        $pdo =  Database::getInstance();
        $sql = "UPDATE `comments` SET 
                `comment` = :comment,
                `modified_at` = $now,
                WHERE `id_comments` = :id;
                ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':comment', $comment);
        if ($stmt->execute()) {
            SessionFlash::set(true, 'Le commentaire a bien été edité');
            return true;
        } else {
            SessionFlash::set(false, 'Le commentaire n\'a pas été edité');
            return false;
        }
    }
    public static function validate(int $id):bool
    {
        $timezone = new DateTimeZone('UTC');
        $now = new DateTime('now', $timezone);
        $now = $now->date;

        $pdo =  Database::getInstance();
        $sql = "UPDATE `comments` SET 
                `validated_at` = $now,
                WHERE `id_comments` = :id;
                ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            SessionFlash::set(true, 'Le commentaire a bien été validé');
            return true;
        } else {
            SessionFlash::set(false, 'Le commentaire n\'a pas été validé');
            return false;
        }
    }
    // delete
    public static function delete(int $id): bool
    {
        $timezone = new DateTimeZone('UTC');
        $now = new DateTime('now', $timezone);
        $now = $now->date;
            
        $pdo = Database::getInstance();
        $sql = "UPDATE `comments` SET `deleted_at` = $now WHERE `id_comments` = :id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        if($stmt->execute()){
            SessionFlash::set(true, 'Le commentaire a bien été supprimé');
            return true;
        };
        SessionFlash::set(false, 'Le commentaire n\'a pas été supprimé');
        return false;
    }
}
