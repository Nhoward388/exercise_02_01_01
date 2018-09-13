<!doctype html>

<html>
	<head>
<!--
        Exercise 02_01_01
        Author: Nathan Howard
        Date: 9.10.2018
        
        IsEven.php
-->
		<title>Is Even</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Is Even</h2>
        <?php
//            array full of randomly generated numbers
            $numbersArray = array(mt_rand() , mt_rand() , mt_rand() , mt_rand(), mt_rand() , mt_rand() , mt_rand() , mt_rand() , mt_rand(), mt_rand());
//            for loop that will get through the entire array
            for ($i = 0; $i < count($numbersArray); $i++) {
                $evenCheck = $numbersArray[$i] % 2; //variable that will track whether it is even or not
//              uses the check to decide whether the value is random or not
                if ($evenCheck == false) {
                    echo "$numbersArray[$i] is an even value<br>";
                } else {
                    echo "$numbersArray[$i] is an odd value<br>";
                };
            };
        ?>
	</body>
</html>