<?php

// Use a for loop to total the contents of an integer array called numbers which has five elements. Store the result in an integer called total. 


// Define the array
$numbers = array(1, 2, 3, 4, 5);

// Initialize the total variable
$total = 0;

// Loop through the array and add each element to the total
for ($i = 0; $i < count($numbers); $i++) {
    $total += $numbers[$i];
}

// Print the total
echo "The total is: " . $total;


?>