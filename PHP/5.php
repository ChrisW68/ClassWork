<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it*/
    
    echo exp(25) . "<br>";
    echo exp(2) . "<br>";
    
    

/*
	Step 2:  Use a pre-built string function  and echo it
    */
    
    $salt = substr(str_replace('+', '.', base64_encode(pack('N4', mt_rand(), mt_rand(), mt_rand(), mt_rand()))), 0, 22);
    
    echo $salt . "<br>";
    
    

/*
	Step 3:  Use a pre-built Array function here and echo it
    */
    
    $array1 = [12, 98, 10, 45];
    $array2 = [35,45,1,21,12];
    $array3 = [12,98,1];
    
    $result = array_diff($array1, $array2, $array3);
    
    print_r($result);

 

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>