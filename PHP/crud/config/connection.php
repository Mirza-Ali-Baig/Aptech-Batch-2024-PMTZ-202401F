<?php

$host="localhost";
$user="root";
$pass="";
$db='pmtz_202401f';

$db_connection=mysqli_connect($host,$user,$pass,$db);

if(!$db_connection){
    echo "Not Connected : ". mysqli_connect_error();
}