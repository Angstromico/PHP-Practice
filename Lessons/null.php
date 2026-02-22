<?php 
declare(strict_types=1);

echo "Loose comparision  \n";
var_dump(null == null, null == false, null == 0, null == '', null == [], null == new stdClass(), $abc, isset($abc), is_null($abc), $abc ?? 'default value', empty([])); //All exept the last one are true, because null is considered equal to false, 0, empty string, and empty array in loose comparisons. However, null is not equal to an instance of stdClass, as they are different types.
echo "More strict comparision  \n";
var_dump(null === null, null === false, null === 0, null === '', null === [], null === new stdClass()); //Only the first one is true, because null is identical to null, but not identical to false, 0, empty string, empty array, or an instance of stdClass, as they are different types.

function greet( ?string $name) {
    $is_named = $name ?? 'Guest'; // The null coalescing operator (??) checks if $name is null and provides a default value of 'Guest' if it is.

    echo "Hello, $is_named!\n";
}

greet("Alice");
greet(null);

var_dump(array_filter([1, null, '', false, 0, [], new stdClass()])); // The array_filter function removes all falsy values from the array, which includes null, empty string, false, 0, and empty array. The resulting array will only contain the integer 1 and the instance of stdClass.