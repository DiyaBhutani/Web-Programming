<?php

$file = "about_me.txt";
$paragraph = "Hello, I am DIYA BHUTANI, I am a student of BVIMR. I'm currently in BCA 3rd year ";


$file_handle = fopen($file, 'w');


if ($file_handle) {
    
    fwrite($file_handle, $paragraph);
    
    
    fclose($file_handle);
    
    echo "The text file 'about_me.txt' has been created successfully.";
} else {
    echo "There was an error creating the file.";
}
echo "<br>";
"Program by Diya Bhutani(2220100243)";

?>
