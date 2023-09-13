<?php
if (isset($_POST['num1'],$_POST['num2'])){
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$max = ($num1 > $num2) ? $num1 :$num2;

    echo "Largest number among ". $num1 ." and " . $num2. " is " .$max;
	
} else {
	echo 'You need to provide number';
}

?>