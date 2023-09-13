<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
</head>
<body>
<div>
        <h1> Task 1: Personal Information Page </h1>
        <?php
            $student_name = "Priyanka Das Dewan";
            echo "My name is ".$student_name."<br>";
            $age = 27;
            echo "My age is ".$age. "<br>";
            $country = "Bangladesh";
            echo "My country is ".$country. "<br>";
            $introduction = "I want to be a Web Developer";
            echo "About Me -  ".$introduction. "<br>";

    ?>
    </div>
    <div>
        <h1> Task 2: Temperature Converter </h1>
        <form action="temperature_converter.php" method="post">
                <label for="temp_celsius"> Enter value in Celsius</label> <br>
                <input id="temp_celsius" type="text" name="celsius"> <sup> o </sup><br> <br>
                <input type="submit">
        </form>
    </div>
    <div>
        <h1> Task 3: Grade Calculator</h1>
        <form action="grade_calculator.php" method="post">
                <label for="bangla"> Enter marks for Bangla</label> <br>
                <input id="bangla" type="text" name="bangla" placeholder="out of 100">  <br><br>
                <label for="english"> Enter marks for English</label> <br>
                <input id="english" type="text" name="english" placeholder="out of 100">  <br><br>
                <label for="math"> Enter marks for Math</label> <br>
                <input id="math" type="text" name="math" placeholder="out of 100">  <br><br>

                <input type="submit">
        </form>
    </div>

    <div>
        <h1> Task 4: Even or Odd Checker </h1>
        <form action="even_odd_checker.php" method="post">
                <label for="number"> Enter a number</label> <br>
                <input id="number" type="text" name="number">  <br><br>
                <input type="submit">
        </form>
    </div>
    <div>
        <h1> Task 6: Comparison Tool </h1>
        <form action="comparison_tool.php" method="post">
                <label for="num1"> Enter a number</label> <br>
                <input id="num1" type="text" name="num1">  <br>
                <label for="num2"> Enter another number</label> <br>
                <input id="num2" type="text" name="num2">  <br><br>
                <input type="submit">
        </form>
    </div>
    <div>

        <h1> Task 7: Simple Calculator </h1>
       
		<form method="POST" action="simple_calculator.php">
			<p> Enter First Value
				<input type="text" name="number1" value="" />
			</p>
			<p>Enter Second Value
				<input type="text" name="number2" value=""/>
			</p>
			<p>
				<select name="operator">
					<option> Select Operator </option>
					<option value="1"> + Addition </option>
					<option value="2"> - Subtraction </option>
					<option value="3"> * Multiplication </option>
					<option value="4"> / Division </option>
					
				</select> </p>
			<input type="submit" name="result" value="Result">
		</form>

    
</body>
</html>
