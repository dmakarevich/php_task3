<?php
include 'Person.php';
/**
 * Write a function that groups an array of persons by age, first or last name.
 * The function must return an associative array,
 * with keys - the groups, and values -arrays with persons in this groups.
 * Use function overloading (i.e. just one function).
    $persons = { ... };
    $groupedByFirstName = group($persons, "firstname");
    $groupedByAge = group($persons, "age");
 */

function group($persons, $groupKey) {
  $an_array = [];
  $sortPersons = [];

  foreach ($persons as $person) {
    $reflection = new ReflectionClass($person);
    $properties = $reflection->getProperties();

    foreach ($properties as $property) {
      $property->setAccessible(true);
      $an_array[$property->getName()] = $property->getValue($person);

      if ($property->getName() == $groupKey && $property->getValue($person) != '') {
        $sortPersons[] = $person;
      }
      if (!$property->isPublic())
        $property->setAccessible(false);
    }
  }

  return [$groupKey => $sortPersons];
}


$persons = [
  new Person ( '',"Markovich", 33),
  new Person ("Gosha", "Petrov"),
  new Person ("Bayko", "Ivan", 81),
  new Person('Mark', 'Twein', 26)];

$groupKey = 'age';

$groupPersons = group($persons, $groupKey);

var_dump($groupPersons);