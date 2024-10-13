<?php
// Start of PHP

// How To Print anu Statement
// print
// echo

// print("Hello World 😊");
// echo "Hello Batch";

// Variables in PHP
// Normal Varibale
// Cosntant Variable

// Normal Varibale
$name = "Babar";


$name = "Aamir";
// print("Hello ",$name); 
// echo "Hello ",$name;

// Cosntant Variable
// const
// define

define("age", 30);

// echo age;

const salary = 200000.00;

// echo "My Salary is ",salary;


// Datatypes in PHP

// int
// string
// array
// float
// null
// bool
// object


// 3. Operators

// arithmetic
// assignment
// comparison
// logical
// string
// increment/decrement

// arithmetic
// + - * / %

// assignment
// = += -= *= /= %=

// comparison
// == === != !== > < >= <=

// logical
// && || !

// string
// .

// increment/decrement
// ++ --


// In JavaScript
// echo "Hello My name is "+ $name +" and I am "+ age +" year old and My Salary is "+ salary;
// echo `Hello My name is  ${name}  and I am ${age} year old and My Salary is ${salary}`;
// In PHP
// echo "Hello My name is ". $name ." and I am ". age ." year old and My Salary is ". salary;
// echo "Hello My name is $name and I am age year old and My Salary is salary";


// Check Datatype

// var_dump(salary);
// gettype($name);



// Conditions in PHP
// if
// elseif
// else
// switch
// Ternary operator

if (age >= 30) {
    echo "Age is grater then 30";
} elseif (age == 30) {
    echo "Age is equal to 30";
} else {
    echo "Age is less then 30";
}


$percenatge = 40;
$grade = '';
switch ($percenatge) {
    case $percenatge < 40:
        echo "Fail";
        break;
    case $percenatge <= 50;
        echo "D";
        break;
    default:
        echo "Pass";
}

$user="Admin";


// condition ? true Statement : false Statement

echo $user=="Admin" ? "Hello Admin" : "Hello User"; 


// Loops In PHP

// While
// do-while
// For
// forEach



// For
for($a=1;$a <= 10;$a++){
    echo "<h1> $a ) Inside For Loop </h1>";
}

// While
$b=30;

while($b > 0){
    echo "<h1> $b ) Inside While Loop </h1>";
    $b--;
}

// do-while

$c=50;

do{
    echo "<h1> $c :)(: Inside While Loop </h1>";
    $c++;
}
while($c < 100);


// break 
// continue
// goto

echo "<br> ===================================== Break ============================ <br>";
// break 

for($a=1;$a <= 10;$a++){
    if($a==5){
        break;
    }
    echo "<h1> $a ) Inside For Loop </h1>";
}

echo "<br> ===================================== Continue ============================ <br>";
// continue

for($a=1;$a <= 10;$a++){
    if($a==5){
        continue;
    }
    echo "<h1> $a ) Inside For Loop </h1>";
}

// goto

echo "<br> ===================================== goto ============================ <br>";

echo "Before Goto Loop";

for($a=1;$a <= 10;$a++){
    if($a==5){
        goto something;
    }
    echo "<h1> $a ) Inside For Loop </h1>";
}

echo "After Goto Loop";
echo "After Goto Loop";
echo "After Goto Loop";
echo "After Goto Loop";
echo "After Goto Loop";
echo "After Goto Loop";
echo "After Goto Loop";
echo "After Goto Loop";
echo "After Goto Loop";
echo "After Goto Loop";
echo "After Goto Loop";

something:





// forEach
// Indexed arrays, associative arrays, multidimensional arrays

$employees=array("Yasir","Ali","Khan");


// echo $employees we can not used echo for print array

// Print an Array
// echo "<pre>";
// print_r($employees);
// echo "</pre>";


foreach($employees as $employee){
    // echo "<h1>Inside ForEach Loop</h1>";
    echo "<ul>";
    echo "<li>Employee Name : $employee </li>"; 
    echo "</ul>"; 
}

// Functions in  PHP

// creating a function
function greeting(){
    echo "Hello Good Morning <br>";
}

// calling a function
greeting();


// Function with parameters

function add($num1,$num2){
    echo "$num1 + $num2 = ". $num1 + $num2;
}

add(30,40);

// Function with Default parameters
function sub($num1=20,$num2=20){
    echo "$num1 - $num2 = ". $num1 - $num2;
}

sub(30,40);
sub();

// Function with Rest parameter

function sum(...$numbers){
    $sum=0;
    for($i=0; $i < count($numbers);$i++){
        $sum+=$numbers[$i];
    }
    echo "The Sum Of Numbers is $sum";
}

sum(10,20,30,40);

$mul=function($num1,$num2){
    echo "$num1 * $num2 = ". $num1 * $num2;
};

$mul(20,5);



// Function Scope


$student="Ahmed"; // Global Scope

function printName(){
    global $student;
    echo "Student Name : $student";
    
}

printName();

// Call by value vs Call by reference

echo "<br> ===================================== Call by value vs Call by reference ============================ <br>";



$car="Toyota Corolla";

function carInfo(&$car){
    $car="Tesla";
    echo $car;
}

carInfo($car);

echo $car;







// End of PHP
?>
