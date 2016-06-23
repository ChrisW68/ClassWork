<?php

if (isset($_POST['submit'])) {
   
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $name = array("Bob", "Todd", "Leslie", "Bill", "Robert", "Christopher");
    
    $minimum = 3;
    $maximum = 11;
    
    $minPass = 6;
    $maxPass = 18;
   
    if (strlen($username) < $minimum) {  /* Counts the characters and if it is more than the $minimum value performs task */
        
        echo "Username has to be longer than " . $minimum . " characters ";
        
    }
    
    if (strlen($username) > $maximum) {  /* Counts the characters and if is under the $maximum value, performs task */
        
        echo "Username cannot be larger than " . $maximum . " characters ";
        
    } 
    
    if (!in_array($username, $name)) {  /*If $name value is same as input then perform task */
        
        echo "Sorry, you do not have permission to login";
    }  else {
        
        echo "Thank you for entering correct username.<br>Welcome!<br>";
        
    } 
    
    if (strlen($password) < $minPass) {  /* Counts the characters and if it is more than the $minimum value performs task */
        
        echo "Password has to be longer than " . $minPass . " characters ";
        
    }
    
    if (strlen($password) > $maxPass) {  /* Counts the characters and if is under the $maximum value, performs task */
        
        echo "Password cannot be larger than " . $maxPass . " characters ";
        
    } 
    
     
    /* echo "Hello, " . $username . " how are you doing? <br> Is your password: " . $password;*/
        
    
}

?>
