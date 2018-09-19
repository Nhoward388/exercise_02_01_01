<!doctype html>

<html>
	<head>
	<!--	    
        Exercise 02_01_01
        Author: Nathan Howard
        Date: 9.10.2018
        
        Scope.php
        -->
		<title>Variable Scope</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>
            
	<body>
	    <h2></h2>
	    <?php
            $globalVariable = "global variable";
            function scopeExample() {
              $localVariable = "local variable";
              echo "This is a $localVariable";
            };
            function globalExample() {
              global $globalVariable;
              echo "This is a $globalVariable";
            };
            globalExample();
            echo "<p>This is a $globalVariable</p>";
       ?>
	</body>
</html>