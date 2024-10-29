<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Authentication System : Home Page</title>
</head>
<body>
<?php
session_start();
require_once 'utils/functions.php';
require_once 'partials/nav.php';
?> 
<main>
    <div class="heading">

        <h1>
            Welcome to Authentication System
        </h1>
        <h2>
            Welcome
        </h2>
    </div>
    <?php
    require_once 'partials/login.php';
    require_once 'partials/signup.php';

    if(isset($_SESSION['user'])){
        echo '<script>
        Toastify({
  text: "You are logged in!",
  duration: 3000,
  close: true,
  gravity: "top", // `top` or `bottom`
  position: "right", // `left`, `center` or `right`
  style: {
    background: "linear-gradient(to right, #00b09b, #96c93d)",
  },
}).showToast();
        </script>';
    }
    ?>
</main>
<?php
require_once 'partials/footer.php';
?>
</body>
</html>