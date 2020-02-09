<html>
<head>
<meta charset="ISO-8859-1">
<title>Cell Identifier</title>
</head>
<style>
body {
  background-image: url("loading.gif");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
}
</style>
<?php 
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


        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
					
            if ($didUpload) {
				echo "processing image...";
				
				//$loading = 'https://media3.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif';
				//$encoded = base64_encode(file_get_contents($image));
                //echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
				
            } else {
                echo "An error occurred somewhere. Try again or contact the admin";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
    }
?>
		
<?php 
	echo "hello";
	ob_flush();
	flush();
	do{
		
		$result = file_get_contents("test.json");
		$result = json_decode($result, false);
		sleep(1);
	}while ($result == "0");
			
	if ($result == "1"){
		echo "you have malaria :(";
	} else if ($result == "2") {
		echo "you don't have malaria :(";
	} else {
		echo "an error has ocurred bubbo";
	}
	$reset = json_encode("0");
	file_put_contents("test.json", $reset);
	
?>
</body>
</html>