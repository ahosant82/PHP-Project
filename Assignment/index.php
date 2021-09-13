<!DOCTYPE html>
<html>
<head>
	<title>Assigsnment 02</title>
</head>
<body>
	<?php 
	// start php codeing
	echo "<h2>ASSIGNMENT 02 :</h2>";
	echo "Create A Program Useing php Veriables . <br> <br>";
	// Create veriable
	// $veriable_name = value
	$colour = 'Red';
	$COLOUR = 'Blue';s
	$COLour = 'white';
	$colOUR = 'Green';
	$txt1 = 'Addition Of a and b =';
	$txt2 = 'Divition Of a and b =';
	$a = 10;
	$b = 20;
	echo "My Car is: ". $COLOUR.'.' .'<br>';
	echo "My House is: ". $COLour.'.'.'<br>' ;
	echo "Bangladesh National Flage is ". $colour. ' and '. $colOUR. ' Colour . <br><br>';

	// useing echo and print statement
	//echo statement
	echo "<h2>Echo Statement :</h2>";
	echo $txt1. ($a+$b). '<br>';
	echo $txt2. ($a/$b). '<br>';

	//print statement
	print "<h2>Print Statement :</h2>";
	print "Value of a = ". $a.'<br>';
	print "Value of b = ". $b.'<br>';
	print $txt1. ($a+$b). '<br>';
	print $txt2. ($a/$b). '<br>';
	print '<br> Thanks For Watching My php File!';
	?>

</body>
</html>