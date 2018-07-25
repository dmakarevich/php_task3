<?php
include 'Person.php';
/**
 * Write a function that finds the youngest person
 * in a given array of persons and prints his/hers full name
 * Each person has properties `firstName`, `lastName` and `age`, as shown:
 * $ persons = [
     { firstName : "Gosho", lastName: "Petrov", age: 32 },
     { firstName : "Bay", lastName: "Ivan", age: 81 }
     ...
   ];
 */

$persons = [
  new Person ("David", "Markovich", 33),
  new Person ("Gosha", "Petrov", 32 ),
  new Person ("Bay", "Ivan", 81)
];

$youngestPerson = $persons[0];
foreach ($persons as $person) {
  if ($person->getAge() < $youngestPerson->getAge()) {
    $youngestPerson = $person;
  }
}

var_dump($youngestPerson);