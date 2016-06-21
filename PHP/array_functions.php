<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php   

$list = [34, 12, 566, 98, 40,12];

echo max($list) . "<br>"; //maximum value in the array

echo min($list) . "<br>"; //minimum value in the array

echo print_r($list) . "<br>";
    
echo sort($list);
    
?>    
</body>
</html>