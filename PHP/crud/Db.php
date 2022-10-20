<?php

class Db
{
    private static $hostname = 'localhost';
    private static $username = 'root';
    private static $password = 'V1ndhy@CS';
    private static $database = 'ecommerce';

    // private $name;

    public static function connect()
    {
        return new mysqli(self::$hostname, self::$username, self::$password, self::$database);
    }

    /* public function setName($name)
    {
        $this->name = $name;
    } */
}