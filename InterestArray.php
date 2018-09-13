<!doctype html>

<html>
	<head>
<!--
        Exercise 02_01_01
        Author: Nathan Howard
        Date: 9.10.2018
        
        InternetArray.php
-->
		<title>Internet Array</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Interest Array</h2>
        <?php
//            individual interest rate
            $interestRate1 = .0725;
            $interestRate2 = .075;
            $interestRate3 = .0775;
            $interestRate4 = .0800;
            $interestRate5 = .0825;
            $interestRate6 = .0850;
            $interestRate7 = .0875;
//            array that all interest rates
            $ratesArray = array("$interestRate1" , "$interestRate2", "$interestRate3" , "$interestRate4" , "$interestRate5"  , "$interestRate6"  , "$interestRate7");
//            for loop that will loop through the array and display an interest rate for each item
            for ($i = 0; $i < count($ratesArray); $i++) {
                echo "Interest rate $i is " , number_format($ratesArray[$i], 4) , "<br>";   
            };
       ?>
	</body>
</html>