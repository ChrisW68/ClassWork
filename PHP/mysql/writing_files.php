<?php
$file = "example.txt";

if($handle = fopen($file, 'w')) {
    
    fwrite($handle, "This is neat");
    
    fclose($handle);
} else {
    echo "The application wasn't able to write to the file";
}



?>