<?php

class ConnectDb {
    // Hold the class instance.
    private static $instance = null;
    private $conn;
    
  
    // The db connection is established in the private constructor.
    private function __construct()
    {
        $this->conn = $this->getDb();

    }
    // Magic method clone is empty to prevent duplication of connection
    private function __clone(){}

    private function getDb(){
        try
        {
            $conn = new PDO('mysql:host=localhost;dbname=emnadatabase;charset=utf8', 'root', '');
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        } 
        return $conn;
    }


    public static function getInstance()
    {
      if(!self::$instance)
      {
        self::$instance = new ConnectDb();
      }
     
      return self::$instance;
    }
    
    public function getConnection()
    {
      return $this->conn;
    }
  }
  

