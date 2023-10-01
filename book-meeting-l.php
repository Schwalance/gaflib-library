<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>
       Book Meeting
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="ib-logo.png" />
    <script>
var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if(date < 10) {
  date = '0' + date;
}
if(month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
}
</script>

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


.book-meeting {
  width: 500px;
  margin: 0 auto;
  padding: 50px;
}

div.elem-group {
  margin: 20px 0;
}



label {
  display: block;
  font-family: Arial, Helvetica, sans-serif;
  padding-bottom: 10px;
  font-size: 1.25em;
}

input, select, textarea {
  border-radius: 2px;
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: 1.25em;
  font-family: Arial, Helvetica, sans-serif;
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
  font-family: Arial, Helvetica, sans-serif;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  border: 2px solid black;
}

.book-meeting {
  font-family: Arial, Helvetica, sans-serif;
}

.book-meeting-title {
  font-family: Arial, Helvetica, sans-serif;
  font-size:25px;
}

.book-meeting-description {
  font-family:Arial, Helvetica, sans-serif;
  width:50%;
  text-align:center;
  margin-left:auto;
  margin-right:auto;
}

.book-meeting-description {
  line-height:2;
  width:80%;
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

    <div class="book-meeting-title"><center><p><strong>Book an Appointment</strong></p></center></div>
<div class="book-meeting-description">
  <p>Please Note that the time of appointment might change based on the schedule of the teacher. The book Appointment system does not assure the appointment, but this website will send an email to the teacher to confirm the appointment schedule. When the teacher confirms the appointment, the website will send an email back to the student with specific information about the appointment. </p>
</div>

  <div class="book-meeting">
    <form name="booking-meeting" action="https://formsubmit.co/ibcommittee1213@gmail.com" method="POST">
      <div class="elem-group">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="Student_Name" placeholder="HongGil Dong" pattern=[A-Z\sa-z]{3,20} required>
      </div>
      <div class="elem-group">
        <label for="student-number">Your Student Number</label>
        <input type="number" id="Student_Number" name="Student_Number" placeholder="0000" pattern=(\d{4}) required>
      </div>
      <div class="elem-group">
        <label for="email">Your E-mail</label>
        <input type="email" id="email" name="Student_Email" placeholder="00s0000@gafl.hs.kr" required>
      </div>
      <div class="elem-group">
        <label for="phone">Your Phone</label>
        <input type="tel" id="phone" name="Student_Contact_Info" placeholder="010-1234-5678" pattern=(\d{3})-?\s?(\d{4})-?\s?(\d{4}) required>
      </div>
      <div class="elem-group">
        <label for="Subject_Selection">Subject</label>
        <select id="Subject_Selection" name="Subject" required>
            <option value="">Choose a Subject for an Appointment</option>
            <option value="Counseling">Counselling Session</option>
            <option value="IB_Math">IB Mathematics</option>
            <option value="IB_Eng_A">IB English A</option>
            <option value="IB_Eng_B">IB English B</option>
            <option value="IB_Chinese">IB Chinese B</option>
            <option value="IB_Japanese">IB Japanese B</option>
            <option value="IB_Korean">IB Korean A</option>
            <option value="IB_Economics">IB Economics</option>
            <option value="IB_History">IB History</option>
            <option value="IB_Chemistry">IB Chemistry</option>
            <option value="IB_Biology">IB Biology</option>
            <option value="IB_Film">IB Film</option>
            <option value="IB_Theater">IB Theater</option>
            <option value="TOK">Theory of Knowledge</option>
            <option value="EE">Extended Essay</option>
            <option value="Adv_Eng_Conv">Advanced English Conversation</option>
        </select>
      </div>

      <div class="elem-group">
        <label for="subject-selection">Subject Teacher</label>
        <select id="subject-teacher" name="Subject-Teacher" required>
            <option value="">Choose a Teacher for an Appointment</option>
            <option value="Tony Cartmel">Mr. Cartmel</option>
            <option value="Kim Hansol">Mr. Hansol</option>
            <option value="David Burns">Mr. Burns</option>
            <option value="Reese Chris">Mr. Chris</option>
            <option value="Xin Deng">Ms. Deng</option>
            <option value="Mr.Hayato">Mr. Hayato</option>
            <option value="Kim Hyunjin">Mrs. Hyunjin</option>
            <option value="Shay Case">Mr. Case</option>
            <option value="Pertwee Richard">Mr. Richard</option>
            <option value="Kenneth Gassar">Mr. Gassar</option>
            <option value="Sofia Mafe">Mrs. Mafe</option>
            <option value="Shane Mcallister">Mr. McAllister</option>
            <option value="Edward Pontee">Mr. Pontee</option>
        </select>
      </div>


      <hr>
      <div class="elem-group inlined">
        <label for="checkin-date">Meeting Date</label>
        <input type="date" id="Meeting-Date" name="Requested_Date" required>
      </div>
      <div class="elem-group">
        <label for="time">Meeting Time</label>
        <input type="time" id="time" name="Requested_Time" placeholder="00:00 AM/PM" pattern=(\d{2})-?\s?(\d{2})-?\s?(\d{2}) required>
      </div>



      <div class="elem-group">
        <label for="room-selection">Select Room Preference</label>
        <select id="room-selection" name="Room_Preference" required>
            <option value="">Choose a Room from the List</option>
            <option value="IB-Office">IB-office</option>
            <option value="HomeRoom">Homeroom</option>
            <option value="Room-204">Room 204</option>
        </select>
      </div>
      <hr>
      <div class="elem-group">
        <label for="message">Meeting Agenda</label>
        <textarea id="message" name="Additional_Information" placeholder="Tell us anything else that might be important." ></textarea>
      </div>
      <center><button type="submit">Request an Appointment</button>
      </form></center>




  </div>

    <footer class="footer">
        <center><p>Phone: 010-8641-3884 &#124 Email: 19s1438@gafl.hs.kr</p></center>
      <center><p class="copyright">&#169 2023 GAFL IT 13. All rights reserved.</p></center>
    </footer>




</body>


</html>

<?php 
}else{
     header("Location: book-meeting-l.php");
     exit();
}
 ?>