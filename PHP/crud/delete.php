<?php
require_once "config/connection.php";
$id=$_GET['id'];

$sql="DELETE from students WHERE id=$id";

$res=mysqli_query($db_connection,$sql);

if($res){
    header('location: index.php');
}else{
    echo mysqli_error($db_connection);
}