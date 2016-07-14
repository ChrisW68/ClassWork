<?php

class Bicycle {
    
    var $wheels = 2;
    var $handlebar = 1;
    var $pedals = 2;
    var $crank = 1;
    var $seat = 1;
    var $seatpost = 1;
    
    
    function Bicyclewheels() {
        $this->wheels = 3;
    }
    function CreateSeats(){
        $this->seatpost = 2;
        
    }
}

$cannondale = new Bicycle();
//$cannondale->wheels=3;
$recumbent = new bicycle();
echo $cannondale->wheels . "<br>";

echo $recumbent->Bicyclewheels() . "<br>";
$cannondale->CreateSeats();
echo $cannondale->seatpost;
//$cannondale->RecumbentWheels();
//
//echo $cannondale->wheels;



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