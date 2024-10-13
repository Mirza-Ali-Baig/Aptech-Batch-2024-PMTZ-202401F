# PHP Course

## PHP CRUD Application

This is a basic PHP CRUD (Create, Read, Update, Delete) application that uses MySQL to manage student records. It allows users to perform the following operations:

1. **Create**: Add a new student record.
2. **Read**: View the list of all students.
3. **Update**: Edit details of a student.
4. **Delete**: Remove a student record.

## Prerequisites

- PHP 7.x or higher
- MySQL 5.x or higher
- Apache Server (XAMPP, WAMP, MAMP, etc.)
- Web browser to test the application
- Basic knowledge of HTML, PHP, and MySQL

## Project Structure

```
.
├── add.php                # Form to add a new student
├── add-process.php        # Backend script to process the addition of a student
├── config/
│   └── connection.php     # Database connection configuration
├── index.php              # Displays all student records and provides CRUD actions
```

## Setup Instructions

### 1. Database Configuration

1. Create a MySQL database (you can use PhpMyAdmin or any MySQL tool).
   
   ```sql
   CREATE DATABASE pmtz_202401f;
   ```

2. Inside the `config/connection.php` file, make sure the connection variables match your MySQL credentials.
   ```php
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $db   = 'pmtz_202401f';
   ```

### 2. Table Creation

To create the `students` table automatically, this application runs an SQL query on page load in `index.php`:

```php
$sql = "
CREATE TABLE IF NOT EXISTS students(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    age INT NOT NULL
)";
mysqli_query($connection, $sql);
```

Alternatively, you can manually create the `students` table:
```sql
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50),
    age INT
);
```

### 3. Running the Application

1. Clone or download the repository.
2. Place the files inside your server's root directory (e.g., `htdocs` for XAMPP).
3. Navigate to the application URL in your browser:
   ```
   http://localhost/your-folder/index.php
   ```

### 4. Usage

1. **Add Student**: Click the "Add Student" button to add a new student record using the form.
2. **View Students**: All student records will be displayed on the home page (`index.php`).
3. **Edit/Delete**: Future implementation will include editing and deleting options for each student.

## Files Breakdown

### `index.php`
- Displays the list of students in a table format.
- Connects to the MySQL database and retrieves all student records.
- Provides buttons for adding new students and placeholders for editing and deleting.

### `add.php`
- Contains a form for adding new students.
- Submits data to `add-process.php` for handling the database insertion.

### `add-process.php`
- Receives the POST data from `add.php`.
- Inserts the new student record into the MySQL database.
- Redirects back to `index.php` after successful insertion.

### `config/connection.php`
- Contains the connection settings to the MySQL database.
- Should be included in every file that requires database interaction.

## Future Enhancements
- **Edit Functionality**: Implement the logic to edit student details.
- **Delete Functionality**: Add the ability to delete student records.
- **Validation**: Add form validation to improve data integrity.
