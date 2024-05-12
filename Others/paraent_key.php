<?php
    class Person {
        public function talk() {
            echo "I am a person.\n";
        }
    }
    
    class Student extends Person {
        public function talk() {
            parent::talk(); // Calls the parent's talk() method
            echo "I am also a student.\n";
        }
    }
    
    $student = new Student();
    $student->talk(); // Output: I am a person. I am also a student.