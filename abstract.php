<?php 
    // Abstract class 
    abstract class Base { 
        function __construct() { 
            echo "This is abstract class constructor "; 
        } 
        public function foo(){

        }
        // This is abstract function 
        abstract function printdata();
    } 
    class Derived extends Base { 
        function __construct() { 
            echo "Derived class constructor \n"; 
        } 
        function printdata() { 
            echo "<br>";
            echo "Derived class printdata function"; 
        } 
    } 
    $b1 = new Derived; 
    $b1->printdata();
    // Integers

//spaceship operator
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1 
?> 
