<?php
require_once "utils/functions.php";



$title=htmlspecialchars($_POST['title']);
$description=htmlspecialchars($_POST['description']);
$price=htmlspecialchars($_POST['price']);
$category=htmlspecialchars($_POST['category']);

if(empty($title)){
    $message="Title is Required!";
    header("location: create.php?titleInput&error=$message");
    exit();
}
elseif(empty($description)){
    $message="Description is Required!";
    header("location: create.php?descriptionInput&error=$message&title=$title");
    exit();
}
elseif(empty($price)){
    $message="Price is Required!";
    header("location: create.php?priceInput&error=$message&title=$title&description=$description");
    exit();
}
elseif(!isset($category) && empty($category)){
    $message="Category is Required!";
    header("location: create.php?categoryInput&error=$message&title=$title&description=$description&price=$price");
    exit();
}

$image_name=$_FILES['image']['name'];
$image_tmp_name=$_FILES['image']['tmp_name'];
$image_size=$_FILES['image']['size'];
$image_type=$_FILES['image']['type'];
$image_ext=explode('/',$image_type)[1];

if(empty($image_name)){
    $message="Image is Required!";
    header("location: create.php?imageInput&error=$message&title=$title&description=$description&price=$price");
    exit();
}


$allowed_images=['image/png','image/jpeg','image/jpg','image/gif','image/webp','image/svg'];

if(!in_array($image_type,$allowed_images)){
    $message="File Type No Allowed!";
    header("location: create.php?imageInput&error=$message&title=$title&description=$description&price=$price");
    exit();
}

// if($image_size > (1024 *2)){
//     $message="Image Must be Lower Then 2MB";
//     header("location: create.php?imageInput&error=$message&title=$title&description=$description&price=$price");
// }



// $script='<script>alert("Hello")</script>';

// echo htmlspecialchars($script);

$image_name='img_'.uniqid().".$image_ext";
// echo rand(10,100000000000);
// echo uniqid();
echo $image_name;


move_uploaded_file($image_tmp_name,"assets/uploads/$image_name");

if(addProduct($title,$description,$price,$image_name,$category)){
    header('location: index.php');
}else{
    echo "Error";
}

// print_pre($image_ext);
// print_pre($_POST);
// print_pre($_FILES);
