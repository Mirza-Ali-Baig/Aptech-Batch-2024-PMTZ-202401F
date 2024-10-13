# PHP Course: Introduction to Database in PHP

This project demonstrates how to connect to a MySQL database using PHP. It covers three primary methods of database connection:

1. **Procedural Way**
2. **OOPs Way**
3. **PDO Way**

In this specific example, we use the procedural approach to connect to the database and create a simple table.

## Features

- **Database Connection**: Connect to a MySQL database using the procedural approach with the `mysqli_connect()` function.
- **Table Creation**: Create a `students` table in the database with columns for `id`, `name`, `email`, and `age`.

## Project Structure

- **index.php**: The main file that establishes a connection to the database and creates the table if it does not already exist.

## How It Works

### 1. **Database Connection (`index.php`)**:

   The connection to the MySQL database is established using the `mysqli_connect()` function. This function 
   requires the following parameters:

- **Hostname**: The database server (usually `localhost` for local development).
- **Username**: The MySQL username (e.g., `root` for local servers).
- **Password**: The MySQL password (empty for default local setups).
- **Database Name**: The name of the database to connect to.

   Example connection code:

   ```php
   <?php
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $db = 'pmtz_202401f';

   $connection = mysqli_connect($host, $user, $pass, $db);

   if ($connection) {
       echo "Connection Successful";
   } else {
       echo "Something went wrong";
   }
   ?>
   ```

### 2. **Creating the `students` Table**:

   After establishing the connection, the script executes a SQL query to create the `students` table. The table includes the following columns:

- `id`: An integer that auto-increments and serves as the primary key.

- `name`: A `VARCHAR` field for the student's name (maximum length of 30 characters).
- `email`: A `VARCHAR` field for the student's email (maximum length of 30 characters).
- `age`: An integer representing the student's age.

   The table is only created if it does not already exist, ensuring the script can be run multiple times without recreating the table.

   Example table creation code:

   ```php
   $sql = "
   CREATE TABLE IF NOT EXISTS students (
       id INT PRIMARY KEY AUTO_INCREMENT,
       name VARCHAR(30) NOT NULL,
       email VARCHAR(30) NOT NULL,
       age INT NOT NULL
   );
   ";

   $result = mysqli_query($connection, $sql);

   if ($result) {
       echo "Table created successfully";
   } else {
       echo mysqli_error($connection);
   }
   ```

### 3. **Error Handling**:

   The script checks if the connection to the database was successful and whether the SQL query executed without issues. If there’s an error, it prints the error message using `mysqli_error()`.

## Advanced Topics (Later Coverd)

- **OOPs Way**: You can also connect to a MySQL database using the OOP approach by creating an instance of the `mysqli` class:

   ```php
   $connection = new mysqli($host, $user, $pass, $db);

   if ($connection->connect_error) {
       die("Connection failed: " . $connection->connect_error);
   }
   ```

- **PDO Way**: PHP Data Objects (PDO) provide a more secure and flexible method for connecting to databases:

   ```php
   try {
       $connection = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
       $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       echo "Connected successfully";
   } catch (PDOException $e) {
       echo "Connection failed: " . $e->getMessage();
   }
   ```

## Conclusion

In conclusion, this project demonstrates the fundamental steps of connecting to a MySQL database using PHP's procedural approach and creating a simple table. The code examples provided cover database connection, table creation, and basic error handling. Additionally, brief introductions to the OOPs and PDO methods are included for further exploration. By following this guide, developers can establish a solid foundation for interacting with MySQL databases in their PHP applications.