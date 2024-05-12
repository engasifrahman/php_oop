<!DOCTYPE html>
<html>
<body>

<?php
/**
 * Throwable interface
 * 
 * interface Throwable
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
 */

//  try {
//     // Code that may throw an Exception or Error.
// } catch (Throwable $t) {
//     // Handle exception
// }


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

//Type error
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
?>
</body>
</html>
