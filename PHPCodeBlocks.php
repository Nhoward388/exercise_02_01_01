<!doctype html>

<html>
	<head>
        <!--	    
        Exercise 02_01_01
        Author: Nathan Howard
        Date: 9.10.2018
        
        PHPCodeBlocks.php
        -->
		<title>PHP Code Blocks</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <p>
        <?php
            echo "This text is displayed using standard PHP script delimiters";
            print "<br>2nd string<br>";
            print("3rd string");
            echo("<h1>This is a " . "multiple argument string</h1><br>");
            print("<h2> This is coolmath: " . (2 + 3) . "</h2>")
        ?>
        </p>
	</body>
</html>