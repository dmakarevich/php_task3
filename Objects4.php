<?php
include 'Person.php';
/**
 * Write a function that checks if a given object contains a given property
    $ obj  = ...;
    $ hasProp = hasProperty($obj, "length");

 */

$obj = new Person("Lacky", "Forest", 25);
$property = 'agge';

function hasProperty($obj, $property) {
  return property_exists($obj, $property);
}

var_dump(hasProperty($obj, $property));