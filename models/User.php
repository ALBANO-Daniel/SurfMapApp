<?php
// a method to only validate ? 
// $stmt->bindValue(':validated_at', $this->getValidatedAt());

require_once(__DIR__ . '/../helpers/functions/Database.php');

class User
{
    private int $_id;
    private string $_firstname;
    private string $_lastname;
    private string $_email;
    private string $_city;
    private string $_country;
    private string $_password;

    private string $_created_at;
    private string $_validated_at;
    private string $_modified_at;
    private string $_deleted_at;

    public function __construct()
    {
        // created at 
        // databse connection 
    }
    // START -- GETTER/SETTER

    public function setId(int $id): void
    {
        $this->_id = $id;
    }
    public function getId(): int
    {
        return $this->_id;
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

    public function setFirstname(string $firstname): void
    {
        $this->_firstname = $firstname;
    }
    public function getFirstname(): string
    {
        return $this->_firstname;
    }

    public function setLastname(string $lastname): void
    {
        $this->_lastname = $lastname;
    }
    public function getLastname(): string
    {
        return $this->_lastname;
    }

    public function setEmail(string $email): void
    {
        $this->_email = $email;
    }
    public function getEmail(): string
    {
        return $this->_email;
    }

    public function setCity(string $city): void
    {
        $this->_city = $city;
    }
    public function getCity(): string
    {
        return $this->_city;
    }

    public function setCountry(string $country): void
    {
        $this->_country = $country;
    }
    public function getCountry(): string
    {
        return $this->_country;
    }

    public function setPassword(string $password): void
    {
        $this->_password = $password;
    }
    public function getPassword(): string
    {
        return $this->_password;
    }

    // END -- GETTER/SETTER

    public function set(): int
    {
        $pdo = Database::getInstance();
        $sql = "INSERT INTO `users`(`firstname`,`lastname`,`country`,`city`,`email`,`password`) 
                VALUES (:firstname,:lastname,:country,:city,:email,:password);";
        // nominativ marker ( : )   'var' sql, interact with prepare method of pdo, and protect malware SQL injections 
        // interrogativ marker ( ? )
        //statement e.g. communications with database
        // stmt || sth
        $stmt = $pdo->prepare($sql);
        // bindParam - rare  - as  if was 'var' so it can change later.
        // bindValue - affect definitvly, accept a 3rd parameter...
        // ...3rd param. to be precised if var type != string ( more used: PDO::PARAM_INT and PARAM_STR)
        $stmt->bindValue(':firstname', $this->getFirstname());
        $stmt->bindValue(':lastname', $this->getLastname());
        $stmt->bindValue(':country', $this->getCountry());
        $stmt->bindValue(':city', $this->getCity());
        $stmt->bindValue(':email', $this->getEmail());
        $stmt->bindValue(':password', $this->getPassword());
        // the method runs and also get its result its returned, boolean, used to test sucess/fail
        if ($stmt->execute()) {
            return intval($pdo->lastInsertId());
        } else {
            return false;
        }
    }
    
    public function edit(int $id)
    {
        $pdo =  Database::getInstance();
        $sql = "UPDATE `clients` SET 
                `firstname` = :firstname,
                `lastname` = :lastname,
                `country` = :country,
                `city` = :city,
                `email` = :email,
                `password` = :password,
                `modified_at` = :modified_at
                WHERE `id` = :id;
                ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':firstname', $this->getFirstname());
        $stmt->bindValue(':lastname', $this->getLastname());
        $stmt->bindValue(':country', $this->getcountry());
        $stmt->bindValue(':city', $this->getcity());
        $stmt->bindValue(':email', $this->getEmail());
        $stmt->bindValue(':password', $this->getPassword());
        $stmt->bindValue(':modified_at', $this->getModifiedAt());
        if ($stmt->execute()) {
            SessionFlash::set(true, 'Votre compte a bien etais edite');
            return $id;
        } else {
            return false;
        }
    }

    public static function editPassword(int $id, string $password)
    {
        $pdo =  Database::getInstance();
        $sql = "UPDATE `clients` SET `password` = :password WHERE `id` = :id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':password', $password);
        if($stmt->execute()){
            SessionFlash::set(true, 'Votre password a bien etais edite');
            return true;
        };
        SessionFlash::set(false, 'Votre password n\'as pas etais edite, essaie une autre fois.');
        return false;
    }

    public static function delete(int $id): bool
    {
        $timezone = new DateTimeZone('UTC');
        $now = new DateTime('now', $timezone);
        $now = $now->date;
        
        $pdo = Database::getInstance();
        $sql = "UPDATE `users` SET `deleted_at` = $now WHERE `id` = :id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        if($stmt->execute()){
            SessionFlash::set(true, 'Votre profil de utilizateur a bien etais suprime');
            return true;
        };
        return false;
    }

    public static function emailExist(string $email): bool
    {
        try {
            $pdo = Database::getInstance();
            $sql = 'SELECT `users`.`id` FROM `users` WHERE `email` = :email';
            $stmt = $pdo->prepare($sql);  // return a object of the class PDOStatement..   statment handle
            $stmt->bindValue(':email', $email);
            $isTrueStmt = $stmt->execute();
            if ($isTrueStmt) {
                if (empty($stmt->fetch())) {
                    return false;
                } else {
                    SessionFlash::set(false, 'Le email est deja enregistrer pour une utilisateur.');
                    return true;
                };
            } else {
                SessionFlash::set(false, 'Impossible des faire Connexion a la base de Donnes, try again or call support.');
                return true;
            }
            //$pdo = new PDO(DNS,login,pass);
            //$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function get(int $id)
    {
        $pdo = Database::getInstance();
        $sql = "SELECT * FROM `users` WHERE `id_users` = $id ;";
        $stmt = $pdo->query($sql);
        return $stmt->fetch();
    }


    public static function getByEmail(string $email)
    { // obj(User) - bool
        $pdo = Database::getInstance();
        $sql = 'SELECT * FROM `users` WHERE `email` = :email;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':email', $email);
        if ($sth->execute()) {
            //$sth->setFetchMode(PDO::FETCH_CLASS, 'User');
            $result = $sth->fetch();
            if ($result) {
                return $result;
            }
        }
        return false;
    }

    public static function getTotalNumberOf($search = '')
    {
        $pdo = Database::getInstance();
        $sql = 'SELECT COUNT(`id`) AS count FROM `patients`';
        if ($search != '') {
            $sql .= ' WHERE `lastname` LIKE :search OR `email` LIKE :search ';
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

    public static function getAll(int $currentPage = 1, int $usersPerPage = 0, $search = ''): array
    {
        $pdo = Database::getInstance();
        $offset = ($currentPage - 1) * $usersPerPage; // offset can be set out of method 
        $sql = "SELECT `id`, `firstname`, `lastname`, `country`, `city`, `email` 
        FROM `patients`";
        if ($search != '') {
            $sql .= ' WHERE `lastname` LIKE :search OR `email` LIKE :search ';
        }
        if ($usersPerPage != 0) {
            $sql .= ' LIMIT :usersPerPage OFFSET :offset;';
        }
        $stmt = $pdo->prepare($sql);
        if ($search != '') {
            $stmt->bindValue(':search', '%' . $search . '%');
        }
        if ($usersPerPage != 0) {
            $stmt->bindValue(':usersPerPage', $usersPerPage, PDO::PARAM_INT);
            $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        }
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
