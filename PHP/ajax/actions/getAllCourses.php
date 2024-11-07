<?php
require_once '../config/Student.php';
$id=$_POST['id'] ?? null;

$courses=$db->getAllCourses();

$optionHtml= $id==null ?'<option value="" selected disabled>Select Course</option>' : '';

foreach($courses as $course){
    if($id==$course['id']){
        $optionHtml.="<option value='$course[id]' selected>$course[name]</option>";
    }else{
        $optionHtml.="<option value='$course[id]'>$course[name]</option>";
    }
}

echo $optionHtml;