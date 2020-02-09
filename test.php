<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Cell Identifier</title>
</head>
<body>
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
</style>
<font color="white">
<br>
<img src="cellexample.png">
<br>
Rules of the image submitted
<br>
<ul>
  <li>One cell</li>
  <li>Colored with a dye</li>
  <li>Must be png</li>
</ul>
<form action="loading.php" method="post" enctype="multipart/form-data">

  		Your image: <input type="file" name="pic" accept="image/png" id="pic"><br>
		<input type = "submit" name="submit" style="font_color='white'"> 
		
	</form>
</font>
</body>
</html>