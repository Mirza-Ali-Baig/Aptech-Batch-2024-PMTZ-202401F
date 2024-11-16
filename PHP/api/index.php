<?php
require_once 'Config/Student.php';

header('Access-Control-Allow-Origin:*');
header("Access-Control-Allow-Headers: *");

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

$url=$_SERVER['REQUEST_URI'];
$method=$_SERVER['REQUEST_METHOD'];


// Get all Students
if($url  =='/students' && $method=="GET"){
    echo $db->getAllStudents();
}
// Insert In Students
else if($url  =='/students' && $method=="POST"){
    $data=json_decode(file_get_contents("php://input"),true);
    echo $db->addStudent($data['name'],$data['email'],$data['phone'],$data['course']);
}
// Get Single Student Based on Id
else if(preg_match("/\/students\/[0-9]+/",$url) && $method=="GET"){
    $id=explode('/',$url)[2];
    echo $db->getStudent($id);
}
// Update Student Based on Id
else if(preg_match("/\/students\/[0-9]+/",$url) && $method=="PUT"){
    $data=json_decode(file_get_contents("php://input"));
    $id=explode('/',$url)[2];
    echo $db->updateStudent($id,$data->name,$data->email,$data->phone,$data->course);
}
// Delete Student Based on Id
else if(preg_match("/\/students\/[0-9]+/",$url) && $method=="DELETE"){
    $id=explode('/',$url)[2];
    echo $db->deleteStudent($id);
}
// Get all courses
if($url  =='/courses' && $method=="GET"){
    echo $db->getAllcourses();
}
// Insert In courses
else if($url  =='/courses' && $method=="POST"){
    $data=json_decode(file_get_contents("php://input"),true);
    echo $db->addCourse($data['name'],);
}
// Get Single Student Based on Id
else if(preg_match("/\/courses\/[0-9]+/",$url) && $method=="GET"){
    $id=explode('/',$url)[2];
    echo $db->getCourse($id);
}
// Update Student Based on Id
else if(preg_match("/\/courses\/[0-9]+/",$url) && $method=="PUT"){
    $data=json_decode(file_get_contents("php://input"));
    $id=explode('/',$url)[2];
    echo $db->updateCourse($id,$data->name);
}
// Delete Student Based on Id
else if(preg_match("/\/courses\/[0-9]+/",$url) && $method=="DELETE"){
    $id=explode('/',$url)[2];
    echo $db->deleteCourse($id);
}
else if(preg_match("/\/courses\/search=[A-Z-a-z]+/",$url) && $method=="GET"){
    $search=explode('=',$url)[1];
    echo $db->searchCourses($search);
}