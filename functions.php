<?php
#returns the largest value in the array
function largest($array)
{
    $size = sizeof($array);
    $largest = $array[0];
    for ($i = 0; $i < $size; $i++) {
        if ($array[$i] > $largest) {
            $largest = $array[$i];
        }
    }
    return $largest;
}

#prints the given array
function printArr($array)
{
    foreach ($array as $printValue) {
        echo $printValue . "<br>";
    }
}

#returns an array with duplicate values removed
function removeDups($array)
{
    $newArray = $array;
    sort($newArray);
    for ($i = 0; $i <= sizeof($newArray); $i++) {
        if ($newArray[$i] == $newArray[$i + 1]) {
            unset($newArray[$i]);
        }
    }
    return $newArray;
}