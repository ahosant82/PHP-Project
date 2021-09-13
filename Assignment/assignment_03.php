<!DOCTYPE html>
<html>
<head>
	<title>Assignment 03</title>
</head>
<body>
	<?php 
	//php data types
	//string type
	$string = "Assalamu Woalikum Mem!";
	echo "<h3>$string</h3>";
	//integar type
	echo "<h4>PHP DATA TYPES : </h4>";
	$int= 1000;
	var_dump ($int);echo "<br>";
	//dubble type
	$dubble =10.56;
	var_dump($dubble);echo "<br>";
	// arrey type
	$arry= array(927653,"5th Semestar","cmt", "b");
	var_dump($arry);echo "<br>";
	//
	echo "<h4>Create Class and Object in php :</h4>";
	class Car {
    function Car() {
        $this->model = "Elien";
        $this->color = "Grey";
    	}
	}

	// create an object
	$Toyota = new Car();

	// show object properties
	echo "The Model Of Car is ".$Toyota->model;
	echo "<br> The Color Of Car " .$Toyota->color;

	//Null value 
	echo "<h4> PHP NULL VALUE : </h4>";
	$a = "Computer Technology";
	echo "Before declear value is null : ";
	var_dump($a);
	$a= null;
	echo "<br> After declear value is null : ";
	var_dump($a);

	//constants
	echo "<h4>PHP CONSTANTS : </h4>";
	define("closeing_part", "<h5>Thenk's For Watching My Assignment!</h5>", true);
	echo CLOSEING_PART;



	 ?>
</body>
</htmss