<?php


if (isset($_POST['bangla'], $_POST['english'], $_POST['math'])) {
	$bangla = $_POST['bangla'];
	$english = $_POST['english'];
	$math = $_POST['math'];
    $total= ($bangla + $english + $math);
    $average= $total/3;
     

    if($average>= 90){
        echo 'Your Grade is : A';
    }elseif($average >= 80 && $average < 90){
             echo 'Your Grade is : B';
    }elseif ($average >= 70 && $average < 80){
            echo 'Your Grade is : C';
    }elseif($average >= 60 && $average < 70){
                echo 'Your Grade is : D';
        }else{
                echo 'Your Grade is : E';
        }
     }
else{
    echo 'You must need to provide written,demo,viva marks';
}