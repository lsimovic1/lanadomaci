<?php

class DB
{
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $db = "biblioteke";
    public $connection;

    function __construct($db)
    {
        $this->db = $db;
        $this->connect();
    }

    function connect()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->db);
    }
}