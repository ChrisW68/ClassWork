<?php

$name = "Chris";
$value = 100;
$expiration = time() + (60*60*24*5);  //adding 5 days to current time

setcookie($name,$value,$expiration);  //This will set the cookie automatically when this program runs

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
<?php   
//The below function will check the value of the cookie for $name and echo the value of the cookie
if(isset($_COOKIE['Chris'])) {  
    $someOne = $_COOKIE["Chris"];
    
    echo "The value of cookie " . $someOne . " was set";
} else {
    $someOne = "";
}
    
    
?>    
</body>
</html>