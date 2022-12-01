<?php
require_once(__DIR__ . '/../helpers/functions/Database.php');

class News
{
    private int $_id_news;
    private string $_header;
    private string $_subHeader;
    private string $_body;

    // created_at etc.... auto generation OR inserted direct var->SQL->table

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

    public function getSubHeader():string
    {
        return $this->_subHeader;
    }
    public function setSubHeader(string $subHeader):void
    {
        $this->_subHeader = $subHeader;
    }

    public function getBody():string
    {
        return $this->_body;
    }
    public function setBody(string $body):void
    {
        $this->_body = $body;
    }

    public function setCreatedAt(string $created_at): void
    {
        $this->_created_at = $created_at;
    }
    public function getCreatedAt(): string
    {
        return $this->_created_at;
    }

    public function setValidatedAt(string $validated_at): void
    {
        $this->_validated_at = $validated_at;
    }
    public function getValidatedAt(): string
    {
        return $this->_validated_at;
    }

    public function setModifiedAt(string $modified_at): void
    {
        $this->_modified_at = $modified_at;
    }
    public function getModifiedAt(): string
    {
        return $this->_modified_at;
    }

    public function setDeletedAt(string $deleted_at): void
    {
        $this->_deleted_at = $deleted_at;
    }
    public function getDeletedAt(): string
    {
        return $this->_deleted_at;
    }
    // END -- GETTER/SETTER

    // set
    public function set():int
    {
        $pdo = Database::getInstance();
        $sql = "INSERT INTO `news`(`header`,`subheader`,`body`) 
                VALUES (:header,:subheader,:body);";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':header', $this->getHeader());
        $stmt->bindValue(':subheader', $this->getSubHeader());
        $stmt->bindValue(':body', $this->getBody());
        if ($stmt->execute()) {
            return intval($pdo->lastInsertId());
        } else {
            return false;
        }
    }
    // get
    public static function get(int $id):object
    {
        $pdo = Database::getInstance();
        $sql = "SELECT * FROM `news` WHERE `id_news` = :id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public static function getTotalNumberOf($search = '')
    {
        $pdo = Database::getInstance();
        $sql = 'SELECT COUNT(`id_news`) AS count FROM `news`';
        if ($search != '') {
            $sql .= ' WHERE `header` LIKE :search OR `subheader` LIKE :search OR `body` LIKE :search';
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
    public static function getAll(int $currentPage = 1, int $newsPerPage = 0, $search = ''): array
    {
        $pdo = Database::getInstance();
        $offset = ($currentPage - 1) * $newsPerPage; // offset can be set out of method 
        $sql = "SELECT `id_news`, `header`, `subheader`, `body`, `created_at`, `modified_at`
                FROM `news`";
        if ($search != '') {
            $sql .= ' WHERE `header` LIKE :search OR `subheader` LIKE :search OR `body` LIKE :search';
        }
        if ($newsPerPage != 0) {
        $sql .= ' LIMIT :newsPerPage OFFSET :offset;';
        } else { $sql .= ';';}
        $stmt = $pdo->prepare($sql);
        if ($search != '') {
            $stmt->bindValue(':search', '%' . $search . '%');
        }
        if ($newsPerPage != 0) {
        $stmt->bindValue(':newsPerPage', $newsPerPage, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        }
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
                `subheader` = :subheader,
                `body` = :body,
                `modified_at` = $now,
                WHERE `id_news` = :id;
                ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':header', $this->getHeader());
        $stmt->bindValue(':subheader', $this->getSubHeader());
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