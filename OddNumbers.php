<!doctype html>

<html>
	<head>
<!--
	    Project_02_02_01
	    Author: Nathan Howard
	    Date: 9.14.19
	    File: ConditionalScript.php
-->
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>
	<body>
        <h2>Odd Numbers</h2>
         <?php
            $i = 1; //counter variable
//            while loop
            while ($i < 100) {
                echo $i; //displays the counter
                $i += 2; //increments variable
            };
         ?>
	</body>
</html>