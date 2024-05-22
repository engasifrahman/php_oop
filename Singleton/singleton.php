<?php

/**
 * 
 * * Step-by-Step Singleton Implementation
 * Private Constructor: Prevent direct instantiation of the class.
 * Private Clone Method: Prevent cloning of the instance.
 * Private Static Property: Hold the single instance of the class.
 * Public Static Method: Provide global access to the instance.
 */
class Singleton {
    // Hold the single instance of the class
    private static $instance = null;

    private $message;

    // Private constructor to prevent direct object creation
    private function __construct() {
        echo "Initialization\n";

        // Initialization code
    }

    // Private clone method to prevent cloning of the instance
    private function __clone() {}

    // Private unserialize method to prevent unserializing of the instance
    private function __wakeup() {}

    // Public static method to get the single instance of the class
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        } else {
            echo "Already Initialized\n";
        }
        return self::$instance;
    }

    // Example method to demonstrate functionality
    public function doSomething($message) {
        $this->message .= $message;
        echo $this->message . "\n";
    }
}

// Usage
$singleton = Singleton::getInstance();
$singleton->doSomething('Hello');

$singleton = Singleton::getInstance();
$singleton->doSomething(' PHP');

$singleton = Singleton::getInstance();
$singleton->doSomething(' World');


// Uncommenting the lines below will cause errors
// $clone = clone $singleton;
// $newSingleton = new Singleton();
