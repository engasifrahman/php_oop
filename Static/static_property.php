<?php
    
/**
 * ?Static Property
 * *Definition: Declared using the static keyword within a class definition.
 * *Behavior: Exist as a single copy shared by all objects of the class. Any changes 
 * made to a static property by one object will be reflected for all other objects as well.
 * *Purpose: Useful for storing class-level data that remains consistent across all instances. 
 * Examples include constants, configuration values, or counters.
 */
class Logger {
    public static $logCount = 0; // Static property

    public static function logMessage($message) {
        self::$logCount++; // Increment counter on each log
        echo "Message " . self::$logCount . ": " . $message . PHP_EOL;
    }
}

Logger::logMessage("This is the first message.");
Logger::logMessage("This is the second message.");
echo Logger::$logCount . PHP_EOL; // Output: 2 (Shared counter)

echo "-----------------------------------------------------------" . PHP_EOL;

echo (new Logger())->logMessage("This is the third message."); //This will work but not recommended