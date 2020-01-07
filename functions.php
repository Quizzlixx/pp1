<?php
#returns an associate array with each value from the original array and the number of times it appears in the array
function distribution($array)
{
    $distributionArray = [];
    foreach ($array as $item) {
        if(!array_key_exists($item, $distributionArray)) {
            $distributionArray[$item] = 1;
        } else {
            $temp = $distributionArray[$item];
            $distributionArray[$item] = $temp + 1;
        }
    }
    return $distributionArray;
}

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
    $tempArray = [];
    foreach ($array as $item) {
        if (!in_array($item, $tempArray)) {
            array_push($tempArray, $item);
        }
    }
    return $tempArray;
}