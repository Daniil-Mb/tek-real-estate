<?php

namespace database;

//TODO это временная реализация работы с БД. При переделывании архетектуры выпилится
use PDO;
use PDOStatement;

class Database
{
    public PDO $connection;
    private PDOStatement $statement;

    public function __construct($config, $user = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $user, $password);
    }

    public function query(string $query, array $params = []): false|array
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find(): false|array
    {
        return $this->statement->fetch();
    }
}