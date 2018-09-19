<!doctype html>

<html>
	<head>
<!--
    Author: Nathan Howard
    Date: 9.17.18
    Project_02_02_01
    Filename: WhileLogic.php
-->
		<title>Is Even</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>While Logic</h2>
        <?php
            $counter = 0; //counter variable
            $numbers = array(); //empty array to store generated numbers
//            automically generate an array and fill it to 100
            while ($counter < 100) {
                $numbers[] = $counter;
                ++$counter;
            }
//            fills in the array
            foreach ($numbers as $counter) {
                echo "$counter<br>"; //prints the array
            }
        ?>
	</body>
</html>