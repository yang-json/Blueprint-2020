<html>
<head>
<meta charset="ISO-8859-1">
<title>Processing...</title>
</head>
<div class="topnav">
  <a href="home.php">Home</a>
  <a class="active" href="test.php">Test</a>
  <a href="memes.php">Memes</a>
  <a href="credits.php">Credits</a>
 
 
</div>
<style>
body {
  background-image: url("loading.gif");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  font-family: Helvetica, sans-serif;
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
<meta content="1; URL=http://localhost/php/pic.php" http-equiv="refresh" />
<body>
<?php 
	$done = 0;
	$currentDir = getcwd();
    $uploadDirectory = "/uploads/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['png']; // Get all the file extensions

    $fileName = $_FILES['pic']['name'];
    $fileSize = $_FILES['pic']['size'];
  	$fileTmpName  = $_FILES['pic']['tmp_name'];
    $fileType = $_FILES['pic']['type'];
	$explode = explode('.',$fileName);
    $fileExtension = strtolower(end($explode));

    $uploadPath = $currentDir . $uploadDirectory . basename($fileName); 
			
    if (isset($_POST['submit'])) {

       	if (! in_array($fileExtension,$fileExtensions)) {
           $errors[] = "This file extension is not allowed. Please upload a PNG file";
        }

		echo "<font color='white'>";
        if (true) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
					
            if ($didUpload) {

				//$loading = 'https://media3.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif';
				//$encoded = base64_encode(file_get_contents($image));
                //echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
				
            } else {
                echo "An error occurred somewhere. Try again";
            }
        } else {
			echo "An error ocurred somewhere.";
			echo "<br>";
            foreach ($errors as $error) {
                echo $error . "\n";
            }
        }
		echo "</font>";
    }
?>

</body>
</html>