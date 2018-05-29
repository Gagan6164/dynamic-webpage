<!doctype html>
<html>
	<head>
	<title> kaddu </title>
	</head>
	<style>
h1  {
	background-color: rgb(225,0,225)
       }
h2  {
	background-color: rgb(0,225,225)
       }
body  {
	background-color: rgb(500,300,100)
       }
	</style>	
	<body>
	<h1><marquee>welcome to img workshop 2017</marquee></h1>
	<hr>
	<h2>time now is : <?php echo date('Y-m-d H:i:s'); ?></h2>
	<?php
		$name = 'welcome chomu';
		$age = 16;
		$person = array('gagan','aakash','kaddu');
		if($age > 17)
		 {echo "go to hell ";}
		else
		 {echo "you are not chomu";}
		var_dump($name);
		var_dump($age);
		var_dump($person);
		echo $name;
		echo "<br/>";
		$nums = [10,52,56];
		for($i = 0;$i<count($nums);$i++)
		{
		echo "this is item ".$i." with value 
		    : ".$nums[$i];
		echo "<br/>";
		if($nums[$i] > 17)
		 {echo "go away";}
		else
		 {echo "you also ";}
		echo "<br/>";
		}
		function add($x,$y)
		{
  		   return $x+$y;
		}
		$a = 15;
		$b = 35;
		echo "num1=".$a;
		echo "<br/>";	
		echo "num2=".$b;
		echo "<br/>";
		echo "sum of num1 and num2 = ".add($a,$b);
	?>
	</body>
</html>