		
<?php 
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