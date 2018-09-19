<!doctype html>

<html>
	<head>
	<!--	    
        Exercise 02_01_01
        Author: Nathan Howard
        Date: 9.10.2018
        
        DiceRoll.php
        -->
		<title>Dice Roll</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
       <h2>Dice Roll</h2>
        <?php
//            global variable
            $faceNamesSingular = array("one", "two", "three", "four", "five", "six");
            $faceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixs");
            $doublesCount = 0;
            $rollNumber = 1;
            define("NBR_ROLLS", 4);
//            function to check cards for a match
            function checkForDoubles($die1, $die2) {
                global $faceNamesSingular;
                global $faceNamesPlural;
                $returnValue = false;
                echo "Die 1 is $die1<br>Die 2 is $die2";
                if ($die1 === $die2) {
                    echo "<br>The roll was double " . $faceNamesPlural[$die1 - 1] > ".<br>";
                    $returnValue = true;
                } else {
                    echo "<br>The roll was a " . $faceNamesSingular[$die1 - 1] . " and a "  . $faceNamesSingular[$die2 - 1] . ".<br>";
                    $returnValue = false;
                };
                return $returnValue;
            };
//            function to display the score
            function displayScoreText($score, $doubles) {
                if ($doubles) {
                    switch ($score) {
                        case 2:
                            echo "You rolled a snake eyes!<br>";
                            break;
                        case 12:
                            echo "You rolled boxcars!<br>";
                            break;
                    };
                  } else {
                    if ($score === 3) {
                        echo "You rolled loose deuce!<br>";
                    } else if ($score === 5) {
                        echo "You rolled fever fiver!<br>";
                    } else if ($score === 7) {
                        echo "You rolled natural!<br>";
                    } else if ($score === 9) {
                        echo "You rolled a nina!<br>";
                    } else if ($score === 11) {
                        echo "You rolled a yo!<br>";
                    };   
                };
            };  
//            dice roll on page generation
            $dice = array();
            while ($rollNumber <= NBR_ROLLS) {
            $dice[0] = rand(1, 6);
            $dice[1] = rand(1, 6);
            echo "<p>";
            $score = $dice[0] + $dice[1];
            echo "<br>The total score for the roll was $score.<br>";
            $doubles = checkForDoubles($dice[0], $dice[1]);
            displayScoreText($score, $doubles);
            echo "</p>";
              if ($doubles) {
                  ++$doublesCount;
              }  
            ++$rollNumber;
            };
            echo "<p>Doubles occured on $doublesCount of the " . NBR_ROLLS . "</p>";
        ?>
	</body>
</html>