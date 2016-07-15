
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  Step1: Make a form that submits one value to POST super global


 */
    
if (isset($_POST['submit'])) {
    
    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    
    $name = array("Bob", "Jennifer", "Tyler", "Chris");
        
    $phone = 10;
    
    $pass = 5;
    
    if (!in_array($username, $name)) {
        echo "Sorry, you do not have permission to enter!<br>";
    }
    if (strlen($phonenumber) != $phone) {
        echo "Phone number is invalid<br>";
    }
    if (strlen ($password) < $pass) {
        echo "the password is incorrect length";
    } else {
        echo "Everything is good!";
    }  
    
}

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


    <form action = "6.php" method="post"> <!-- Send data to form.php by post format-->
   
    <input type= "text" name = "username" placeholder = "Enter Username">
    <br>
    <input type = "phonenumber" name = "phonenumber" placeholder="Enter Phone Number">
    <br>
    <input type = "password" name = "password" placeholder="Enter Password">
    <br>
    <input type = "submit" name="submit">  <!-- Only sending the submit input to the post. -->
    
</form>   
   
    
</body>
</html>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>