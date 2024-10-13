<?php
session_start();
$name="Guest";
$email='';
if(isset($_SESSION['name']) && isset($_SESSION['email'])){
    $name=$_SESSION['name'];
    $email=$_SESSION['email'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Hello <?php  echo isset($_SESSION['name']) ?  $_SESSION['name']  : "Guest" ?></h1>
    <h1>Email :  <?php  echo isset($_SESSION['email']) ?  $_SESSION['email']  : "" ?></h1> -->

    <h1>Hello <?php  echo $name ?></h1>
    <h1>Email :  <?php  echo $email ?></h1>
    <?php
    if($name!=="Guest"){
        echo '<a href="logout.php">Logout</a>';
    }
    ?>
    
</body>
</html>