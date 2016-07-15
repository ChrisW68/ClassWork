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

class Tricycle extends Bicycle {
    var $wheels = 3;
}

$schwinn = new Tricycle();
$schwinn->Bicyclewheels();
echo $schwinn->$wheels;

//if(class_exists("Tricycle")){
//    
//    echo "Does it exists";
//    
//}


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