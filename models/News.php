<?php
require_once(__DIR__ . '/../helpers/functions/Database.php');

class News
{
    private int $_id_news;
    private string $_header;
    private string $_blockquote;
    private string $_body;

    public function __construct()
    {
        // created at ?
        // databse connection ?
        // now dateTime ?
    }
    // START -- GETTER/SETTER
    public function getId():int
    {
        return $this->_id_news;
    }
    public function setId(int $id):void
    {
        $this->_id_news = $id;
    }
    public function getHeader():string
    {
        return $this->_header;
    }
    public function setHeader(string $header):void
    {
        $this->_header = $header;
    }
    public function getBlockquote():string
    {
        return $this->_blockquote;
    }
    public function setBlockquote(string $blockquote):void
    {
        $this->_blockquote = $blockquote;
    }
    public function getBody():string
    {
        return $this->_body;
    }
    public function setBody(string $body):void
    {
        $this->_body = $body;
    }
    // END -- GETTER/SETTER

    // set ONE
    public function set():int
    {
        $pdo = Database::getInstance();
        $sql = "INSERT INTO `news`(`header`,`blockquote`,`body`) 
                VALUES (:header,:blockquote,:body);";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':header', $this->getHeader());
        $stmt->bindValue(':blockquote', $this->getBlockquote());
        $stmt->bindValue(':body', $this->getBody());
        if ($stmt->execute()) {
            return intval($pdo->lastInsertId());
        } else {
            return false;
        }
    }
    // get ONE
    public static function get(int $id):object
    {
        $pdo = Database::getInstance();
        $sql = "SELECT * FROM `news` WHERE `id_news` = :id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    // get total number of 
    public static function getTotalNumberOf($search = '')
    {
        $pdo = Database::getInstance();
        $sql = 'SELECT COUNT(`id_news`) AS count FROM `news`';
        if ($search != '') {
            $sql .= ' WHERE `header` LIKE :search OR `blockquote` LIKE :search OR `body` LIKE :search';
        }
        $sql .= ';';
        $stmt = $pdo->prepare($sql);
        if ($search != '') {
            $stmt->bindValue(':search', '%' . $search . '%');
        }
        $stmt->execute();
        $obj = $stmt->fetch();
        return intval($obj->count);
    }
    // getAll
    public static function getAll(int $currentPage = 1, int $newsPerPage = 0, $search = ''): array
    {
        $pdo = Database::getInstance();
        $offset = ($currentPage - 1) * $newsPerPage; // offset can be set out of method 
        $sql = "SELECT `id_news`, `header`, `blockquote`, `body` 
                FROM `news`";
        if ($search != '') {
            $sql .= ' WHERE `header` LIKE :search OR `blockquote` LIKE :search OR `body` LIKE :search';
        }
        $sql .= ' LIMIT :newsPerPage OFFSET :offset;';
        $stmt = $pdo->prepare($sql);
        if ($search != '') {
            $stmt->bindValue(':search', '%' . $search . '%');
        }
        $stmt->bindValue(':newsPerPage', $newsPerPage, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    // edit
    public function edit(int $id)
    {
        $timezone = new DateTimeZone('UTC');
        $now = new DateTime('now', $timezone);
        $now = $now->date;

        $pdo =  Database::getInstance();
        $sql = "UPDATE `news` SET 
                `header` = :header,
                `blockquote` = :blockquote,
                `body` = :body,
                `modified_at` = $now,
                WHERE `id_news` = :id;
                ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':header', $this->getHeader());
        $stmt->bindValue(':blockquote', $this->getBlockquote());
        $stmt->bindValue(':body', $this->getBody());
        if ($stmt->execute()) {
            SessionFlash::set(true, 'L\'Actualite a bien etais edite');
            return $id;
        } else {
            SessionFlash::set(false, 'L\'Actualite n\'a pas etais edite');
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
        $sql = "UPDATE `news` SET `deleted_at` = $now WHERE `id_news` = :id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        if($stmt->execute()){
            SessionFlash::set(true, 'L\'actualite a bien etais suprime');
            return true;
        };
        SessionFlash::set(false, 'L\'actualite n\'a pas etais suprime');
        return false;
    }

}