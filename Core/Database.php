<?php

namespace Core;

use PDO;
use PDOStatement;

class Database
{
    public PDO $connection;
    public PDOStatement $statement;

    public function __construct($config, string $username = 'postgres', string $password = 'postgres')
    {
        $dsn = 'pgsql:' . http_build_query($config, '', ';') . ';options=\'--client_encoding=UTF8\'';

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = []): false | Database
    {
        $this->statement  =$this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if(! $result) {
            abort();
        }

        return $result;
    }
}