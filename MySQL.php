<?php

   class MYSQL {
       private $host;
       private $port;
       private $username;
       private $password;
       private $database;
    use SQLCrud;
       public function __construct($host,$username, $password, $database){
           $this->host=$host;
           $this->username = $username;
           $this->password = $password;
           $this->database=$database;

        }
       public function __destruct()
        {
            
        }
      
}

