<?php

// Write a PHP code to read the content of a text file and display it on the webpage.

// Reading 'demo.txt'
$file = 'demo.txt';


// Open the file
$fp = fopen($file,'r');


// Read the content of the file
$lines = [];
while($line = fgets($fp)) {
    array_push($lines, $line);
}


// Close the file
fclose($fp);


// Display the content
foreach($lines as $line) {
    echo $line."<br>";
}


// Write a PHP code to append new data to an existing text file.

// Appending new lines to 'demo.txt'
$file = 'demo.txt';

$data = 'Writing this new data to the existing file'."\n";


// Open the file in append mode
$fp = fopen($file, 'a+');



// Write the data to the file
fwrite($fp, $data);



// Close the file
fclose($fp);

?>
