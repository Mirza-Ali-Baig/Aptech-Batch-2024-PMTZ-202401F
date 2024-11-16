<?php

class Connection{
    private string $host='localhost';
    private string $username='root';
    private string $password='';
    private string $dbname='api';
    protected PDO $pdo;

    public function __construct(){
        try{
            // $dsn = 'mysql:dbname=testdb;host=127.0.0.1';
            $this->pdo=new PDO("mysql:dbname=$this->dbname;host=$this->host",$this->username,$this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }
}