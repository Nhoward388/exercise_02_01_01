<!doctype html>

<html>
	<head>
	<!--	    
        Exercise 02_01_01
        Author: Nathan Howard
        Date: 9.10.2018
        
        Functions.php
        -->
		<title>Functions</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Passing Parameters</h2>
        <?php
            function incrementByValue($countByValue) {
                ++$countByValue;
                echo "<p>incrementByValue() value is $countByValue</p>";
            };
            function incrementByReference(&$countByReference) {
                ++$countByReference;
                echo "<p>incrementByReference() value is $countByReference</p>";
            };
            $count = 1;
            echo "<p>Main program starting value is $count</p>";
            incrementByValue($count);
            echo "<p>Main program ending value is $count</p>";
            
            $count = 1;
            echo "<p>Main program starting value is $count</p>";
            incrementByReference($count);
            echo "<p>Main program ending value is $count</p>";
        ?>
        <h2>Default Arguments</h2>
        <?php
            function paint($room ="office" , $color = "red") {
                return "<p>The color of the $room is $color.</p>";
            }
            echo paint();
            echo paint("bedroom" , null);
            echo paint("blue");
        ?>
	</body>
</html>