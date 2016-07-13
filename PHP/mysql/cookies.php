<?php

$name = "Chris";
$value = 100;
$expiration = time() + (60*60*24*5);  //adding 5 days to current time

setcookie('$name', '$value', '$expiration');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   
    
</body>
</html>