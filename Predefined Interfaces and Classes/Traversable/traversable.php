<?php

/**
 * ?Traversable
 * 
 * Interface to detect if a class is traversable using foreach.
 * Abstract base interface that cannot be implemented alone. 
 * *Instead, it must be implemented by either IteratorAggregate or Iterator. 
 * 
 * *From PHP v7.4.0, the Traversable interface can now be implemented by abstract classes. 
 * Extending classes must implement Iterator or IteratorAggregate.
 * 
 * *Interface synopsis
     interface Traversable {

    }
    */
$items = 'Hey';
// $items = [];
if( !is_array( $items ) && !$items instanceof Traversable ) {
    echo 'This is not traversable';
    //Throw exception here
}