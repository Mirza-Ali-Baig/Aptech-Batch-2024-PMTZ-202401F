<?php

// Function With Return

function message():void
{
    // return "Hello World";
    echo "Hello World";
}

// message();
// $fun= message();

// echo $fun;

function divide($num1,$num2):float
{
    return $num1 / $num2;
}

// echo divide(num2:3,num1:40);


// Array in PHP
// Indexed arrays, associative arrays, multidimensional arrays



echo "<br>====================================== Array ======================= <br>";
$numbers=[10,20,30,40,50,60,70,80,90];

// print_r($numbers);

//  Get Specefic Index Value

// echo $numbers[3];


// For Loop

for($i=0;$i < count($numbers);$i++){
    // echo $numbers[$i]."\n";
}


// associative arrays

// IN JS
//  let student={
//     key:"value"
//  }

$student=[
    // "key"=>"value",
    'id'=>1,
    'name'=>"Rizwan",
    'age'=>12,
    'class'=>"6th",
    'email'=>'rizwan@gmail.com'
];


// print_r($student);

foreach($student as $key => $value){
    echo $key, $value."\n";
}

//  Get Specefic Key Value

// echo $student['name'];




// Array Methods

// push

// array_push($numbers,100);

// print_r($numbers);


?>