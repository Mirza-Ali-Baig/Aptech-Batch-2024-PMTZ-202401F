<?php
// Intoduction To OOPs
// Object-oriented programming
// Class
// Object 
// Properties
// Methods
// Constructor
// Access Modifiers (public, private, protected)
// The $this Keyword


// ====================================== Class ======================================
class Student{
    // Properties => Variable
    // Methods => Functions
    public $name="Ahmed";
    public $age=20;
    public $subject="English";
    public $percentage=50;
    
    private function info(){
        echo "Student Name: $this->name <br>";
        echo "Student Age: $this->age <br>";
        echo "Student Subject: $this->subject <br>";
        echo "Student Percentage: $this->percentage <br>";
    }
    
    // Constructor 
    public function __construct($name,$age,$subject,$percentage)
    {
        $this->name=$name;
        $this->age=$age;
        $this->subject=$subject;
        $this->percentage=$percentage;
        echo "Constructor Called <br>";
    }

    // Default Constructor
    // public function __construct(){

    // }
}


// ====================================== Object ======================================

echo "<br>======================== Student 1 Object ======================== <br>";
$student1=new Student('Ahmed',20,"English",80);
// $student1->info();

echo "<br>======================== Student 2 Object ======================== <br>";
$student2=new Student('Basit',23,"Maths",80);
// $student2->age=22;
// $student2->subject='Maths';
// $student2->percentage=80;
// $student2->info();
echo "<br>======================== Student 3 Object ======================== <br>";

$student3=new Student('Faraz',25,"Chemistry",80);
// $student3->age=25;
// $student3->subject='Chemistry';
// $student3->percentage=60;
// $student3->info();







// Extra
// How to Create your Own Server
// Run in terminal
// php -S localhost:4000