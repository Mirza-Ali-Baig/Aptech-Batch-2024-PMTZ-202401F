<?php
session_start();
$_SESSION['name']=$_POST['name'];
$_SESSION['email']=$_POST['email'];

// Javascript
// echo '<script>
//         window.location.href="home.php";
//      </script>';

// PHP 

header('location: home.php');

?>




