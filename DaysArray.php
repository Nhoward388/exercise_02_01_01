<!doctype html>

<html>
	<head>
<!--
        Exercise 02_01_01
        Author: Nathan Howard
        Date: 9.10.2018
        
        DaysArray.php
-->
		<title>Days Array</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>
	<body>
        <h1>Days Array</h1>
        <?php
//            array full of days in English
            $days = array("Monday" , "Tuesday" , "Wednesday" , "Thursday" , "Friday" , "Saturday" , "Sunday");//array full of days of the week IN ENGLISH
//            function that will hold a for loop that will decide the day of the week then if it is the last one give it a period.
            function populateDays($days) {
//                $days = array("Monday" , "Tuesday" , "Wednesday" , "Thursday" , "Friday" , "Saturday" , "Sunday");
                for ($i = 0; $i < count($days); $i++) {
                    if ($i == 6) {
                        echo "$days[$i].";
                    }
                    else {
                        echo "$days[$i], ";
                    }
                };
            };
//            echo statement that calls the function to fill in the day with the appropriate day
            echo "<p>The days of the week in English are: " , populateDays($days) , "</p>";
//            names for all french days
            $days = array("Lundi" , "Mardi" , "Mercredi" , "Jeudi" , "Vendredi" , "Samedi" , "Dimanche");//
            echo "<p>The days of the week in French are: " , populateDays($days) , "</p>";
        ?>
	</body>
</html>