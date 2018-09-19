<!doctype html>

<html>
	<head>
<!--
	    Project_02_02_01
	    Author: Nathan Howard
	    Date: 9.14.19
	    File: ConditionalScript.php
-->
		<title>Conditional Script</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Conditional Script</h2>
        <?php
            $intVariable = 135; //variable that will be evaluated to be greater than or less than 100
            $result = ""; //variable to store the result of the comparison statement that'll decides whether it is less than 100 or greater
            ($intVariable > 100) ? $result = '$intVariable is greater than 100': $result = '$intVariable is less than or equal to 100'; //comparison statement that says whether it is 100 or less and stores that result to the result variable
            echo '<h3>$result: ' . "$result</h3>" //prints the result out on the page
       ?>
	</body>
</html>