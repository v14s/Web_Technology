<?php
    $Com = $_POST['company'];
	$fName = $_POST['first_name'];
	$lName = $_POST['last_name'];
	$email1 = $_POST['email'];
    $phno = $_POST['phone'];
	$addr = $_POST['address'];
	$City1 = $_POST['city'];
    $State1 = $_POST['state'];

	// Database connection
	$conn = new mysqli('localhost','root','','testing');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into user(company,first_name,last_name,email,phone,address,city,state) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssss",$Com,$fName, $lName, $email1, $phno, $addr, $City1, $State1);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
