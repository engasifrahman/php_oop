<?php
    
class PropertyOverload
{
    /**  Location for overloaded data.  */
    private $data = array();
            
    /**
     * __set() is run when writing data to inaccessible properties.
     *
     * @param  mixed $name
     * @param  mixed $value
     * @return void
     */
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
    
    /**
     * __get() is utilized for reading data from inaccessible properties.
     *
     * @param  mixed $name
     * @return void
     */
    public function __get($name)
    {
        return $this->data[$name];
    }
    
    /**
     * __isset() is triggered by calling isset() or empty() on inaccessible properties.
     *
     * @param  mixed $name
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }
    
    /**
     * __unset() is invoked when unset() is used on inaccessible properties.
     *
     * @param  mixed $name
     * @return void
     */
    public function __unset($name)
    {
        unset($this->data[$name]);
    }
}

$obj = new PropertyOverload;
echo $obj->name = "Asif Rahman";