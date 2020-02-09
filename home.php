<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<head>
<meta charset="ISO-8859-1">
<title>Cell Identifier</title>
</head>
<body>
<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="test.php">Test</a>
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
<font color="white" size="6">
Our goal
</font>
<br>
<br>
<font color="white" size="4">
<div class="row">
  <div class="col-sm-4"><img src="Malaria.jpg" style ="width: 100%">
</div>
  <div class="col-sm-8">Causing more than one million deaths per year, malaria is one of the most dangerous diseases facing our modern world. While it has been largely eradicated in many developed countries, malaria ravages throughout Africa, with around 30% of clinical visits being attributed to malaria (Unicef). Problematically, many lab testers lack experience with detecting infected cells and the disease may remain untreated as a result. Our goal is to automate malaria diagnosis through machine learning in order to lessen the burden on doctors treating malaria. The use of our platform as an extra step to the testing process could increase the likelihood that the disease could be identified and the relatively simple treatment could be administered. 
</div>
</div>
</font>
<br>
<br>
<font color="white" size="6">
What is malaria?
</font>
<br>
<br>
<font color="white" size="4">
<div class="row">
<div class="col-sm-8">Malaria is caused by a plasmodium parasite, which is transmitted through the bites of infected mosquitos. Fifteen days after the first bite, malaria’s symptoms start out mild:
<ul>
<li>Fever</li>
<li>Headache</li>
<li>Chills</li>
</ul>
However, if not treated within 24 hours, malaria frequently leads to death causing organ failure in adults and has a mortality rate of 44.1% in Africa(World Health Organization). 
</div>
<div class="col-sm-4"><img src="malariasymptoms.png" style ="width: 100%">
</div>
</div>

</font>
<br>
<br>
<font color="white" size="6">
Our Program
</font>
<br>	
<br>
<font color="white" size="4">
<div class="row">
  <div class="col-sm-4"><img src="malariacell.png" style ="width: 100%">
</div>
<div class="col-sm-8">Malaria parasites can be found in patients by analyzing blood samples under a microscope. The blood is stained beforehand to give the parasites a distinctive experience (Center for Disease Control and Prevention). Our program analyzes twenty thousand images of both infected and uninfected blood cells to differentiate between them. After analyzing twenty thousand images, the program flattens out at a 95% analysis success rate, meaning if given twenty malaria cells, the program is able to successfully diagnose nineteen of them on average. Due to the relatively general applications of our algorithm, with datasets of other diseases, it could easily be adapted to diagnose other infections in cells.
</div>
</div>
</font>
<br> <br>
</body>
</html>