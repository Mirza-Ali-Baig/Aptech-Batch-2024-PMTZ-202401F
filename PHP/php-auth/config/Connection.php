<?php

class DBConnection{
 private string $host='localhost';
 private string $user='root';
 private string $pass='';
 private string $db='pmtz_202401f';
 public $db_connection;  

public function __construct(){
 $this->db_connection = new MySqli($this->host,$this->user,$this->pass,$this->db) or exit("Couldn't connect to database");
}


}

$db = new DBConnection();