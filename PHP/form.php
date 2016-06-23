<?php

if (isset($_POST['submit'])) {
   
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $name = array("Bob", "Todd", "Leslie", "Bill", "Robert", "Christopher");
    
    $minimum = 3;
    $maximum = 11;
   
    if (strlen($username) < $minimum) {  /* Counts the characters and if it is more than the $minimum value performs task */
        
        echo "Username has to be longer than " . $minimum . " characters ";
        
    }
    
    if (strlen($username) > $maximum) {  /* Counts the characters and if is under the $maximum value, performs task */
        
        echo "Username cannot be larger than " . $maximum . " characters ";
        
    } 
    
    if (!in_array($username, $name)) {  /*If $name value is same as input then perform task */
        
        echo "Sorry, you do not have permission to login";
    }  else {
        
        echo "Thank you for entering correct information.<br>Welcome!";
        
    } 
    
        
    /* echo "Hello, " . $username . " how are you doing? <br> Is your password: " . $password;*/
        
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


    <form action = "form.php" method="post"> <!-- Send data to form.php by post format-->
   
    <input type= "text" name = "username" placeholder = "Enter Username">
    <br>
    <input type = "password" name = "password" placeholder="Enter Password">
    <br>
    <input type = "submit" name="submit">  <!-- Only sending the submit input to the post. -->
    
</form>   
   
    
</body>
</html>