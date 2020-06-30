<?php
	 /*$user = $_POST['user'];
	$password = $_POST['password']; */
	 $user = $_POST['user'];
  	 $firstName = $_POST['firstName'];
     $lastName = $_POST['lastName'];
     $email = $_POST['email'];
     $password = $_POST['password'];

     //Database connection
     $conn = new mysqli('localhost','root','','sidhart1_wdm');
     if($conn->connect_error){
     	die('connection failed : '.$conn->connect_error);
     } else {
     	$stmt = $conn->prepare("insert into Sign_up(User, First_name, Last_name, User_emailID, User_Password)
     		values(?, ?, ?, ?, ?)");
     	$stmt->bind_param("issss",$user, $firstName, $lastName, $email, $password);
     	$stmt->execute();
     	echo "successful";
     	$stmt->close();
     	$conn->close();
     }
    


?>