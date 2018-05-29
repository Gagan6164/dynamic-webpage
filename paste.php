<?php
	include('setup.php');
	include('random_string.php');
	$unique_key = generateKey();
	echo $unique_key;
	$paste_link ='';
	if($_SERVER["REQUEST_METHOD"]== "POST"){
	$paste_data = $_POST["paste_data"];
	echo $paste_data;
	$sql = "INSERT INTO table1 (paste_data, unique_key) values ('". $paste_data ."','" . $unique_key ."');";
	if($conn->query($sql) === TRUE){
	$paste_link = "http://localhost/workshop/view.php?s=" . $unique_key;
	echo "the paste link is <a href=" . $paste_link . ">". $paste_link ."</a>";
        }
	else{
		echo "Error: " .$sql . "<br>";
	}
	}
?>
	









	
	