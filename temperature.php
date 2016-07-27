<?php
include ("unit-conv-functions.php");
?>


<?php

if ($_POST) {
	$temp1 = new Temperature($temp_input);
	$temp_input = ($_POST['temp_input'])+0.0;
	$temp_conv = $_POST['temp_choices'];

	if ($conv_type == "c_to_f") {
		$temp_result = $temp1->celciusToFahrenheit();
	} else if ($conv_type == "f_to_c") {
		$temp_result = $temp1->fahrenheitToCelcius();
	}
	// echo $temp1;
	echo $temp_input;
	// echo $temp_conv;
	// echo $temp_result;
	echo $temp_input->fahrenheitToCelcius();
}
?>


<html>
<head>
	<title>Temperature Conversion</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Temperature Conversion</h1>
<h2>(numbers only...use a decimal if needed)</h2>




<div>
	<br>
	<br>
	<br>
	<br>
	<form method="post" action="">
		Temperature to Convert:
		&nbsp;&nbsp;
		<label><input type="number" name="temp_input" value=""></label>
		&nbsp;&nbsp;
		Conversion Type: 
		&nbsp;&nbsp;
		<select name="temp_choices">
			<option value="c_to_f" name="">Celcius to Fahrenheit</option>
			<option value="f_to_c" name="">Fahrenheit to Celcius</option>
		</select>
	<br>
	<br>
	<br>
	<br>
		<input type="submit" value="CONVERT"/>
	</form>
</div>



<div>
	<div>
<?php if ($temp_conv == "c_to_f") { ?>
		<?php echo $temp_input; ?>˚ Celcius &nbsp;&nbsp;=&nbsp;&nbsp; <?php echo $temp_result; ?>˚ Fahrenheit
<?php } elseif ($temp_conv == "f_to_c") { ?>
		<?php echo $temp_input; ?>˚ Fahrenheit &nbsp;&nbsp;=&nbsp;&nbsp; <?php echo $temp_result; ?>˚ Celcius
<?php } ?>
	</div>

</div>

</body>
</html>