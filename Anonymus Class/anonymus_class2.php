<?php

interface Logger 
{
    public function log(string $input);
}

class MyClassThatRequiresALogger
{
    private $m_logger;

    public function __construct(Logger $logger)
    {
        $this->m_logger = $logger;
    }

    public function run()
    {
        // do something here...
        $this->m_logger->log("I did something!");
    }
}

$logger = new class() implements Logger {
    public function log(string $input) {
        print($input); 
    }
};

$myClass = new MyClassThatRequiresALogger($logger);
$myClass->run(); // I did something!

echo PHP_EOL . $logger instanceof Logger; // true