<html>
<head>
<meta charset="ISO-8859-1">
<title>Cell Identifier</title>
</head>
<div class="topnav">
  <a href="home.php">Home</a>
  <a class="active" href="test.php">Test</a>
  <a href="memes.php">Memes</a>
  <a href="credits.php">Credits</a>
 
 
</div>
<style>
body {
	font-family: Helvetica, sans-serif;
	background-color: #7a7a78;
	font-size: 35px;
}
.topnav {
	background-color: #4f4f4c;
	overflow: hidden;
}

.topnav a{
	float: left;
	color: #ffffff;
	text-align: center;
	padding: 21px 28px;
	text-decoration: none;
	font-size: 24px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
<?php 
	do{
		
		$result = file_get_contents("test.json");
		$result = json_decode($result, false);
		$result = floatval($result);
		sleep(1);
	}while ($result == "0");
	echo "<font color='white'>";
	echo "The cell has a ".$result." percent chance of having malaria";
		echo "<br>";
		echo "Click this image for more info and next steps";
		echo "<br>";
		echo "<a href=\"https://www.nhsinform.scot/illnesses-and-conditions/infections-and-poisoning/malaria\">";
		echo "<img src='recovery.jpg' class='center'>";
		echo "</a>";
	echo "</font>";
	$done = 1;
	$reset = json_encode("0");
	file_put_contents("test.json", $reset);
	
?>
</html>