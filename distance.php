<div><a href="index.php">Home</a></div>

<?php
include ("unit-conv-functions.php");
$thisPage = "distance.php";
?>

<?php
if ($_POST) {
	// Create dist_input var.
	$dist_input = ($_POST['dist_input'])+0.0;
	// Create var from conversion selection.
	$dist_conv = $_POST['dist_choices'];
	// Create new instance of disterature class using dist_input.
	$dist1 = new Distance($dist_input);

	if ($dist_conv == "k_to_m") {
		$dist_result = round($dist1->kilometersToMiles(),2);
	} elseif ($dist_conv == "m_to_k") {
		$dist_result = round($dist1->milesToKilometers(), 2);
	}
}
?>

<html>
<head>
	<title>Distance Conversion</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Distance Conversion</h1>
<h2>(numbers only...use a decimal if needed)</h2>

<div>
	<br>
	<br>
	<br>
	<br>
	<form method="post" action="<?php echo $thisPage;?>">
		Distance to Convert:
		&nbsp;&nbsp;
		<label><input type="number" name="dist_input" value=""></label>
		&nbsp;&nbsp;
		Conversion Type: 
		&nbsp;&nbsp;
		<select name="dist_choices">
			<option value="k_to_m" name=""> Kilometers to Miles </option>
			<option value="m_to_k" name=""> Miles to Kilometers </option>
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
<?php if ($dist_conv == "k_to_m") { ?>
		<?php echo $dist_input; ?> Kilometers &nbsp;&nbsp;=&nbsp;&nbsp; <?php echo $dist_result; ?> Miles
<?php } elseif ($dist_conv == "m_to_k") { ?>
		<?php echo $dist_input; ?> Miles &nbsp;&nbsp;=&nbsp;&nbsp; <?php echo $dist_result; ?> Kilometers
<?php } ?>
	</div>
</div>

</body>
</html>