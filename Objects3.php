<?php
include 'Person.php';
/**
 * Write a function that makes a deep copy of an object.
 */

$person = new Person();

$personCopy = clone $person;

var_dump($person);
var_dump($personCopy);