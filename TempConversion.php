<!doctype html>

<html>
	<head>
<!--
	    Exercise 02_02_01
	    Author: Nathan Howard
	    Date: 09.18.19
	    Filename: TempConversion.php
-->
		<title>Temperature Conversion</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Temperature Conversion</h2>
        <?php
//            for loop to get through to 100
            for ($i = 0; $i <= 100; $i++) {
                $temperature = $i; //sets the temperature equal to the counter to reset it after something is done with it
                echo "The temperature is $temperature degrees Fahrenheit | "; //displays degrees in fahrenheit
                $temperature = (($temperature - 32) * (5 / 9)); // calculates the celsius temperatue based on fahrenheit
                echo "The temperature is " . number_format($temperature, 2) . " degrees Celsius. <br>"; //displays celsius after calculation
            }
        ?>
	</body>
</html>