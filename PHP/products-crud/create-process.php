<?php
require_once "utils/functions.php";


$title=$_POST['title'];
$description=$_POST['description'];
$price=$_POST['price'];
$category=$_POST['category'];

if(empty($title)){
    $message="Title is Required!";
    header("location: create.php?titleInput&error=$message");
}
elseif(empty($description)){
    $message="Description is Required!";
    header("location: create.php?descriptionInput&error=$message&title=$title");
}
elseif(empty($price)){
    $message="Price is Required!";
    header("location: create.php?priceInput&error=$message&title=$title&description=$description");
}
elseif(!isset($category) && empty($category)){
    header('location: create.php');
}






print_pre($_POST);
print_pre($_FILES);