<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Create Products : Add New Products</title>
</head>

<body>
    <main>
        <div class="popup-container">
            <?php
            require_once "utils/functions.php";
            ?>
            <form action="create-process.php" method="post" enctype="multipart/form-data">
                <div class="input-group">
                    <input type="text" value="<?php echo isset($_GET['title']) ? $_GET['title'] : "" ?>" name="title" id="title" placeholder="Enter Product Title">
                </div>
                <span class="errors">
                    <?php echo isset($_GET['titleInput']) ? $_GET['error'] : "" ?>
                </span>

                <div class="input-group">
                    <textarea name="description" rows="3" placeholder="Enter Product Description" id="">
                    <?php echo isset($_GET['description']) ? $_GET['description'] : "" ?>
                    </textarea>
                </div>
                
                <span class="errors"><?php echo isset($_GET['descriptionInput']) ? $_GET['error'] : "" ?></span>

                <div class="input-group">
                    <input type="text" name="price" id="price" placeholder="Enter Product Price">
                </div>
                <span class="errors"><?php echo isset($_GET['priceInput']) ? $_GET['error'] : "" ?></span>
                <div class="input-group">
                    <input type="file" name="image" id="image" placeholder="Select Image">
                </div>
                <div class="input-group">
                    <select name="category" id="">
                        <?php
                        getAllCategories();
                        ?>
                    </select>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </main>
</body>

</html>