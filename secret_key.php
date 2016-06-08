<?php
define ('SECRET','xxxxxxxxx');
define ('KEY','FinD_iT_yOuR_sElF');
if(isset($_POST['key'])){
	$key = $_POST['key'];
	if(strcasecmp($key,SECRET) == 0){
		echo "<h3>CONGRATULATION!</h3>";
		echo "<br>";
		echo "KEY IS : <font color='red'><b>".KEY."</b></font>";
	}
	else{
		echo "<font color='red'><b>FAILURE!</b></font>";
	}
}
else{
?>
<html>
<head>
	<title>GimMe The KEY!</title>
</head>
<body>
	<center>
		SECRET KEY<br>
		<form method="POST">
		<input type="text" name="key">
		<input type="submit" value="ACCESS">
		</form>
	</center>
</body>
</html>
<?php
}
?>