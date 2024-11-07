<?php
require_once '../config/Student.php';
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$course=$_POST['course'];

$db->updateStudent($id,$name,$email,$phone,$course);