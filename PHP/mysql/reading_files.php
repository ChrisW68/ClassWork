<?php
$file = "example.txt";

if($handle = fopen($file, 'r')) {
    
    
    echo $content = fread($handle, filesize($file));  //This will read the entire content of the file
//    echo $content = fread($handle, 4); //each bite equals a character
    
    fclose($handle);
} else {
    echo "The application wasn't able to write to the file";
}



?>