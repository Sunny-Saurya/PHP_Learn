<?php

// prepare the variables a student management system
// using the class keyword, followed by the class name and currly braces. inside declare properties and methods to encapsulate data and behaviour

class StudentManagementSystem {
    // properties
    public $name;
    public $age;
    public $grade;

    public function __construct($name, $age, $grade) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Grade: " . $this->grade . "<br>";
    }
} 
$student1 = new StudentManagementSystem("John Doe", 20, "A");
$student2 = new StudentManagementSystem("Jane Smith", 22, "B");
$student3 = new StudentManagementSystem("Alice Johnson", 19, "A+");
$student4 = new StudentManagementSystem("Bob Brown", 21, "B+");
$student5 = new StudentManagementSystem("Charlie White", 23, "A-");
?>