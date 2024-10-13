# PHP Course

## Introduction to Super Global Variables

This project demonstrates the use of PHP Super Global Variables (`$_GET`, `$_POST`, `$_SERVER`, `$_REQUEST`, `$_SESSION`, `$_FILES`) through a basic HTML form that collects user information (name, email, age, and city) and processes it via different request methods.

## Features

- **Super Global Variables in PHP**:
  - `$_GET`: Retrieves data sent via HTTP GET method.
  - `$_POST`: Retrieves data sent via HTTP POST method.
  - `$_SERVER`: Contains information about the server environment.
  - `$_REQUEST`: Accesses both GET and POST request data.
  - `$_SESSION`: Stores session variables across multiple pages (not demonstrated in the code, but commonly used).
  - `$_FILES`: Handles file uploads (not demonstrated in this example).
  
- **HTML Form**: A simple form is used to collect user data, which is submitted using the `GET` method.

## Usage

1. Clone or download this repository.
2. Open `index.html` in your web browser or deploy it on a local server with PHP support.
3. Enter your information (name, email, age, and city) in the form and click **Submit**.
4. Upon submission, the data will be processed and displayed via PHP using the `$_GET` or `$_POST` methods (depending on the code section you uncomment).

### Code Overview

- **HTML Form**: Collects user data with the `GET` method.

```html
<form action="action.php" method="get">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="number" name="age" placeholder="Age" required>
    <input type="text" name="city" placeholder="City" required>
    <button>Submit</button>
</form>
```

- **PHP Code**: Processes the form data using different super global variables.
  
```php
// To handle GET requests:
$name = $_GET['name'];
$age = $_GET['age'];
$email = $_GET['email'];
$city = $_GET['city'];

echo "Student Name: $name <br>";
echo "Student Age: $age <br>";
echo "Student Email: $email <br>";
echo "Student City: $city <br>";
```

Uncomment the relevant sections in the PHP code to handle different request types (`$_GET`, `$_POST`, `$_REQUEST`).

## Conclusion

In conclusion, this project has demonstrated the use of PHP Super Global Variables to process and display user data collected through an HTML form. The code has shown how to handle different request methods (`$_GET`, `$_POST`, `$_REQUEST`) and access server environment information (`$_SERVER`). By understanding and utilizing these super global variables, developers can create more dynamic and interactive web applications.