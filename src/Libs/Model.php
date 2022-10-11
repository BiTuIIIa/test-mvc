<?php

namespace Libs;

class Model
{
    public $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->getConnection();

    }



}



