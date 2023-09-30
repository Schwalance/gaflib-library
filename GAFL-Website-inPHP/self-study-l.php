<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Self Study Check In
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


.self-study-title {
  font-family: Arial, Helvetica, sans-serif;
  font-size:25px;
}

.self-study-description {
  font-family:Arial, Helvetica, sans-serif;
  width:50%;
  text-align:center;
  margin-left:auto;
  margin-right:auto;
}

.self-study-description {
  line-height:2;
  width:80%;
}

.self-study {
  width: 500px;
  margin: 0 auto;
  padding: 50px;
}

div.elem-group {
  margin: 20px 0;
}



label {
  display: block;
  font-family: 'Nanum Gothic';
  padding-bottom: 10px;
  font-size: 1.25em;
}

input, select, textarea {
  border-radius: 2px;
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  width: 100%;
  padding: 10px;
}



textarea {
  height: 250px;
}

hr {
  border: 1px dotted #ccc;
}

button {
  height: 50px;
  background: orange;
  border: none;
  color: white;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  border: 2px solid black;
}

.welcome {
  font-size:20px;
  display:inline-block;
  margin-left:30px;
  font-family:arial;
}

</style>
</style>
<script>
  const scriptURL = '<https://script.google.com/macros/s/AKfycbwt_MkGzAd8vUuE0vTpRKYC99ypH-oXES5FzCiz2wADr561kECAp78YEYXj8KKCMY0q/exec>'
  const form = document.forms[booking-meeting]

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => console.log('Success!', response))
      .catch(error => console.error('Error!', error.message))
  })
</script>
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


    <div class="self-study-title"><center><p><strong>Self Study Check-In</strong></p></center></div>
<div class="self-study-description">
  <p>
    Please be noted that if you do not indicate your study location by 16:00, you will be issued an OG card. As OG accumulates, the punishment regulations. For additional ASG rules, please refer to the photo attached to the notice or the “2023 IB Self-study Guidelines" posted in the Global Hall.
    Please ask any inquiries to the 13th and 14th Disciplinary Department.
  </p>
</div>

  <div class="self-study">
    <form action="https://script.google.com/macros/s/AKfycbyI3YXxqMuNeRFwBSoLhgqA22cohr-M-3MV5NYgMjqILAQ-7dVXXuPGLrDyQ3OI-M9OfA/exec" name="Self-Study-Check-In" method="POST">

      <div class="elem-group">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="Student_Name" placeholder="HongGil Dong" pattern=[A-Z\sa-z]{3,20} required>
      </div>

      <div class="elem-group">
        <label for="student-number">Your Student Number</label>
        <input type="number" id="Student_Number" name="Student_Number" placeholder="0000" pattern=(\d{4}) required>
      </div>

      <div class="elem-group inlined">
        <label for="checkin-date">Date</label>
        <input type="date" id="check-in-Date" name="Check-In-Date" required>
      </div>

      <div class="elem-group">
        <label for="grade-level">Grade Level</label>
        <select id="grade-level" name="Grade_Level" required>
            <option value="">Choose a Grade Level for Check In</option>
            <option value="PreDP3">PreDP 3 &#183 1-3</option>
            <option value="PreDP4">PreDP 4 &#183 1-4</option>
            <option value="DP1">DP1 &#183 IB13</option>
            <option value="DP2">DP2 &#183 IB14</option>
        </select>
      </div>

      <div class="elem-group">
        <label for="asg2">ASG2 Location</label>
        <select id="asg2" name="ASG2_Location" required>
            <option value="">Choose a Location to Stay at ASG2</option>
            <option value="9th Period">9th Period</option>
            <option value="Home Room">Home Room</option>
            <option value="PreDP Self Study Room">PreDP Self Study Room</option>
            <option value="DP1 Self Study Room">DP1 Self Study Room</option>
            <option value="DP2 Self Study Room">DP2 Self Study Room</option>
            <option value="GH303 (Eng A Classroom)">GH303 &#183 Eng A Classroom</option>
            <option value="Japanese-Cafe">Japanese Cafe</option>
            <option value="Lacrosse">Lacrosse</option>
        </select>
      </div>

      <div class="elem-group">
        <label for="asg3">ASG3 Location</label>
        <select id="asg3" name="ASG3_Location" required>
            <option value="">Choose a Location to Stay at ASG3</option>
            <option value="9th Period">9th Period</option>
            <option value="Home Room">Home Room</option>
            <option value="PreDP Self Study Room">PreDP Self Study Room</option>
            <option value="DP1 Self Study Room">DP1 Self Study Room</option>
            <option value="DP2 Self Study Room">DP2 Self Study Room</option>
            <option value="GH303 (Eng A Classroom)">GH303 &#183 Eng A Classroom</option>
            <option value="Japanese-Cafe">Japanese Cafe</option>
            <option value="Lacrosse">Lacrosse</option>
        </select>
      </div>

      <div class="elem-group">
        <label for="message">Notes</label>
        <textarea id="message" name="Additional_Information" placeholder="Tell us anything else that might be important." ></textarea>
      </div>

      <center><button type="submit" onclick="alert('Your Form has been Successfully Submitted')" action="self-study-l.php">Check-In</button></form></center>
  </div>
  
  <script src="google-sheet.js"></script>

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