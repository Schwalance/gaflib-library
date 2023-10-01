<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Theory of Knowledge
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


<?php
echo '<div class="tok">';
echo '<center><p><strong>Theory of Knowledge (TOK)</strong></p></center>';
echo '<p>Theory of Knowledge, also known as TOK, is one of the core elements of IB that is mandatory for all students. In order to achieve an IB Diploma, you should pass the TOK, by getting a minimum of D. TOK plays a special role in the IB Diploma Programme, by providing an opportunity for students to reflect on the nature of knowledge, and how we know what we claim to know. TOK requirement is central to the educational philosophy of the DP. The TOK course is assessed through an exhibition and a 1,600-word essay.';
echo '</p>';
echo '<ul>';
echo '<li>The exhibition requires the students to create an exhibition of three objects that explores how TOK manifests in the world around us.';
echo '</li>';
echo '<li>The essay focuses on a conceptual issue in TOK. It may ask students to discuss the claim that the methodologies used to produce knowledge depend on the use to which that knowledge will be used.</li>';
echo '</ul>';
echo '<p>TOK aims to make students aware of the interpretative nature of knowledge, including personal ideological biases - whether these biases are retained, revised or rejected.</p>';
echo '<p>It offers students and their teachers the opportunity to:';
echo '</p>';
echo '<ul>';
echo '<li>Reflect critically on diverse ways of knowing and on areas of knowledge';
echo '</li>';
echo '<li>';
echo 'Consider the role and nature of knowledge in their own culture, in the cultures of others and in the wider world.';
echo '</li>';
echo '</ul>';
echo '<p>TOK prompts students to</p>';
echo '<ul>';
echo '<li>';
echo 'Be aware of themselves as thinkers, encouraging them to become more acquainted with the complexity of knowledge';
echo '</li>';
echo '<li>';
echo 'Recognize the need to act responsibly in an increasingly interconnected but uncertain world.';
echo '</li>';
echo '</ul>';
echo '<p>';
echo 'TOK also provides coherence for the student, by linking academic subject areas as well as transcending them.';
echo '</p>';
echo '<p>';
echo 'It therefore demonstrates the ways in which the student can apply their knowledge with greater awareness and credibility.';
echo '</p>';
echo '<center><a href="https://resources.ibo.org/" target="_blank">TOK Essay Example</a></center>';
echo '</div>';
echo '<center>';
echo '<img class="tok-photo" src="tok-photo.jpeg">';
echo '';
echo '</center>';
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