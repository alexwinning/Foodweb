<?php
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$resp1 = $_POST['resp1'];
	$resp2 = $_POST['resp2'];
	$resp3 = $_POST['resp3'];
	$resp4 = $_POST['resp4'];
	$selections = $_COOKIE['selection'];
	$plateVal = $_COOKIE['plateVal'];

	$conn = mysqli_connect('localhost', 'awinning', 'Foodwebproj', 'foodweb');

	//Check connection
	if (!$conn){
		echo 'Connection error: ' . mysqli_connect_error();
	}
	else{
		$stmt = $conn->prepare("INSERT INTO user_resp(age, gender, calorieConsump, 
		fatConsump, sugarConsump, snackConsump, selectedFoods, plateType)
		values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("isiiiiss", $age, $gender, $resp1, $resp2, $resp3, $resp4, $selections, $plateVal);
		$stmt->execute();
		echo "Thank You!";
		$stmt->close();
		$conn->close();
	}
?>
