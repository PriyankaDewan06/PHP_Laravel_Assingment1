<?php
	
	if (isset($_POST["result"])) {
		$value1 = $_POST['number1'];
		$value2 = $_POST['number2'];
		$operator = $_POST["operator"];
		if (is_numeric($value1) && is_numeric($value2)) {
			
			switch ($operator) {
				case '1' :
					$add = ($value1 + $value2);
					$res = "<h3>The Addition of $value1 and $value2 is $add </h3>";
					break;
				case '2' :
					$sub = ($value1 < $value2) ? $res = "Not $value1 is Less Than $value2 " : ($value1 - $value2);
					$res = "<h3>The Subtraction of $value1 - $value2 is $sub </h3>";
					break;
				case '3' :
					$mul = ($value1 != 0 && $value2 != 0) ? ($value1 * $value2) : 'Not Multiply with 0';
					$res = "<h3>The Multiply of $value1 * $value2 is $mul </h3>";
					break;
				case '4' :
					$div = ($value1 != 0 && $value2 != 0) ? ($value1 / $value2) : 'Not Division with 0';
					$res = "<h3>The Division of $value1 / $value2 is $div </h3>";
					break;
				
				default :
					$res = "<h3>Select Operator </h3>";
					break;
			}
            
		} else {
			$res = "<h3>The Value is not in Numbers </h3>";
		}

	}
    echo $res;
?>