<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>
        CAS
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

    <div class="navbar">
      <a href="home.php">Home</a>

      <div class="dropdown">
        <button class="dropbtn">About GAFL IB
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="what-is-ibdp-l.php">What is IBDP</a>
            <a href="university-result-l.php">University Results</a>
        </div>
        </div>


      <a href="announcement-l.php">Announcements</a>

      <div class="dropdown">
        <button class="dropbtn">IB Subjects Bulletin Board
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="math-l.php">IB Mathematics SL/HL</a>
            <a href="chem-l.php">IB Chemistry SL/HL</a>
            <a href="english-a-l.php">IB English A HL</a>
            <a href="english-b-l.php">IB English B HL</a>
            <a href="chinese-l.php">IB Chinese B SL</a>
            <a href="japanese-l.php">IB Japanese B SL</a>
            <a href="korean-l.php">IB Korean A SL/HL</a>
            <a href="econ-l.php">IB Economics SL/HL</a>
            <a href="history-l.php">IB History SL/HL</a>
            <a href="tok-l.php">TOK</a>
            <a href="ee-l.php">EE</a>
            <a href="cas-l.php">CAS</a>
        </div>
      </div>
      <a href="cas-recruit-board-l.php">CAS Recruit Board</a>
      <a href="past-papers-library-l.php">Past Papers Library</a>
      <a href="ib-graduates-l.php">IB Graduates</a>


      <div class="dropdown">
        <button class="dropbtn">Calendar
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="gaflib-calendar.php">GAFL IB Calendar</a>
            <a href="predp-calendar.php">Pre DP Calendar</a>
            <a href="dp1-calendar.php">DP 1 Calendar</a>
            <a href="dp2-calendar.php">DP 2 Calendar</a>
        </div>
        </div>

      <a href="teacher-info-l.php">Teacher Information</a>
      <a href="book-meeting-l.php">Book Meeting</a>
      <div class="dropdown">
        <button class="dropbtn">Resources
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="ibqb.php">IB Question Bank</a>
            <a href="ibstudyguide.php">IB Study Guides</a>
            <a href="inthinking.php">InThinking</a>
            <a href="savemyexam.php">Save My Exams</a>

        </div>
        </div>
      <a href="thought-bubbles-l.php">Thought Bubbles</a>
      <a href="self-study-l.php">Self Study Check-In</a>

    </div>

    <?php
    echo '<div class="cas">';
    echo '<center><p><strong>Creativity, Activity, Service (CAS)</strong></p></center>';
    echo '<p>Creativity, Activity, and Service, also known as CAS, is one of the core elements of IB that is mandatory for all students. Studied throughout the Diploma Programme, CAS involves students in a range of activities alongside their academic studies.';
    echo '</p>';
    echo '<p>It is not formally assessed; however, students reflect on their CAS experiences as part of the DP, and provide evidence of achieve the seven learning outcomes for CAS.';
    echo '</p>';
    echo '<p>The three strands of CAS, which are often interwoven with particular activities, are characterized as follows:';
    echo '</p>';
    echo '<ul>';
    echo '<li>Creativity: arts, and other experiences that involve creative thinking.';
    echo '</li>';
    echo '<li>';
    echo 'Activity: physical exertion contributing to a healthy lifestyle, complementing academic work elsewhere in the DP.';
    echo '</li>';
    echo '<li>Service: an unpaid voluntary exchange that has a learning benefit for the student. The rights, dignity and autonomy of all those involved are respected.';
    echo '</li>';
    echo '</ul>';
    echo '<p>In order to demonstrate these concepts, students are required to undertake a CAS project. The project challenges students to:';
    echo '</p>';
    echo '<ul>';
    echo '<li>Show initiative</li>';
    echo '<li>Demonstrate perseverance</li>';
    echo '<li>Develop skills such as collaboration, problem solving and decision making.';
    echo '</li>';
    echo '</ul>';
    echo '<p>CAS enables students to enhance their personal and interpersonal development by learning through experience.</p>';
    echo '<p>It provides opportunities for self-determination and collaboration with others, fostering a sense of accomplishment and enjoyment from their work.';
    echo '</p>';
    echo '<p>At the same time, CAS is an important counterbalance to the academic pressures of the DP.';
    echo '</p>';
    echo '</div>';
    echo '<center><img class="cas-photo" src="cas-photo.png"></center>';
    echo '';
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