<?php
require 'utils/functions.php';

$id=$_GET['id'];
$image=$_GET['image'];
if(deleteProduct($id)){
    unlink("assets/uploads/$image");
    header('location: index.php');
    exit();
}else{
    echo "Something Went Wrong!!";
}