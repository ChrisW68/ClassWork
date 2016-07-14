<?php

class Bicycle {
    
    function MoveWheels() {
        echo "The bicycle wheels are spinning";
        
    }
}

if(method_exists("Bicycle", "MoveWheels")) {
    echo "We have wheels ";
} else {
    echo "We have no wheels :(";
      
}
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