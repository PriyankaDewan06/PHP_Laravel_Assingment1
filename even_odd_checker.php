<?php
if (isset($_POST['number'])){
	$number = $_POST['number'];
	$remain = $number % 2;

    if($remain==0){
        echo 'Number is even number';
    }else{
        echo 'Number is odd number';
    }
	
} else {
	echo 'You need to provide number';
}

?>