<!doctype html>

<html>
	<head>
<!--
	       Author: Nathan Howard
    Date: 9.17.18
    Project_02_02_01
    Filename: WhileLogic.php
-->
		<title>Gas Prices</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Gas Prices</h2>
        <?php
            $gasPrice = 2.57; //variable to store current gas price
//            decision making statement
            if ($gasPrice >= 2 && $gasPrice <= 3) {
                echo "<p>Gas Prices are between $2.00 and $3.00</p>";
            } else {
                echo "<p>Gas prices are not between $2.00 and $3.00</p>";
            }
       ?>
	</body>
</html>