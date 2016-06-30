<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .="username = '$username', ";
    $query .="password = '$password' ";
    $query .="WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query Failed!" . mysqli_error($connection)); //The mysqli_error($connection) will provide more information on errors           
    } 
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
    
       <form action="login_create.php" method="post">
           
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <select name="id" id="">
                   <?php ShowAllData(); ?>
                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
        </form>    
    </div>
    
</div>   
    
      
</body>
</html>