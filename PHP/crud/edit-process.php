<?php
require_once "config/connection.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";
$id = $_GET['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];

$sql="UPDATE students
      set name='$name',email='$email',age=$age WHERE id=$id";

$res=mysqli_query($db_connection,$sql);

if($res){
        // echo "Student Updated";
        header('location: index.php');
}else{
    echo "Error To Update Student";
}


?>