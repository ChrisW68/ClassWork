<?php

class Bicycle {
    //To control access to data I am using public, protected, private
    public $wheels = 2;
    protected $handlebar = 1;
    private $pedals = 2;
    var $crank = 1;
    var $seat = 1;
    var $seatpost = 1;
    

    function showProperty(){
        echo $this->wheels;
        echo $this->handlebar;
    }
}


$schwinn = new Bicycle();




echo $schwinn->ShowProperty();
//echo $schwinn->showProperty();
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