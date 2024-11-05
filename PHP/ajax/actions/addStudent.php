<?php
require_once '../config/Student.php';

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$course=$_POST['course'];


echo $courses=$db->addStudent($name,$email,$phone,$course);
