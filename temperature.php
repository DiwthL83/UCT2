<div><a href="index.php">Home</a></div>

<?php
include ("unit-conv-functions.php");
$thisPage = "temperature.php";
?>

<?php
if ($_POST) {
	// Create temp_input var.
	$temp_input = ($_POST['temp_input'])+0.0;
	// Create var from conversion selection.
	$temp_conv = $_POST['temp_choices'];
	// Create new instance of Temperature class using temp_input.
	$temp1 = new Temperature($temp_input);

	if ($temp_conv == "c_to_f") {
		$temp_result = round($temp1->celciusToFahrenheit(),4);
	} elseif ($temp_conv == "f_to_c") {
		$temp_result = round($temp1->fahrenheitToCelcius(), 4);
	}
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
	<form method="post" action="<?php echo $thisPage;?>">
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
		<input name="" type="submit" value="CONVERT"/>
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