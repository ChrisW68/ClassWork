<?php

class Bicycle {
    
    var $wheels = 2;
    var $handlebar = 1;
    var $pedals = 2;
    var $crank = 1;
    var $seat = 1;
    var $seatpost = 1;
    
    
    function __construct() {
        echo $this->wheels = 3;
    }
}

$schwinn = new Bicycle();
$motorbecane = new Bicycle();

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