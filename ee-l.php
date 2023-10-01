<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Extended Essay
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
    echo '<div class="ee">';
    echo '<center><p><strong>Extended Essay (EE)</strong></p></center>';
    echo '<p>The Extended Essay, also known as EE, is one of the core elements of IB that is mandatory for all students. In order to achieve an IB Diploma, you should pass the EE, by getting a minimum of D. EE is an independent piece of research, culminating with a 4,000-word paper.';
    echo '</p>';
    echo '<p>The Extended Essay provides:</p>';
    echo '<ul>';
    echo '<li>Practical preparation for undergraduate research';
    echo '</li>';
    echo '<li>An opportunity for students to investigate a topic of personal interest to them, which relates to one of the student’s six DP subjects, or takes the interdisciplinary approach of a World Studies Extended Essay.';
    echo '</li>';
    echo '</ul>';
    echo '<p>Through the research process for the Extended Essay, students develop skills in:';
    echo '</p>';
    echo '<ul>';
    echo '<li>';
    echo 'Formulating an appropriate research question';
    echo '</li>';
    echo '<li>Engaging in a personal exploration of the topic';
    echo '</li>';
    echo '<li>Communicating ideas';
    echo '</li>';
    echo '<li>Developing an argument';
    echo '</li>';
    echo '</ul>';
    echo '<p>Participation in this process develops the capacity to analyze, synthesize and evaluate knowledge.';
    echo '</p>';
    echo '<p>An Extended Essay can also be undertaken in world studies, where students carry out an in-depth interdisciplinary study of an issue of contemporary global significance, across two IB diploma disciplines.';
    echo '</p>';
    echo '<p>Students are supported throughout the process of researching and writing the Extended Essay, with advice and guidance from a supervisor who is usually a teacher at the school.';
    echo '</p>';
    echo '<p>Students are required to have three mandatory reflection sessions with their supervisors. The final session, a concluding interview, is also known as <i>viva voce</i>.';
    echo '</p>';
    echo '<p>The Extended Essay and reflection sessions can be a valuable stimulus for discussion in countries where interviews are required prior to acceptance for employment or for a place at university.';
    echo '</p>';
    echo '<center><a href="https://resources.ibo.org/"target="_blank">EE Example</a></center>';
    echo '</div>';
    echo '<div class="pontee">';
    echo '<center><a href="https://sites.google.com/view/edsgaflenglish/home?authuser=0"target="_blank">Mr. Pontee\'s Website</a></center>';
    echo '</div>';
    echo '<center>';
    echo '<img class="ee-photo" src="ee-phto.png">';
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