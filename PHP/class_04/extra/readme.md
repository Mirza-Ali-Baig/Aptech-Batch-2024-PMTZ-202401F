# PHP Course: File Uploading in PHP

This project is part of a PHP course, demonstrating the use of the `$_FILES` superglobal to handle file uploads. Users can upload files from their local device to the server, and the uploaded files will be stored in the specified directory on the server.

## Features

- **File Upload**: Users can upload images (or other files) from a form.
- **Server-side Handling**: The server processes the file and moves it to a designated directory.
- **File Validation (Basic)**: This example covers basic file handling without validation, but it can be extended for more complex file validations such as file type, size limits, etc.

## Project Structure

- **index.php**: The file upload form where users can select a file from their device and submit it.
- **action.php**: The PHP script that processes the file upload and moves the file to the server's `uploads` directory.

## How the System Works

### 1. **File Upload Form (`index.php`)**: 
   This form allows the user to select a file and submit it. It uses `enctype="multipart/form-data"` to properly handle file uploads via POST.

   ```html
   <form action="action.php" method="post" enctype="multipart/form-data">
       <input type="file" name="image">
       <button>Submit</button>
   </form>
   ```

   The `enctype` attribute is crucial for file uploads. It ensures that the file is sent to the server as binary data instead of text data, allowing for the correct processing of the file.

### 2. **File Handling in PHP (`action.php`)**: 
   In `action.php`, the uploaded file is accessed using the `$_FILES` superglobal. The file's temporary location on the server is fetched from `$_FILES['image']['tmp_name']`, and its original name is retrieved from `$_FILES['image']['name']`. The file is then moved from the temporary directory to the `uploads` folder.

   ```php
   <?php
   $name = $_FILES['image']['name'];
   $tmp_name = $_FILES['image']['tmp_name'];

   // Move the uploaded file to the 'uploads' directory
   move_uploaded_file($tmp_name, "uploads/" . $name);

   // Redirect back to the form after uploading
   header('location: index.php');
   ?>
   ```

   - **move_uploaded_file()**: This function is used to move the file from its temporary location to the designated uploads folder. In this case, the uploaded file is saved inside the `uploads` directory with its original name.

   - After the file is uploaded, the user is redirected back to the `index.php` page.

## Advanced Topics (Later Covered)

- **File Validation**: You can extend this project by adding file type validation (e.g., only allowing image files like `.jpg`, `.png`), size restrictions, or handling error messages.
  
   Example for file type validation:

   ```php
   $allowed_types = array('jpg', 'jpeg', 'png');
   $file_ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
   
   if (in_array($file_ext, $allowed_types)) {
       move_uploaded_file($tmp_name, "uploads/" . $name);
   } else {
       echo "Invalid file type!";
   }
   ```

- **File Overwriting Prevention**: You can modify the script to prevent file overwriting by renaming files with the same name or generating unique file names.

   Example for renaming:

   ```php
   $unique_name = uniqid() . '-' . $name;
   move_uploaded_file($tmp_name, "uploads/" . $unique_name);
   ```

## Security Considerations

- **Sanitize File Names**: Ensure that file names are sanitized to prevent malicious input. This includes removing special characters or limiting file names to alphanumeric characters.

- **Server Permissions**: Make sure that the `uploads` directory has the correct write permissions to allow file uploads, but avoid giving it excessive permissions (e.g., 777), as this can be a security risk.

## Conclusion

In conclusion, this PHP project demonstrates the fundamental concepts of file uploading in PHP, utilizing the `$_FILES` superglobal to handle file uploads securely and efficiently. By understanding how to process and validate file uploads, developers can create robust web applications that interact with user-uploaded files. This project serves as a foundation for more advanced file handling techniques, such as file type validation, size restrictions, and preventing file overwriting. By following best practices for security and server permissions, developers can ensure a safe and reliable file uploading system.