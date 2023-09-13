<?php
if (isset($_POST['celsius'])) {
	$celsius = $_POST['celsius']; // value of the celsius
	$f = NULL; // value of the fahrenheit

    $f = (float)(($celsius * 9 / 5) + 32);
    echo($celsius . " Celsius = " . $f . " Fahrenheit");
	// show the $name and $email
	
} else {
	echo 'You need to provide celsius value to get Fahrenheit value ';
}

?>