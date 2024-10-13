<?php
require_once "config/connection.php";
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];

$sql="insert into students (name,email,age) values ('$name','$email',$age)";

$res=mysqli_query($db_connection,$sql);

if($res){
        // echo "Student Added";
        header('location: index.php');
}else{
    echo "Error To insert Student";
}


?>