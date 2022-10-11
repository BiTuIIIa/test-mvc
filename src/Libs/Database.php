<?php

namespace Libs;

use PDO;

class Database
{   private $host = "localhost";
    private $db_name = "test";
    private $username ="root";
    private $password = "Lfcfan1995";
    public  $dbconnection;

  public function getConnection (){

      $this->dbconnection = new PDO ("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
      return $this->dbconnection;

  }

}
