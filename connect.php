<?php


class Connect
{
    public $connection;
    public function __construct(){
        $this->connection = new PDO("pgsql:host=localhost;dbname=usuarios","postgres","root");
    }
}













