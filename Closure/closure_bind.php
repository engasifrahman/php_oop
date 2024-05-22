<?php

/**
 * 
 * ?Closure::bind
 * 
 * ?NewScope (param details ↓)
 * ?Default Scope:
 * *The default scope is the scope in which the closure was originally defined.
 * If the closure was defined within a class method, it will have access to 
 * the private and protected members of that class. If it was defined outside 
 * of a class, it will have access to the global scope.
 * 
 * *Use null when you want to completely remove the closure's access to private 
 * and protected members, ensuring it operates with no special access rights.
 * 
 * *Use 'static' when you want the closure to potentially retain access to 
 * private and protected members, particularly if it was originally defined 
 * in a static context. However, if the closure was not defined in a static 
 * context, using 'static' will not grant access to private properties.
 */
class A {
    private static $sfoo = 1;
    private $ifoo = 2;
}

$cl1 = static function() {
    return A::$sfoo;
};

$cl2 = function() {
    return $this->ifoo;
};

/* -------------------------------------------------------------------------- */

// Binding a static closure to access static property 
$bcl1 = Closure::bind($cl1, null, 'A');
echo $bcl1(), "\n";
// Equivelent bindTo
$bcl1 = $cl1->bindTo(null, 'A');
echo $bcl1(), "\n";

/* -------------------------------------------------------------------------- */

// Binding a non-static closure to access non-static property 
$bcl2 = Closure::bind($cl2, new A(), 'A');
echo $bcl2(), "\n";
// Equivelent bindTo
$bcl2 = $cl2->bindTo(new A(), 'A');
echo $bcl2(), "\n";
