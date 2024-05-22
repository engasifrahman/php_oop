<?php

/**
 * 
 * * Step-by-Step Singleton Implementation
 * Private Constructor: Prevent direct instantiation of the class.
 * Private Clone Method: Prevent cloning of the instance.
 * Private Static Property: Hold the single instance of the class.
 * Public Static Method: Provide global access to the instance.
 */
trait SingletonTrait {
    // Hold the single instance of the class
    private static $instance = null;

    // Private constructor to prevent direct object creation
    private function __construct() {
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
        }
        return self::$instance;
    }
}

class MySingleton {
    use SingletonTrait;

    // Example method to demonstrate functionality
    public function doSomething() {
        echo "Doing something with the singleton instance.";
    }
}

// Usage
$singleton = MySingleton::getInstance();
$singleton->doSomething();

// Uncommenting the lines below will cause errors
// $clone = clone $singleton;
// $newSingleton = new MySingleton();