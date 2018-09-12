<!doctype html>

<html>
	<head>
	<!--	    
        Exercise 02_01_01
        Author: Nathan Howard
        Date: 9.10.2018
        
        MultipleScripts.php
        -->
		<title>PHP Environment Info</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
    <h1>PHP Environment Info</h1>
    <p>This page was rendered with
    <?php
//        this will fetch the current version number and display it on the page
        echo phpversion();
    ?>
    </p>
    <p>This PHP code was rendered with the Zend Engine version
    <?php
        #This will fetch the current version of the Zend Engine and displays it on the page
        echo zend_version();
    ?>
    </p>
    <p>PHP's default MIME type is 
    <?php
        //Grabs the mime type from the relevant initialization file and displays it on the page
        echo ini_get("default_mimetype");
    ?>
    </p>
    <p>The maximum allowable execution time of a PHP script is
    <?php
        #grabs the timeout time from the initialization file and displays it on the page
        echo ini_get("max_execution_time");
    ?>
    </p>
	</body>
</html>