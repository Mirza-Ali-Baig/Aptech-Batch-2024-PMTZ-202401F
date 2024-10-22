# 🛍️ Project: Products CRUD

## 📚 Overview
The Products CRUD application is designed to facilitate the management of product listings in an online store. Users can add new products, view existing products, and manage their details—all through a user-friendly web interface. This project showcases fundamental web development skills, including database interactions, file uploads, and data validation using PHP and MySQL.

## 📁 Files
- **`assets/css/style.css`**: Contains all styles for the web application, ensuring a responsive and visually appealing user interface.
- **`assets/uploads/`**: Directory where uploaded product images are stored. Proper permissions must be set to allow file uploads.
- **`config/connection.php`**: Establishes the database connection parameters. This file is essential for all database operations throughout the application.
- **`config/products.sql`**: SQL script to create the necessary tables (`categories` and `products`) and to insert initial category data for the application.
- **`utils/functions.php`**: A collection of utility functions that streamline database queries and operations, such as fetching products and categories.
- **`index.php`**: The main page that displays all products in the database, allowing users to view and manage their listings.
- **`create.php`**: A form page for adding new products. It includes inputs for product details and image uploads.
- **`create-process.php`**: Processes the form submission from `create.php`, performing validation and inserting the new product into the database.

## 🚀 Getting Started
To set up the project locally and start using the Products CRUD application, follow the detailed instructions below.

## 📋 Prerequisites
Before you begin, ensure you have the following installed:
- **PHP**: Version 7.0 or higher is required for compatibility with the latest features and security updates.
- **MySQL**: A MySQL server to store and manage your database.
- **Local Server Environment**: Use XAMPP, WAMP, or MAMP to create a local server environment for running PHP scripts.

## ⚙️ Setup Instructions
1. **Clone the Repository**: 
   Download or clone the project files into your local server's document root directory (e.g., `C:\xampp\htdocs\products-crud`).

2. **Create Database**:
   - Open your MySQL database management tool (e.g., phpMyAdmin).
   - Create a new database named `pmtz_202401f`.

3. **Run SQL Script**:
   - Execute the SQL commands in `config/products.sql` to create the necessary tables and insert initial category data:
     ```sql
     CREATE TABLE IF NOT EXISTS categories (
         id INT PRIMARY KEY AUTO_INCREMENT,
         name VARCHAR(30) NOT NULL
     );

     INSERT INTO categories (name) VALUES
     ('Electronics'),
     ('Clothing'),
     ('Home & Kitchen'),
     ('Books'),
     ('Beauty & Personal Care'),
     ('Sports & Outdoors'),
     ('Toys & Games'),
     ('Automotive'),
     ('Health & Wellness'),
     ('Jewelry & Accessories');

     CREATE TABLE IF NOT EXISTS products (
         id INT PRIMARY KEY AUTO_INCREMENT,
         title VARCHAR(100) NOT NULL,
         description TEXT NOT NULL,
         price INT NOT NULL,
         image VARCHAR(300) NOT NULL,
         category_id INT,
         FOREIGN KEY (category_id) REFERENCES categories (id)
     );
     ```

4. **Update Configuration**:
   - Open `config/connection.php` and verify the database connection parameters:
     ```php
     <?php
     $host = "localhost";
     $user = "root"; // Update if necessary
     $pass = ""; // Update if necessary
     $db = 'pmtz_202401f';

     $db_connection = mysqli_connect($host, $user, $pass, $db);

     if (!$db_connection) {
         die("Connection failed: " . mysqli_connect_error());
     }
     ?>
     ```

5. **Access the Application**:
   - Start your local server (Apache and MySQL).
   - Open your web browser and navigate to `http://localhost/products-crud/index.php` to view all products.

## 🗂️ Project Structure

| Directory/File                  | Description                                           |
|---------------------------------|-------------------------------------------------------|
| `assets/css/style.css`          | Stylesheet that defines the layout and design of the application. |
| `assets/uploads/`               | Directory to store uploaded product images. Ensure proper permissions are set for uploads. |
| `config/connection.php`         | Contains the database connection logic, essential for all database interactions. |
| `config/products.sql`           | SQL script that initializes the database with necessary tables and categories. |
| `utils/functions.php`           | Collection of helper functions for database operations, such as fetching products and categories. |
| `index.php`                     | Main interface for viewing all products, offers options for editing and deleting listings. |
| `create.php`                    | Form for entering new product details and uploading images. |
| `create-process.php`            | Handles form submissions, validates input data, and inserts new products into the database. |

## 💻 Code Snippets

