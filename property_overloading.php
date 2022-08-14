<?php
    // __set() is run when writing data to inaccessible properties.
    // __get() is utilized for reading data from inaccessible properties.
    // __isset() is triggered by calling isset() or empty() on inaccessible properties.
    // __unset() is invoked when unset() is used on inaccessible properties.
    
    class PropertyOverload
    {
        /**  Location for overloaded data.  */
        private $data = array();
        public function __set($name, $value)
        {
            $this->data[$name] = $value;
        }
        public function __get($name)
        {
        return $this->data[$name];
        }
        public function __isset($name)
        {
            return isset($this->data[$name]);
        }
        public function __unset($name)
        {
            unset($this->data[$name]);
        }
    }
    $obj = new PropertyOverload;
    echo $obj->name = "Asif Rahman";
?>