<?php
require_once '../config/Student.php';


$courses=$db->getAllCourses();

$optionHtml='<option value="" selected disabled>Select Course</option>';

foreach($courses as $course){
    $optionHtml.="<option value='$course[id]'>$course[name]</option>";
}

echo $optionHtml;