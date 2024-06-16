

<?php
	
	$date = $_POST['date'];
	$time = $_POST['time'];
	$description = $_POST['description'];
	$pay = $_POST['pay'];;
    

	// Database connection
	$conn = new mysqli('localhost','root','','payment');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into workers(date, time, description, pay) values(?,?,?, ?)");
		$stmt->bind_param("iiss", $date, $time, $description, $pay);
		$execval = $stmt->execute();
		echo $execval;
		echo "Payment successful!!!";
		// header("Location: homepage.php");
		$stmt->close();
		$conn->close();
	}
?>