<?php
// ============================ Class 12 ============================
// ============================ Topics ============================
// Inheritance
// Understanding Inheritance
// Creating Subclasses
// Overriding Methods
// The parent Keyword
// The final Keyword


//  Inheritance is a mechanism in which one class inherits the properties and methods of another class.

final class Vehicle{
    public string $name;
    public string $modal;
    public int $number_of_wheels=4;
    public bool $isEngineStarted=false;
    public bool $isLightOn=false;

    public function __construct(string $name,string $modal)
    {
        $this->name=$name;
        $this->modal=$modal;
    }

    public function engineStart(){
        $this->isEngineStarted=true;
    }
    public function engineStop(){
        $this->isEngineStarted=false;
    }
    public function lightOn(){
        $this->isLightOn=true;
    }
    public function lightOff(){
        $this->isLightOn=false;
    }
    public function info(){
        echo "Name : $this->name <br>";
        echo "Modal : $this->modal <br>";
        // condition ? true Statement : false Statement
        echo $this->isEngineStarted ? "Engine Started <br>" : "Engine Stoped <br>";
    }
}

// $obj=new Vehicle('Audi','2024');
// $obj->info();
// Car
class Car extends Vehicle{
    public string $color;
    public int $number_of_doors=4;

    public function __construct($name,$modal,$color)
    {
        $this->color=$color;
        parent::__construct($name,$modal);
    }
    
    public function info(){
        // echo "Name : $this->name <br>";
        // echo "Modal : $this->modal <br>";
        // echo $this->isEngineStarted ? "Engine Started" : "Engine Stoped";
        parent::info();
        echo "Total Doors : $this->number_of_doors <br>";
        echo "Color : $this->color <br>";
    }
}

$car1=new Car('Audi','2024','White');
$car1->engineStart();
$car1->info();