<?php
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$number=$_POST['number'];
	
	$cvc=$_POST['cvc'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$zip=$_POST['zip'];
	$email=$_POST['email'];

	$conn= new mysqli('localhost','root','','test');
	if($conn->connect_error){
		die('Connection Failed :'.$conn->connect_error);

	}
	else{
		$stmt = $conn->prepare("insert into booking(firstname,lastname,number,cvc,address,city,zip, email) values(?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssiissis",$firstname,$lastname, $number,$cvc,$address, $city ,$zip, $email);
		$stmt->execute();
		echo "registred Suucessfully...";
		$stmt->close();
		$conn->close();
	}

?>