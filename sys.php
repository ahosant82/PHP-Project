<!DOCTYPE html>
<html>
<body>

	<?php
	
	$color = "red,";
	$COLOR = "blue";
	echo "My car is " . $color . "<br>";
	echo "My house is " . $COLOR . "<br>";
	echo "My boat is " . $color . "<br>";
	$x=546.64;
	var_dump($x);
	$cars=$arrayName = array("Volvo","BMW","Toyota" );
	var_dump($cars);
	
	/**
	 */
	echo "</br>";
	class car  
	{
		
		function car()
		{
			$this->model = "project";
		}
	}
	$herbie = new Car();
	echo $herbie->model ;
	echo "</br>";


	$x = "Hello world!";
	$x = null;
	var_dump($x);
	$a= 100;
	$b=20;
	echo "$x";
	echo(+$b*$a);


	?> 

</body>
</html>
