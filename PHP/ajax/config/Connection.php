<?php

class Connection{
    private string $host='localhost';
    private string $username='root';
    private string $password='';
    private string $dbname='pmtz_202401f';
    protected PDO $pdo;

    public function __construct(){
        try{
            // $dsn = 'mysql:dbname=testdb;host=127.0.0.1';
            $this->pdo=new PDO("mysql:dbname=$this->dbname;host=$this->host",$this->username,$this->password);

        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }
}