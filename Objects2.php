<?php
/*
 * Write a function that removes all elements with a given value
   $arr = [1, 2, 1, 4, 1, 3, 4, 1, 111, 3, 2, 1, "1"];
   $arr.remove(1); // arr = [2, 4, 3, 4, 111, 3, 2, "1"];
 */

function remove($arr, $deleteValue) {
  foreach ($arr as $key => $value) {
    if ($value === $deleteValue) {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = [1, 2, 1, 4, 1, 3, 4, 1, 111, 3, 2, 1, "1"];
$arr = remove($arr, 1);

var_dump($arr);