<?php

// How can you declare the array (all type) in PHP? Explain with example Covert a JSON string to array.

// Indexed array
$fruits = array("Apple", "Banana", "Orange");

// Associative array
$person = array("name" => "John", "age" => 30, "city" => "New York");

// Multidimensional array
$employees = array(
    array("name" => "John", "age" => 30, "position" => "Manager"),
    array("name" => "Jane", "age" => 25, "position" => "Developer"),
    array("name" => "Bob", "age" => 35, "position" => "Designer")
);


?>

<?php

$json_string = '{"name":"John","age":30,"city":"New York"}';
$person = json_decode($json_string, true);

?>