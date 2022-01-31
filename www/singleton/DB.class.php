<?php
    class DB {
        private static $instance = null;
        private $conn;
         
        // La connexion au bd est établie dans le constructeur privé.
        private function __construct()
        {
          $this->conn = new PDO("mysql:host=localhost; dbname=test", "myuser", "mypassword");
        }
        
        public static function getInstance()
        {
          if(!self::$instance)
          {
            self::$instance = new ConnexionBD();
          }
         
          return self::$instance;
        }
        
        public function getConnection()
        {
          return $this->conn;
        }
    }