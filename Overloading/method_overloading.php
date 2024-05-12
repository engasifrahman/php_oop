<?php

    class MethodOverloading
    {
        public function __call($name, $arguments)
        {
            // Note: value of $name is case sensitive.
            echo "Calling object method:   ". implode(', ', $arguments);
        }

        public static function __callStatic($name, $arguments)
        {
            echo "\n\nCalling static method: '$name' ". implode(', ', $arguments);
        }
    }

    $obj = new MethodOverloading;
    $obj->runTest('in object context', 'asif');

    MethodOverloading::runTest('in static context');
?>