<?php

final class Databaseconnection{
    private static $instance = null;
    private static $connection;

    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new DatabaseConnection();
            return self::$instance;
        }
    }

    public function __clone(){ }
    public function __wakeup(){ }
    public function __construct(){ }

    public static function connect($host, $dbname, $user, $password){
        self::$connection = new PDO("mysql:dbname=$dbname; host=$host", $user, $password);
    }
    public static function getConnection(){
        return self::$connection;
    }
}
