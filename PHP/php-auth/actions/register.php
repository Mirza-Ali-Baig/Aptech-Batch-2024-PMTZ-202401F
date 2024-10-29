<?php
require_once "../utils/functions.php";
require_once "../config/Connection.php";

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password']; 


// MD5 algorithm
// SHA1 algorithm

$password= password_hash($password,PASSWORD_DEFAULT);

echo $password;

$sql="insert into users (name,email,password) values ('$username', '$email', '$password')";

$db->db_connection->query($sql);

header("location: ../index.php");