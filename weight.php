<div><a href="index.php">Home</a></div>

<?php
include ("unit-conv-functions.php");
$thisPage = "weight.php";
?>

<?php
if ($_POST) {
	// Create weight_input var.
	$weight_input = ($_POST['weight_input'])+0.0;
	// Create var from conversion selection.
	$weight_conv = $_POST['weight_choices'];
	// Create new instance of Weight class using weight_input.
	$weight1 = new Weight($weight_input);

	if ($weight_conv == "st_to_lb") {
		$weight_result = round($weight1->stonesToPounds(),2);
	} elseif ($weight_conv == "st_to_kg") {
		$weight_result = round($weight1->stonesToKilograms(), 2);
	} elseif ($weight_conv == "lb_to_st") {
		$weight_result = round($weight1->poundsToStones(), 2);
	} elseif ($weight_conv == "lb_to_kg") {
		$weight_result = round($weight1->poundsToKilograms(), 2);
	} elseif ($weight_conv == "kg_to_st") {
		$weight_result = round($weight1->kilogramsToStones(), 2);
	} elseif ($weight_conv == "kg_to_lb") {
		$weight_result = round($weight1->kilogramsToPounds(), 2);
	}
}
?>

<html>
<head>
	<title>Weight Conversion</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Weight Conversion</h1>
<h2>(numbers only...use a decimal if needed)</h2>

<div>
	<br>
	<br>
	<br>
	<br>
	<form method="post" action="<?php echo $thisPage;?>">
		Weight to Convert:
		&nbsp;&nbsp;
		<label><input type="number" name="weight_input" value=""></label>
		&nbsp;&nbsp;
		Conversion Type: 
		&nbsp;&nbsp;
		<select name="weight_choices">
			<option value="st_to_lb" name=""> Stones to Pounds </option>
			<option value="st_to_kg" name=""> Stones to Kilograms </option>
			<option value="lb_to_st" name=""> Pounds to Stones </option>
			<option value="lb_to_kg" name=""> Pounds to Kilograms </option>
			<option value="kg_to_st" name=""> Kilograms to Stones </option>
			<option value="kg_to_lb" name=""> Kilograms to Pounds </option>
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
<?php if ($weight_conv == "st_to_kg") { ?>
		<?php echo $weight_input; ?> Stones &nbsp;&nbsp;=&nbsp;&nbsp; <?php echo $weight_result; ?> Kilograms
<?php } elseif ($weight_conv == "st_to_lb") { ?>
		<?php echo $weight_input; ?> Stones &nbsp;&nbsp;=&nbsp;&nbsp; <?php echo $weight_result; ?> Pounds
<?php } elseif ($weight_conv == "lb_to_st") { ?>
		<?php echo $weight_input; ?> Pounds &nbsp;&nbsp;=&nbsp;&nbsp; <?php echo $weight_result; ?> Stones
<?php } elseif ($weight_conv == "lb_to_kg") { ?>
		<?php echo $weight_input; ?> Pounds &nbsp;&nbsp;=&nbsp;&nbsp; <?php echo $weight_result; ?> Kilograms
<?php } elseif ($weight_conv == "kg_to_st") { ?>
		<?php echo $weight_input; ?> Kilograms &nbsp;&nbsp;=&nbsp;&nbsp; <?php echo $weight_result; ?> Stones
<?php } elseif ($weight_conv == "kg_to_lb") { ?>
		<?php echo $weight_input; ?> Kilograms &nbsp;&nbsp;=&nbsp;&nbsp; <?php echo $weight_result; ?> Pounds						
<?php } ?>
	</div>
</div>

</body>
</html>