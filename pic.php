
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
                echo "The file " . basename($fileName) . " has been uploaded";
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
	$result = file_get_contents("test.json");
	$result = json_decode($result, false);
	echo $result;
	
?>