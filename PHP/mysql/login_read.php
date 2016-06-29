<?php


    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if($connection) {
        echo "We are connected";
    } else {
        die("Database connection failed");
        }
    
    
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    
    if(!$result) {
        die('Query FAILED!' . mysqli_query);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-xs-4">
    
    <?php
    while($row = mysqli_fetch_assoc($result)) {
        
        ?>
        <pre>
        <?php
        print_r($row); 
        ?>
        </pre>
        <?php
    }    
        
    ?>    
    </div>
    
</div>   
    
      
</body>
</html>