<?php
class PostgreSQL{
    private $host;
    private $port;
    private  $username;
    private $password;
    private $database;

    public function __construct($host,$port, $username, $password, $database){
        $this->host=$host;
        $this->port=$port;
        $this->username = $username;
        $this->password = $password;
        $this->database=$database;

     }
    public function __destruct()
   {
         
   }
}

