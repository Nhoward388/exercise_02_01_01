<!doctype html>

<html>
	<head>
	<!--	    
        Exercise 02_01_01
        Author: Nathan Howard
        Date: 9.10.2018
        
        HelloWorld.php
        -->
		<title>PHP Environment Info</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
       <h2>Operators</h2>
        <?php
//     addition 
       $x = 100;
       $y = 200;
       $returnValue = $x + $y;
        echo '<p>$returnValue after addition: ' , $returnValue , "</p>";
       //modulus
       $x = 3;
       $y = 2;
       $returnValue = $x % $y;
       echo '<p>$returnValue after modulus: ' , $returnValue , "</p>";
//       compound assignment
       $x = "hello ";
       $y = "world";
       $x .= $y;
       echo '<p>$returnValue after modulus: ' , $x , "</p>";
       ?>
	</body>
</html>