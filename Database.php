<?php

class Database
{
    const DB_HOST = 'mysql:host=localhost;dbname=blog;charset=utf8';
    const DB_USER = 'root';
    const DB_PASS = '';

    private $connection;

    private function checkConnection()
    {
        if($this->connection === null)
        {
            return $this->getConnection();
        }
    }

    private function getConnection()
    {
        try{
            $this->connection = new PDO(self::DB_HOST,self::DB_USER,self::DB_PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->connection;
        }

        catch(Exception $errorConnection)
        {
            die('Erreur de connexion :'.$errorConnection->getMessage());
        }
    }

    protected function createQuery($sql,$parameters = null)
    {
        if($parameters)
        {
            $result = $this->checkConnection()->prepare($sql);
            $result->execute($parameters);
            return $result;
        }

        $result = $this->checkConnection()->query($sql);
        return $result;
    }
}