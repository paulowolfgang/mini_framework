<?php

namespace app;

class Connection
{   
    private static $host = "localhost";
    private static $type = "mysql";
    private static $port = "3306";
    private static $user = "root";
    private static $name = "mini_framework";
    private static $pass = "";

    private function getHost()
    {
        return self::$host;
    }

    private function getType()
    {
        return self::$type;
    }

    private function getPort()
    {
        return self::$port;
    }

    private function getUser()
    {
        return self::$user;
    }

    private function getName()
    {
        return self::$name;
    }

    private function getPass()
    {
        return self::$pass;
    }

    public static function connect()
    {   
        try {
            $this->connection = new \PDO($this->getType().":host=".$this->getHost().";port=".$this->getPort().";dbname=".$this->getName(),
                                    $this->getUser(),
                                    $this->getPass());
        } catch (\PDOException $e){
            //..
        }
        return ($this->connection);
    }
}
