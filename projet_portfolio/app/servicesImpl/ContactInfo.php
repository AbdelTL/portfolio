<?php

include dirname(__FILE__) . '/../config/Database.php';

class ContactInfo extends Database
{
    public function __construct()
    {
        parent::__construct();
        $this->initTable();
    }

    private function initTable()
    {
        $this->pdo->query('CREATE TABLE IF NOT EXISTS contact (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    email VARCHAR(200) NOT NULL UNIQUE,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    object VARCHAR(50) 


)');
    }


    public function getContact()
    {
        return $this->pdo->query('SELECT * FROM contact')
            ->fetchAll();
    }

    public function createContact(string $email, string $firstname, string $lastname, string $object)
    {
        $stmt = $this->pdo->prepare("INSERT INTO contact ('email', 'firstname', 'lastname', 'object') VALUES (:email, :firstname,:lastname,:object)");
        $stmt->bindValue(':email', htmlspecialchars($email));
        $stmt->bindValue(':firstname', htmlspecialchars($firstname));
        $stmt->bindValue(':lastname', htmlspecialchars($lastname));
        $stmt->bindValue(':object', htmlspecialchars($object));
        //$stmt->bindValue(':password', password_hash($password, PASSWORD_BCRYPT));
        $stmt->execute();
    }

//post
    public function getContactById(int $id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM contact WHERE id=:identifiant');
        $stmt->bindValue(':identifiant', $id);
        $stmt->execute();

        return $stmt->fetch();

    }

    private function checkEmail(string $email): bool
    {
        return $email !== '' && strlen($email) <= 200;
    }

    private function checkFirstname(string $firstname): bool
    {
        return $firstname !== '' && strlen($firstname) <= 50;
    }

    private function checkLastname(string $lastname): bool
    {
        return $lastname !== '' && strlen($lastname) <= 50;
    }


    private function checkObject(string $object): bool
    {
        return $object !== '' && strlen($object) <= 50;
    }

    public
    function createPost(string $email, string $firstname, string $lastname, string $object)
    {
        if ($this->checkEmail($email) && $this->checkFirstname($firstname) && $this->checkLastname($lastname) && $this->checkObject($object)) {
            $stmt = $this->pdo->prepare("INSERT INTO contact ('email', 'firstname','lastname','object') VALUES (:email, :firstname,:lastname,:object)");
            $stmt->bindValue(':email', htmlspecialchars($email));
            $stmt->bindValue(':firstname', htmlspecialchars($firstname));
            $stmt->bindValue(':lastname', htmlspecialchars($lastname));
            $stmt->bindValue(':object', htmlspecialchars($object));
            $stmt->execute();
        }
    }


}

