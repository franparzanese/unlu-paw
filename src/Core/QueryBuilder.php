<?php

namespace UnluPaw\Core;

class QueryBuilder {

    private \PDO $pdo;

    public function __construct() {
        $adapter = "mysql";
        $host = $_ENV["DB_HOST"];
        $name = $_ENV["DB_DATABASE"];
        $port = $_ENV["DB_PORT"];
        $charset = "utf8";
        try {
            $this->pdo = new \PDO(
                "{$adapter}:host={$host};dbname={$name};port={$port};charset={$charset}",
                $_ENV["DB_USERNAME"],
                $_ENV["DB_PASSWORD"],
                ["options" => [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]]
            );
        } catch (\PDOException $ex) {
            die ("No se pudo establecer la conexión a la base de datos.");
        }
    }

    public function select(string $query) {
        $sentence = $this->pdo->prepare($query);
        $sentence->setFetchMode(\PDO::FETCH_ASSOC);
        $sentence->execute();
        return $sentence->fetchAll();
    }

    public function insert(string $query) {
        $sentence = $this->pdo->prepare($query);
        $sentence->execute();
        return (int) $this->pdo->lastInsertId();
    }

}
