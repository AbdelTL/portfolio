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
        $statement = $this->pdo->prepare('SELECT * FROM contact WHERE email = :email');
        $statement->bindValue(':email', $email);

       $statement->execute();

        $exists = $statement->fetch();
        return $email !== '' and strlen($email) < 200 and  empty($exists);
    }

    private function checkFirstname(string $firstname): bool
    {
        return $firstname !== '' and strlen($firstname) <= 50;
    }

    private function checkLastname(string $lastname): bool
    {
        return $lastname !== ' b' and strlen($lastname) <= 50;
    }


    private function checkObject(string $object): bool
    {
        return $object !== '' and strlen($object) <= 50;
    }

    public function createContact(string $email, string $firstname, string $lastname, string $object)
    {
        if ($this->checkEmail($email) and $this->checkFirstname($firstname) and $this->checkLastname($lastname) and $this->checkObject($object)) {
            $stmt = $this->pdo->prepare("INSERT INTO contact (email, firstname, lastname, object) VALUES (:email, :firstname, :lastname, :object)");
            $stmt->bindValue(':email', htmlspecialchars($email));
            $stmt->bindValue(':firstname', htmlspecialchars($firstname ));
            $stmt->bindValue(':lastname', htmlspecialchars($lastname ));
            $stmt->bindValue(':object', htmlspecialchars($object));
            if (!$stmt->execute()) {
                $error = array(
                    'error' => 'There was a problem creating the contact. Please try again later.'
                );
                header('Content-Type: application/json');
                http_response_code(500);
                echo json_encode($error);
                exit;
            }
        } else {
            $error = array(
                'error' => 'There was a problem creating the contact. Please check your input and try again.'
            );
            header('Content-Type: application/json');
            http_response_code(400);
            echo json_encode($error);
            exit;
        }
    }


}

