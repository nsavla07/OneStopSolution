

<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
    $service = $_POST['service'];
    $experience = $_POST['experience'];
    

	// Database connection
	$conn = new mysqli('localhost','root','','workers');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into workers(firstName, lastName, mobile, email, gender, age, service, experience) values(?,?,?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssississ", $firstName, $lastName, $mobile, $email,  $gender,$age, $service, $experience);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully!! Will get back to you soon...";
		// header("Location: homepage.php");
		
		$stmt->close();
		$conn->close();
	}
?>