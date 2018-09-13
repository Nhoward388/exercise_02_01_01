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
        <?php
            //creates an array
            $concerts = array("Jimmy Buffet" , "Chris Isaak" , "Bonnie Raitt" , "James Taylor" , "Alicia Keys");
            $concerts[] = "Bob Dylan";
            $concerts[] = "Joan Jett";
            echo "<p>The following " , count($concerts) , " concerts are scheduled</p><p>";
       
            #first element in array
            echo "$concerts[0]<br>";
            echo "$concerts[1]<br>";
            echo "$concerts[2]<br>";
            echo "$concerts[3]<br>";
            echo "$concerts[4]<br>";
            echo "$concerts[5]<br>";
            echo "$concerts[6]</p>";
        
//            finding out all the elements of the array and their index
            echo "<pre>";
            print_r($concerts);
            echo "</pre>";
                
            echo "<pre>";
            var_dump($concerts);
            echo "</pre>";
        ?>
	</body>
</html>