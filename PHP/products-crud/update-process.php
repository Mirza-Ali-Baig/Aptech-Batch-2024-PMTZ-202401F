<?php
require_once "utils/functions.php";

print_pre($_POST);
print_pre($_FILES);

$id=htmlspecialchars($_POST['id']);
$old_image=htmlspecialchars($_POST['old_image']);
$title=htmlspecialchars($_POST['title']);
$description=htmlspecialchars($_POST['description']);
$price=htmlspecialchars($_POST['price']);
$category=htmlspecialchars($_POST['category']);

if(empty($title)){
    $message="Title is Required!";
    header("location: edit.php?titleInput&error=$message&id=$id");
    exit();
}
elseif(empty($description)){
    $message="Description is Required!";
    header("location: edit.php?descriptionInput&error=$message&title=$title");
    exit();
}
elseif(empty($price)){
    $message="Price is Required!";
    header("location: edit.php?priceInput&error=$message&title=$title&description=$description");
    exit();
}
elseif(!isset($category) && empty($category)){
    $message="Category is Required!";
    header("location: edit.php?categoryInput&error=$message&title=$title&description=$description&price=$price");
    exit();
}

$image='';
$image_name=$_FILES['new_image']['name'];
$image_tmp_name=$_FILES['new_image']['tmp_name'];
$image_size=$_FILES['new_image']['size'];
$image_type=$_FILES['new_image']['type'];
$image_ext= empty($image_type) ? '':explode('/',$image_type)[1];

$allowed_images=['image/png','image/jpeg','image/jpg','image/gif','image/webp','image/svg'];

if(!empty($image_name) && !in_array($image_type,$allowed_images)){
    $message="File Type No Allowed!";
    header("location: edit.php?imageInput&error=$message&title=$title&description=$description&price=$price&id=$id");
    exit();
}

if(empty($image_name)){
    $image=$old_image;
}else{
    $image='img_'.uniqid().".$image_ext";
    move_uploaded_file($image_tmp_name,"assets/uploads/$image");
}

if(updateProduct($id,$title,$description,$price,$image,$category)){
    unlink("assets/uploads/$old_image");
    header('location: index.php');
    exit();
}else{
    echo "Something Went Wrong!!";
}

// // if($image_size > (1024 *2)){
// //     $message="Image Must be Lower Then 2MB";
// //     header("location: create.php?imageInput&error=$message&title=$title&description=$description&price=$price");
// // }

