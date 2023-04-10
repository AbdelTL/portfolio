<?php
include dirname(__FILE__). '/Properties.php';
abstract class Database
{
    protected PDO $pdo;


    public function __construct()
    {

        try {
            $this->pdo = new PDO('sqlite:' . DB_FILE);

            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            echo "Connected to the database successfully!";

        } catch (PDOException $e) {
            // handle the error here
            echo "Database connection failed: " . $e->getMessage();
        }
    }

}
