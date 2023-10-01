<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Chinese
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="ib-logo.png" />
<style>
.body {
  min-height: 100vh;
    max-width: 400px;
    background-color: papayawhip; 
    margin: 0 auto;
}
.ib-logo {
    width:50px;
    
}
.times {
  width:50px;
}

.gafl-logo {
  width:60px;
}
    /* Navbar container */
    .navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}
.logos {
  display:inline-block;
  margin-left:650px;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

.footer {
  margin-top:50px;
}
.footer {
    font-family: sans-serif;
}

.copyright {
  font-size:10px;
  font-style:italic;
}

.login-button {
  margin-bottom:10px;
  margin-left:20px;
}

.welcome {
  font-size:20px;
  display:inline-block;
  margin-left:30px;
  font-family:arial;
}

.logout {
  position:absolute;
  margin-left:1600px;
  margin-top:25px;
  display:inline-block;
  font-family:arial;
  font-size:17px;
}

.myacc {
  display:inline-block;
  position:absolute;
  margin-left:1490px;
  margin-top:25px; 
  font-family:arial;
  font-size:17px;
}

.acc-info-title {
  font-size:30px;
}


</style>
</head>

<body>

<h1 class="welcome">Hello, <?php echo $_SESSION['name']; ?></h1>
<a class="myacc" href="myacc.php">My Account</a>
     <a class="logout" href="logout.php">Logout</a>


        <div class="logos">
          <img class="ib-logo" src="ib-logo.png">
          <img class="times" src="times.png">
          <img class="gafl-logo" src="gafl-logo.jpeg">
        </div>

        <?php
include("menu.php");
?>

    <footer class="footer">
        <center><p>Phone: 010-8641-3884 &#124 Email: 19s1438@gafl.hs.kr</p></center>
      <center><p class="copyright">&#169 2023 GAFL IT 13. All rights reserved.</p></center>
    </footer>




</body>


</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>