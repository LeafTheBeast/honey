<?php

class DatabaseHelper 
{
    const HOST       = 'localhost';
    const USER       = 'root';
    const PASSWORD   = '';
    const DB_NAME    = 'honey_db';

    private static function createPDOInstance()
    {
        $dsn = 'mysql:host' . self::HOST . ';dbname=' . self::DB_NAME;
        
        return new PDO($dsn, self::USER, self::PASSWORD);
    }

    public static function getDatabaseTableData(string $query)
    {
        $pdo = self::createPDOInstance();
        $select = $pdo->prepare($query);
        $select->execute();
        $row = $select->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
}


