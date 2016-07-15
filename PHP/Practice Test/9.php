<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<?php
            session_start();
            $_SESSION['message'] = "Please wait one minute";
            $username = "William";
            $value = 5;
            $expiration = time() + (60*60*24*7);  //This will make the  cookie expiration 7 days from present date
            
            setcookie($username,$value,$expiration);
?>
	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
			<?php
                
                if(isset($_GET['source'])) {
                    
                    echo $_GET['source'];
                }
            ?>
                
                <a href="9.php?source=12584">Click Here</a>
                <br>
            <?php
                if(isset($_COOKIE[$username])) {
                echo "The value is: " . $_COOKIE [$username] . "<br>";
            }
                
                if(isset($_SESSION['message'])) {
                    echo  $_SESSION ['message'];
                }
		
	       ?>
	<?php 

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>