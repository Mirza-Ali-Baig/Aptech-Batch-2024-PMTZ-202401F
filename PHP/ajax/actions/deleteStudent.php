<?php
require_once '../config/Student.php';
$id=$_POST['id'];

$courses=$db->deleteStudent($id);