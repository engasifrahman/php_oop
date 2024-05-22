<?php

/**
 * 
 * Throwable interface
 * 
 * *Interface synopsis
   interface Throwable
   {
        public function getMessage(): string;       // Error reason
        public function getCode(): int;             // Error code
        public function getFile(): string;          // Error begin file
        public function getLine(): int;             // Error begin line
        public function getTrace(): array;          // Return stack trace as array like debug_backtrace()
        public function getTraceAsString(): string; // Return stack trace as string
        public function getPrevious(): Throwable;   // Return previous `Trowable`
        public function __toString(): string;       // Convert into string
   }
 * 
 * Here is Throwable hierarchy:
    interface Throwable
    |- Error implements Throwable
        |- ArithmeticError extends Error
            |- DivisionByZeroError extends ArithmeticError
        |- AssertionError extends Error
        |- ParseError extends Error
        |- TypeError extends Error
            |- ArgumentCountError extends TypeError
    |- Exception implements Throwable
        |- ClosedGeneratorException extends Exception
        |- DOMException extends Exception
        |- ErrorException extends Exception
        |- IntlException extends Exception
        |- LogicException extends Exception
            |- BadFunctionCallException extends LogicException
                |- BadMethodCallException extends BadFunctionCallException
            |- DomainException extends LogicException
            |- InvalidArgumentException extends LogicException
            |- LengthException extends LogicException
            |- OutOfRangeException extends LogicException
        |- PharException extends Exception
        |- ReflectionException extends Exception
        |- RuntimeException extends Exception
            |- OutOfBoundsException extends RuntimeException
            |- OverflowException extends RuntimeException
            |- PDOException extends RuntimeException
            |- RangeException extends RuntimeException
            |- UnderflowException extends RuntimeException
            |- UnexpectedValueException extends RuntimeException
*/

// Throwable
try {
    // Code that may throw an Exception or Error.
} catch (Throwable $t) {
    // Handle exception
}

//Error as Throwable
try {
    sqdf();
} catch (Throwable $t) {
    echo "Throwable: ".$t->getMessage()."<br>";
}

//Exception as Throwable
try {
    throw new Exception("Bla");
} catch (Throwable $t) {
    echo "Throwable: ".$t->getMessage()."<br>";
}

//Error
try {
    sqdf();
} catch (Error $e) {
    echo "Error: ".$e->getMessage()."<br>";
} catch (Exception $e) {
    echo "Exception: ".$e->getMessage()."<br>";
}

//Exception
try {
    throw new Exception("Bla");
} catch (Error $e) {
    echo "Error: ".$e->getMessage()."<br>";
} catch (Exception $e) {
    echo "Exception: ".$e->getMessage()."<br>";
}

//TypeError
try {
    function add(int $a, int $b):int {
        return $a + $b;
    }
    if(add(array(), array())){
        echo add(array(), array());
    }
    else{
        throw new Exception("TypeError");
    }
} catch (TypeError $t) {
    echo "Type error: ".$t->getMessage()."<br>";
}
