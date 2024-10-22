<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Create Products : Edit a Products</title>
</head>

<body>
    <main>
        <div class="popup-container">
            <?php
            require_once "utils/functions.php";
            $id=$_GET['id'];
            $product= getSingleProduct($id);
            ?>
            <form action="update-process.php" method="post" enctype="multipart/form-data">
                <input type="text" name="id" value="<?= $product['id']?>" hidden>
                <input type="text" name="old_image" value="<?= $product['image']?>" hidden>
                <div class="input-group">
                    <input type="text" value="<?php echo isset($_GET['title']) ? $_GET['title'] : $product['title'] ?>" name="title" id="title" placeholder="Enter Product Title">
                </div>
                <span class="errors">
                    <?php echo isset($_GET['titleInput']) ? $_GET['error'] : "" ?>
                </span>

                <div class="input-group">
                    <textarea name="description" rows="3" placeholder="Enter Product Description" id=""><?php echo isset($_GET['description']) ? $_GET['description'] : $product['description'] ?></textarea>
                </div>

                <span class="errors"><?php echo isset($_GET['descriptionInput']) ? $_GET['error'] : "" ?></span>

                <div class="input-group">
                    <input type="text" value="<?php echo isset($_GET['price']) ? $_GET['price'] : $product['price'] ?>" name="price" id="price" placeholder="Enter Product Price">
                </div>
                <span class="errors"><?php echo isset($_GET['priceInput']) ? $_GET['error'] : "" ?></span>
                <div class="input-group">
                    <input type="file" name="new_image" id="image" accept="image/*" placeholder="Select Image">
                    <img width="50" src="assets/uploads/<?= $product['image']?>" alt="">
                </div>
                <span class="errors"><?php echo isset($_GET['imageInput']) ? $_GET['error'] : "" ?></span>
                <div class="input-group">
                    <select name="category" id="">
                        <?php
                        getAllCategories($product['category_id']);
                        ?>
                    </select>
                </div>
                <span class="errors"><?php echo isset($_GET['categoryInput']) ? $_GET['error'] : "" ?></span>
                
                <button type="submit">Update</button>
            </form>
        </div>
    </main>
</body>

</html>