<!DOCTYPE html>
<html>

<body>
<center>
		<img class="logos" src="gaflXib.PNG">
      </center>
</body>
<html>

<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = mysqli_real_escape_string($conn, $_POST['uname']);
	$pass = mysqli_real_escape_string($conn, $_POST['password']);
	$admin = mysqli_real_escape_string($conn, $_POST['uadmin']);
	$upass = mysqli_real_escape_string($conn, $_POST['upass']);


	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);

			if($row["user_type"]=="admin")
			{
				header("Location: http://118.220.109.189/phpmyadmin");
				exit();
			}


            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: login-index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: login-index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: login-index.php");
	exit();
}