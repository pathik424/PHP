<?php

// Write a PHP script which decodes the following JSON string.  


$json_string = '{"name":"John","age":30,"city":"New York"}';
$decoded_array = json_decode($json_string, true);

print_r($decoded_array);



?>