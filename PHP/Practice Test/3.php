<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
    
*/
    $happy = "true";
    $sad = "false";
    
    if($happy <> "true") {
        echo "I love PHP";
    }elseif($sad <> "false") {
        echo "I hate PHP";
    }else{
        echo "I love pHP" . "<br>";
    }
    
/*
	Step 2: Make a forloop  that displays 10 numbers
*/

    for($count=5; $count<15; $count ++) {
        echo $count . "<br>";
    }
    
/*
    Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	$number =50;
    
    switch($number) {
            
            case 20;
                echo "It is 20";
            break;
            case 30;
                echo "It is 30";
            break;
            case 40;
                echo "It is 40";
            break;
            case 50;
                echo "<h1>It is 50</h1>";
            break;
            case 60;
                echo "It is 60";
            break;
            
    }
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>