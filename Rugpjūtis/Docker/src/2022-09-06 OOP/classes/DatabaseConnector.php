<?php

class DatabaseConnector
{
    private static $instance = null;

    function __construct(string $hostname, string $username, string $password)
    {
        echo "=========" . __CLASS__ . "=========\n\n";
        var_dump($hostname, $username, $password);
        echo "\n";
    }

    public static function connect($hostname,$username,$password): void
    {
        self::getInstance($hostname,$username,$password);
    }

    public static function getInstance(string $hostname = null, string $username = null, string $password = null): DatabaseConnector
    {
        if (self::$instance == null) 
        {
            self::$instance = new DatabaseConnector($hostname, $username, $password);
        }
        return self::$instance;
    }
}