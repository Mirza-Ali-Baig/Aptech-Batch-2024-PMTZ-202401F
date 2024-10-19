<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products : Image Uploading</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <h1>All Products</h1>
    <a href="create.php" class="add_product_btn">Add new product</a>
    <div class="productContainer">
        <?php
        require_once "utils/functions.php";
        $products=getAllProducts();
        // print_pre($products);
        if($products!=false){
            foreach($products as $product){
                echo '<div class="productCard">
                        <img src="https://cdn.pixabay.com/photo/2022/12/01/04/43/girl-7628308_640.jpg" alt="">
                         <div class="info">
                            <h3 class="title">'.$product['title'].'</h3>
                            <div class="quantity">'.$product['description'].'</div>
                            <div class="price">RS: '.$product['price'].'</div>
                            <div class="price">Category: '.$product['category'].'</div>
                            <div class="action">
                                <a href="" class="edit">Edit</a>
                                <a href="" class=" delete">Delete</a>
                            </div>
                        </div>
                    </div>';
            }
        }else{
            echo "<h1> No Products Found</h1>";
        }
        ?>
        

    </div>
</body>

</html>