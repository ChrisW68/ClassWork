<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    $orig_Name = 'Chris'; 
    $number = 100;

    echo $name . " " . $number;  //concantinate $name with $number with space in between
    
    $name = "<h1> Hello</h1>";
    echo $name . $orig_Name;
?>
    
</body>
</html>