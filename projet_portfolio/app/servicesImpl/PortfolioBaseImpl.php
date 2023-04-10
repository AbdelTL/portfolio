<?php

include dirname(__FILE__) . '/../config/Database.php';

class PortfolioBaseImpl extends Database
{
    public function __construct()
    {
        parent::__construct();
        $this->initTable();
    }

    private function initTable()
    {
        $this->pdo->query('CREATE TABLE IF NOT EXISTS portfolio (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    imgName VARCHAR(50) NOT NULL,
    title VARCHAR(50) NOT NULL,
    object VARCHAR(50) 


)');
    }

    public function getPortfolio()
    {
        return $this->pdo->query('SELECT * FROM portfolio')
            ->fetchAll();
    }

    public function createPortfolio(string $imgName, string $title, string $object)
    {
        if (!empty($imgName) && !empty($title) && !empty($object)) {
            $stmt = $this->pdo->prepare("INSERT INTO portfolio ('imgName', 'title', 'object') VALUES (:imgName, :title,:object)");
            $stmt->bindValue(':imgName', htmlspecialchars($imgName));
            $stmt->bindValue(':title', htmlspecialchars($title));
            $stmt->bindValue(':object', htmlspecialchars($object));

            $stmt->execute();
        } else {
            echo "error empty input";
        }
    }

//    public function getField(int $id): ?string
//    {
//        $stmt = $this->pdo->prepare('SELECT title, object FROM portfolio WHERE id = :id');
//        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
//        if (!$stmt->execute()) {
//            // handle query execution error
//            return null;
//        }
//        $result = $stmt->fetch(PDO::FETCH_ASSOC);
//        if (!$result) {
//            // handle empty result
//            return null;
//        }
//        $title = htmlspecialchars($result['title'] ?? '');
//        $object = htmlspecialchars($result['object'] ?? '');
//
//        return "<h2>{$title}</h2><p>{$object}</p>";
//    }

    public function deletePortfolioByTitle(string $title){
    }
}
    {

}