### config/products.sql
This SQL script sets up the database tables and initial categories.
```sql
CREATE TABLE IF NOT EXISTS categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL
);

INSERT INTO categories (name) VALUES
('Electronics'),
('Clothing'),
('Home & Kitchen'),
('Books'),
('Beauty & Personal Care'),
('Sports & Outdoors'),
('Toys & Games'),
('Automotive'),
('Health & Wellness'),
('Jewelry & Accessories');

CREATE TABLE IF NOT EXISTS products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    price INT NOT NULL,
    image VARCHAR(300) NOT NULL,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories (id)
);
```

### index.php
Displays all products with options to edit or delete.
```php
<?php
require_once "utils/functions.php";

$products = getAllProducts();
if ($products != false) {
    foreach ($products as $product) {
        echo '<div class="productCard">
                <img src="https://cdn.pixabay.com/photo/2022/12/01/04/43/girl-7628308_640.jpg" alt="">
                <div class="info">
                    <h3 class="title">' . htmlspecialchars($product['title']) . '</h3>
                    <div class="quantity">' . htmlspecialchars($product['description']) . '</div>
                    <div class="price">RS: ' . htmlspecialchars($product['price']) . '</div>
                    <div class="price">Category: ' . htmlspecialchars($product['category']) . '</div>
                    <div class="action">
                        <a href="edit.php?id=' . $product['id'] . '" class="edit">Edit</a>
                        <a href="delete.php?id=' . $product['id'] . '" class="delete">Delete</a>
                    </div>
                </div>
            </div>';
    }
} else {
    echo "<h1>No Products Found</h1>";
}
?>
```

### create.php
Form for adding new products.
```php
<form action="create-process.php" method="post" enctype="multipart/form-data">
    <div class="input-group">
        <input type="text" name="title" placeholder="Enter Product Title" required>
    </div>
    <div class="input-group">
        <textarea name="description" placeholder="Enter Product Description" required></textarea>
    </div>
    <div class="input-group">
        <input type="number" name="price" placeholder="Enter Product Price" required>
    </div>
    <div class="input-group">
        <input type="file" name="image" accept="image/*" required>
    </div>
    <div class="input-group">
        <select name="category" required><?php getAllCategories(); ?></select>
    </div>
    <button type="submit">Submit</button>
</form>
```

### create-process.php
Handles the submission of the product form.
```php
<?php
require_once "utils/functions.php";

// Sanitize input
$title = htmlspecialchars($_POST['title']);
$description = htmlspecialchars($_POST['description']);
$price = htmlspecialchars($_POST['price']);
$category = htmlspecialchars($_POST['category']);

// Validate input
if (empty($title)) {
    header("location: create.php?error=Title is Required!");
    exit();
}

if (empty($description)) {
    header("location: create.php?error=Description is Required!");
    exit();
}

if (empty($price)) {
    header("location: create.php?error=Price is Required!");
    exit();
}

if (empty($category)) {
    header("location: create.php?error=Category is Required!");
    exit();
}

// Handle image upload
$image_name = $_FILES['image']['name'];
$image_tmp_name = $_FILES['image']['tmp_name'];
$image_size = $_FILES['image']['size'];
$image_type = $_FILES['image']['type'];
$image_ext = pathinfo($image_name, PATHINFO_EXTENSION);

$allowed_images = ['png', 'jpg', 'jpeg', 'gif', 'webp'];

if (!in_array($image_ext, $allowed_images)) {
    header("location: create.php?error=File Type Not Allowed!");
    exit();
}

$image_name = 'img_' . uniqid() . ".$image_ext";
move_uploaded_file($image_tmp_name, "assets/uploads/$image_name");

if (addProducts($title, $description, $price, $image_name, $category)) {
    header('location: index.php');
} else {
    echo "Error adding product.";
}
?>
```

## 🏆 Key Learnings
- **CRUD Operations**: Understanding how to implement create, read, update, and delete operations in a web application.
- **Data Validation**: Learning the importance of validating user input to prevent errors and security issues.
- **File Handling in PHP**: Gaining experience in handling file uploads securely.
- **SQL Basics**: Learning how to interact with a MySQL database using SQL commands.

## 🌟 Class Highlights
- **Hands-on Experience**: Practical application of web development concepts through a real-world project.
- **User Interface Design**: Understanding how to create a user-friendly interface for managing products.
- **Modular Programming**: Utilizing functions to keep the code organized and maintainable.

## 📝 Conclusion
The Products CRUD application is a comprehensive project that provides valuable insights into web development, database management, and user interaction. By implementing this project, you will gain a solid understanding of the technologies involved and be better equipped for future web development challenges.