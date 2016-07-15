<?php

class Bicycle {
    //To control access to data I am using public, protected, private
    static $wheels = 2;
    var $seatpost = 1;
    

    function MoveWheels(){
        Bicycle::$wheels=3;
    }
}


$schwinn = new Bicycle();
Bicycle::MoveWheels();
echo Bicycle::$wheels;



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