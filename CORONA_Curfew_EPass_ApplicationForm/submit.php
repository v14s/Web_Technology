<?php
    $full_name = $_POST['full_name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$purpose = $_POST['purpose'];
	$v_no = $_POST['v_no'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','epass');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into form(full_name,phone,address,purpose,v_no) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss",$full_name,$phone,$address,$purpose,$v_no);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
