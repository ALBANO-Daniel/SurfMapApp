<?php
require_once(__DIR__ . '/../helpers/functions/Database.php');

class Spot 
{
    private int $_id_spots;
    private string $_name;
    private string $_latitude;
    private string $_longitude;
    private string $_description;
    
    public function __construct()
    {
        // created at ?
        // databse connection ?
        // now dateTime ?
    }
    // START -- GETTER/SETTER
    public function getId():int
    {
        return $this->_id_spots;
    }
    public function setId(int $id):void
    {
        $this->_id = $id;
    }

    public function getName():string
    {
        return $this->_name;
    }
    public function setName(string $name):void
    {
        $this->_name = $name;
    }

    public function getLatitude():string
    {
        return $this->_latitude;
    }
    public function setLatitude(string $latitude):void
    {
        $this->_latitude = $latitude;
    }

    public function getLongitude():string
    {
        return $this->_longitude;
    }
    public function setLongitude(string $longitude):void
    {
        $this->_longitude = $longitude;
    }

    public function getDescription():string
    {
        return $this->_description;
    }
    public function setDescription(string $description):void
    {
        $this->_description = $description;
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

    // set ONE
    public function set():int
    {
        $pdo = Database::getInstance();
        $sql = "INSERT INTO `spots`(`name`,`latitude`,`longitude`,`description`) 
                VALUES (:name,:latitude,:longitude,:description);";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name', $this->getName());
        $stmt->bindValue(':latitude', $this->getLatitude());
        $stmt->bindValue(':longitude', $this->getLongitude());
        $stmt->bindValue(':description', $this->getDescription());
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
        $sql = "SELECT * FROM `spots` WHERE `id_spots` = :id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    // get total number of 
    public static function getTotalNumberOf($search = '')
    {
        $pdo = Database::getInstance();
        $sql = 'SELECT COUNT(`id_spots`) AS count FROM `spots`';
        if ($search != '') {
            $sql .= ' WHERE `name` LIKE :search';
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
    public static function getAll(int $currentPage = 1, int $spotsPerPage = 0, $search = ''): array
    {
        $pdo = Database::getInstance();
        $offset = ($currentPage - 1) * $spotsPerPage; // offset can be set out of method 
        $sql = "SELECT `id_spots`, `name`, `latitude`, `longitude`, `description`, `created_at`,`modified_at`
                FROM `spots`";
        if ($search != '') {
            $sql .= ' WHERE `name` LIKE :search';
        }
        if ($spotsPerPage != 0) {
        $sql .= ' LIMIT :spotsPerPage OFFSET :offset;';
        } else { $sql .= ';';}
        $stmt = $pdo->prepare($sql);
        if ($search != '') {
            $stmt->bindValue(':search', '%' . $search . '%');
        }
        if ($spotsPerPage != 0) {
        $stmt->bindValue(':spotsPerPage', $spotsPerPage, PDO::PARAM_INT);
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
        $sql = "UPDATE `spots` SET 
                `name` = :name,
                `latitude` = :latitude,
                `longitude` = :longitude,
                `description` = :description,
                `modified_at` = $now,
                WHERE `id_spots` = :id;
                ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':name', $this->getName());
        $stmt->bindValue(':latitude', $this->getLatitude());
        $stmt->bindValue(':longitude', $this->getLongitude());
        $stmt->bindValue(':description', $this->getDescription());
        if ($stmt->execute()) {
            SessionFlash::set(true, 'Le Spot a bien etais edite');
            return $id;
        } else {
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
        $sql = "UPDATE `spots` SET `deleted_at` = $now WHERE `id_spots` = :id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        if($stmt->execute()){
            SessionFlash::set(true, 'Le Spot a bien etais suprime');
            return true;
        };
        return false;
    }
}
