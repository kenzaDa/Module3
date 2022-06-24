<?php

class ConnectDb {
    // Hold the class instance.
    // private static $instance = null;
    public static $conn;
    
  
    // The db connection is established in the private constructor.
    public function __construct()
    {
      self::$conn = $this->getDb();

    }
    // Magic method clone is empty to prevent duplication of connection
    private function __clone(){}

    private function getDb(){
        try
        {
            $conn = new PDO('mysql:host=localhost;dbname=databasekenza;charset=utf8', 'root', '');
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        } 
        return $conn;
    }


    public static function getInstance()
    {
      if(!self::$conn)
      {
        self::$conn = new ConnectDb();
      }
     
      return self::$conn;
    }
    
    public function getConnection()
    {
      return $this->conn;
    }
  }