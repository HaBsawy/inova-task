<?php

// The time complexity is (n/2)

function getMiddleLinkedList(array $array) {
    $startIndex = floor(count($array) / 2);
    $newArray = [];

    for ($i = $startIndex; $i < count($array); $i++) {
        $newArray[] = $array[$i];
    }

    return $newArray;
}
