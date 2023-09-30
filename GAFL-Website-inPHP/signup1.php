<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>

<style>
body {
	background: white;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: #888;
	font-size: 18px;
	padding: 10px;
}

button {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	opacity: .7;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
}

.ca {
	font-size: 14px;
	display: inline-block;
	padding: 10px;
	text-decoration: none;
	color: #444;
}
.ca:hover {
	text-decoration: underline;
} 

.username {
     display:block;
}

.ib_option {
     display:block;
     margin-left:10px;
     width:415px;
     height:45px;
     border-radius:7px;
     border-color:#cccccc;
     border-width:2px;
     margin-top:15px;
     margin-bottom:10px;
}


</style>

</head>
<body>

<center>
		<img class="logos" src="gaflXib.PNG">
      </center>
      
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>IB Year</label>
          <?php if (isset($_GET['ib_year'])) { ?>
               <select name="ib_year" class="ib_option">
                    <option value="">--Select--</option>
                    <option value="IB10">IB 10</option>
                    <option value="IB11">IB 11</option>
                    <option value="IB12">IB 12</option>
                    <option value="IB13">IB 13</option>
                    <option value="IB14">IB 14</option>

          </select>
          <?php }else{ ?>
               <select name="ib_year" class="ib_option">
                    <option value="">--Select--</option>
                    <option value="IB10">IB 10</option>
                    <option value="IB11">IB 11</option>
                    <option value="IB12">IB 12</option>
                    <option value="IB13">IB 13</option>
                    <option value="IB14">IB 14</option>

          </select>
          <?php }?>


          <label class="username">User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>

          <label>GAFL Email</label>
          <?php if (isset($_GET['email_add'])) { ?>
               <input type="text" 
                      name="email_add" 
                      placeholder="00s0000@gafl.hs.kr"
                      value="<?php echo $_GET['email_add']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email_add" 
                      placeholder="00s0000@gafl.hs.kr"><br>
          <?php }?>

     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Confirm Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Confirm Password"><br>

     	<button type="submit" >Sign Up</button>

          <a href="login-index.php" class="ca">Back to login page</a>
     </form>
</body>
</html>