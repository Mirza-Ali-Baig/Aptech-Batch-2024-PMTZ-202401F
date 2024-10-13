# PHP Course: Login System with Sessions

This project is part of a PHP course that demonstrates the use of **PHP Sessions** to implement a simple login system. Users can log in by providing their name, email, and password. Upon successful login, the user's session is stored and maintained across multiple pages until they log out.

## Features

- **User Authentication**: Users can log in via a form, and their name and email are stored in PHP sessions.
- **Session Management**: After logging in, users’ sessions are maintained across different pages. If a session is not set, the user is redirected to the login page.
- **Logout Functionality**: Users can log out, which destroys the session and redirects them back to the login page.
- **Session Validation**: Protected pages check for session existence, ensuring that unauthorized access is prevented.

## Project Structure

- **index.php**: The login form where users enter their credentials.
- **action.php**: Processes the login form and creates the user session.
- **home.php**: A home page that greets the user by name if logged in; otherwise, it defaults to "Guest".
- **dashboard.php**: A protected page that only allows access if the user is logged in.
- **logout.php**: Ends the session and redirects the user back to the login page.

## How the System Works

1. **Login Form (`index.php`)**: 
   The login form collects the user’s name, email, and password. When the form is submitted, it sends a `POST` request to `action.php` to handle authentication.

   ```html
   <form action="action.php" method="post">
       <div>
           <input type="name" name="name" placeholder="Enter Your Name">
       </div>
       <div>
           <input type="email" name="email" placeholder="Enter Your Email">
       </div>
       <div>
           <input type="password" name="password" placeholder="Enter Your Password">
       </div>
       <button>Login</button>
   </form>
   ```

2. **Session Handling (`action.php`)**: 
   Once the form is submitted, the user’s name and email are stored in PHP sessions. After storing the session, the user is redirected to `home.php`.

   ```php
   <?php
   session_start();
   $_SESSION['name'] = $_POST['name'];
   $_SESSION['email'] = $_POST['email'];

   header('location: home.php');
   ?>
   ```

3. **Home Page (`home.php`)**: 
   This page greets the user using their session data. If the user is not logged in, it defaults to displaying "Guest". If the user is logged in, a "Logout" link is shown to end the session.

   ```php
   <?php
   session_start();
   $name = isset($_SESSION['name']) ? $_SESSION['name'] : "Guest";
   $email = isset($_SESSION['email']) ? $_SESSION['email'] : "";
   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Home Page</title>
   </head>
   <body>
       <h1>Hello, <?php echo $name; ?></h1>
       <h1>Email: <?php echo $email; ?></h1>

       <?php if ($name !== "Guest"): ?>
           <a href="logout.php">Logout</a>
       <?php endif; ?>
   </body>
   </html>
   ```

4. **Protected Page (`dashboard.php`)**: 
   This page ensures that only logged-in users can access it. If the session is not set, it redirects the user back to the login page (`index.php`).

   ```php
   <?php
   session_start();
   if (!isset($_SESSION['name']) || !isset($_SESSION['email'])) {
       header('location: index.php');
   }
   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Dashboard</title>
   </head>
   <body>
       <h1>Dashboard</h1>
   </body>
   </html>
   ```

5. **Logout Functionality (`logout.php`)**: 
   This page destroys the session and redirects the user back to the login page.

   ```php
   <?php
   session_start();
   session_destroy();
   header('location: index.php');
   ?>
   ```
   
## Conclusion

In conclusion, this PHP course project demonstrates a simple yet effective login system using PHP sessions. The system allows users to log in, maintains their session across multiple pages, and provides a logout functionality. The project structure is well-organized, making it easy to understand and implement. The use of PHP sessions ensures that user data is stored securely and efficiently. Overall, this project provides a solid foundation for building more complex login systems and demonstrates the power of PHP sessions in managing user authentication.