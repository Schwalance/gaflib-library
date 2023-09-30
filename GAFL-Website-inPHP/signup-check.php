<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])
	&& isset($_POST['email_add'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);
	$email_add = validate($_POST['email_add']);
	$ib_year = validate($_POST['ib_year']);

	$user_data = 'uname='. $uname. '&name='. $name. '$email_add='. $email_add. '&ib_year='. $ib_year;



	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}
	else if(empty($email_add)){
		header("Location: signup.php?error=GAFL Email is required&$user_data");
	}
	else if(empty($ib_year)){
		header("Location: signup.php?error=IB Year is required&$user_data");
	}
	else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}
	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password does not match&$user_data");
	    exit();
	}
	else{



	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name, email_add, ib_year) VALUES('$uname', '$pass', '$name','$email_add','$ib_year')";

           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup1.php?success=Your account has been created successfully");
	         exit();

           }
		   else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}