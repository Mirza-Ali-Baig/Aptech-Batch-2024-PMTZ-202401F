<?php
require_once "config/connection.php";

function print_pre($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}


function getAllCategories($id = null)
{
    global $db_connection;
    $sql = "SELECT * FROM categories;";

    $result = mysqli_query($db_connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $option = $id==null ? ' <option value="" disabled selected>Select Category</option>' : '';
        foreach ($categories as $category) {
            if($id==$category['id']){
                $option .= '<option selected value="' . $category['id'] . '">' . $category['name'] . '</option>';
            }else{
                $option .= '<option value="' . $category['id'] . '">' . $category['name'] . '</option>';
            }
        }
        echo $option;
    }
}

function getAllProducts()
{
    global $db_connection;
    $sql = "SELECT p.*,c.name as category FROM products p join categories c on p.category_id=c.id;";

    $result = mysqli_query($db_connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }else{
        return false;
    }
}
function getSingleProduct($id)
{
    global $db_connection;
    $sql = "SELECT p.*,c.name as category FROM products p join categories c on p.category_id=c.id where p.id=$id;";

    $result = mysqli_query($db_connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_array($result, MYSQLI_ASSOC);
    }else{
        return false;
    }
}
function addProduct($title, $desc, $price, $image, $category_id)
{
    global $db_connection;
    $title=mysqli_real_escape_string($db_connection,$title);
    $desc=mysqli_real_escape_string($db_connection,$desc);
    $price=mysqli_real_escape_string($db_connection,$price);
    $category_id=mysqli_real_escape_string($db_connection,$category_id);
    $sql = "INSERT INTO `products`(`title`, `description`, `price`, `image`, `category_id`) VALUES ('$title','$desc',$price,'$image',$category_id)";

    $result = mysqli_query($db_connection, $sql);

    if ($result) {
        return true;
        // echo "<h1>Product Added Successfully</h1>";
    } else {
        return false;
    }
}
function updateProduct($id,$title, $desc, $price, $image, $category_id)
{
    global $db_connection;
    $title=mysqli_real_escape_string($db_connection,$title);
    $desc=mysqli_real_escape_string($db_connection,$desc);
    $price=mysqli_real_escape_string($db_connection,$price);
    $category_id=mysqli_real_escape_string($db_connection,$category_id);
    $sql = "update products set title='$title',description='$desc',price=$price,image='$image',category_id=$category_id where id=$id";

    $result = mysqli_query($db_connection, $sql);

    if ($result) {
        return true;
    } else {
        return false;
    }
}
function deleteProduct($id)
{
    global $db_connection;
    $sql = "delete from products where id=$id";

    $result = mysqli_query($db_connection, $sql);

    if ($result) {
        return true;
    } else {
        return false;
    }
}
