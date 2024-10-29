<?php
session_start();
require_once "../utils/functions.php";
require_once "../config/Connection.php";

$email=$_POST['email'];
$password=$_POST['password']; 


$sql="select * from users where email='$email'";
$result= $db->db_connection->query($sql);
if(mysqli_num_rows($result) > 0){
    $user=$result->fetch_assoc();
    $original_password=$user['password'];
    if(password_verify($password,$original_password)){
        $_SESSION['user']=$user;
        header("Location:../index.php");
    }else{
        $_SESSION['error']=[
            'password is incorrect',
        ];
    }
}
else{
    $_SESSION['error']=[
        'Email is incorrect',
    ];
}


// MD5 algorithm
// SHA1 algorithm