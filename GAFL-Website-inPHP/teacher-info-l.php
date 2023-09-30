<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>
       Teacher Information
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


.teacher-info {
    font-family: Arial, Helvetica, sans-serif;
    display:inline-block;
    margin-left:auto;
    margin-right:auto;
    width:80%;
}

.ib-coordinator {
    display:inline-block;
    margin-left:auto;
    margin-right:auto;
}
.ib-math {
    display:inline-block;
    margin-left:auto;
    margin-right:auto;
}

.ib-chemistry {
    display: inline-block;
    margin-left:auto;
    margin-right:auto;
}

.ib-biology {
    display:inline-block;
    margin-left:auto;
    margin-right:auto;
}

.ib-eng-a {
    display:inline-block;
    margin-left:auto;
    margin-right:auto;
}

.ib-eng-b {
    display:inline-block;
    margin-left:auto;
    margin-right:auto;
    margin-top:50px;
}

.ib-chinese {
    display:inline-block;
    margin-left:auto;
    margin-right:auto;
}

.ib-japanese {
    display:inline-block;
    margin-left:auto;
    margin-right:auto;
}

.ib-economics {
    display:inline-block;
    margin-left:auto;
    margin-right:auto;
}

.ib-history {
    display:inline-block;
    margin-left:auto;
    margin-right:auto;
}

.ib-korean {
    display:inline-block;
    margin-left:auto;
    margin-right:auto;
    margin-top:50px;
}

.ib-film {
    display:inline-block;
    margin-left:auto;
    margin-right:auto;
}

.ib-tok {
    display:inline-block;
    margin-left:auto;
    margin-right:auto;
}

.ib-adv-eng-conv {
    display:inline-block;
    margin-left:auto;
    margin-right:auto;
}

.ib-ee {
    display:inline-block;
    margin-left:auto;
    margin-right:auto;
}

.welcome {
  font-size:20px;
  display:inline-block;
  margin-left:30px;
  font-family:arial;
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

    <center><p class="title"><strong>IB Teacher Contact Information</strong></p></center>
<center><div class="teacher-info">
    

    <div class="ib-coordinator">
<center><p><strong>IB Coordinator</strong></p></center>
<ul>
    <li>Name: Tony Cartmel</li>
    <li>Office Location: Global Hall 1F</li>
    <li><a href = "mailto:tcartmel@gafl.hs.kr?subject = Feedback&body = Message" target="_blank">
        Send an E-Mail to Mr.Cartmel
        </a></li>
</ul><br>
    </div>

    <div class="ib-math">
        <center><p><strong>IB Mathematics</strong></p></center>
        <ul>
            <li>Name: Hansol Kim</li>
            <li>Office Location: Domestic 4F</li>
            <li><a href = "mailto:hkimmath@gafl.hs.kr?subject = Feedback&body = Message" target="_blank">
                Send an E-Mail to Mr.Hansol
                </a></li>
        </ul><br>
            </div>

            <div class="ib-chemistry">
                <center><p><strong>IB Chemistry</strong></p></center>
                <ul>
                    <li>Name: Kenneth Gassar</li>
                    <li>Office Location: Global Hall 1F</li>
                    <li><a href = "mailto:therealkennyg@hotmail.co.uk?subject = Feedback&body = Message" target="_blank">
                        Send an E-Mail to Mr.Gassar
                        </a></li>
                </ul><br>
                    </div>
                    <div class="ib-biology">
                        <center><p><strong>IB Biology</strong></p></center>
                        <ul>
                            <li>Name: Maria Castanares</li>
                            <li>Office Location: Global Hall 1F</li>
                            <li><a href = "mailto:castanaresmafe@gmail.com?subject = Feedback&body = Message" target="_blank">
                                Send an E-Mail to Mrs.Mafe
                                </a></li>
                        </ul><br>
                            </div>
                            <div class="ib-eng-a">
                                <center><p><strong>IB English A</strong></p></center>
                                <ul>
                                    <li>Name: David Burns</li>
                                    <li>Office Location: Global Hall 1F</li>
                                    <li><a href = "mailto:Davidpeterburns@gafl.hs.kr?subject = Feedback&body = Message" target="_blank">
                                        Send an E-Mail to Mr.Burns
                                        </a></li>
                                </ul><br>
                                    </div>
                                    <div class="ib-eng-b">
                                        <center><p><strong>IB English B</strong></p></center>
                                        <ul>
                                            <li>Name: Chris Reese</li>
                                            <li>Office Location: Global Hall 1F</li>
                                            <li><a href = "mailto:christeachair@gmail.com?subject = Feedback&body = Message" target="_blank">
                                                Send an E-Mail to Mr.Chris
                                                </a></li>
                                        </ul><br>
                                            </div>
                                            <div class="ib-chinese">
                                                <center><p><strong>IB Chinese</strong></p></center>
                                                <ul>
                                                    <li>Name: Deng Xin</li>
                                                    <li>Office Location: Global Hall 1F</li>
                                                    <li><a href = "mailto:dengxin198641@gmail.com?subject = Feedback&body = Message" target="_blank">
                                                        Send an E-Mail to Ms.Deng
                                                        </a></li>
                                                </ul><br>
                                                    </div>
                                                    <div class="ib-japanese">
                                                        <center><p><strong>IB Japanese</strong></p></center>
                                                        <ul>
                                                            <li>Name: Hayato Tsukizaki</li>
                                                            <li>Office Location: Global Hall 1F</li>
                                                            <li><a href = "mailto:mooncapeymb@yahoo.co.jp?subject = Feedback&body = Message" target="_blank">
                                                                Send an E-Mail to Mr.Hayato
                                                                </a></li>
                                                        </ul><br>
                                                            </div>
                                                            <div class="ib-economics">
                                                                <center><p><strong>IB Economics</strong></p></center>
                                                                <ul>
                                                                    <li>Name: Case Shay</li>
                                                                    <li>Office Location: Global Hall 1F</li>
                                                                    <li><a href = "mailto:jcshayib@gmail.com?subject = Feedback&body = Message" target="_blank">
                                                                        Send an E-Mail to Mr.Case
                                                                        </a></li>
                                                                </ul><br>
                                                                    </div>
                                                                    <div class="ib-history">
                                                                        <center><p><strong>IB History</strong></p></center>
                                                                        <ul>
                                                                            <li>Name: Richard Pertwee</li>
                                                                            <li>Office Location: Global Hall 1F</li>
                                                                            <li><a href = "mailto:richard@gafl.hs.kr?subject = Feedback&body = Message" target="_blank">
                                                                                Send an E-Mail to Mr.Richard
                                                                                </a></li>
                                                                        </ul><br>
                                                                            </div>
                                                                            <div class="ib-korean">
                                                                                <center><p><strong>IB Korean</strong></p></center>
                                                                                <ul>
                                                                                    <li>Name: Hyunjin Kim</li>
                                                                                    <li>Office Location: Global Hall 1F</li>
                                                                                    <li><a href = "mailto:a51265899@gmail.com?subject = Feedback&body = Message" target="_blank">
                                                                                        Send an E-Mail to Mrs.Hyunjin
                                                                                        </a></li>
                                                                                </ul><br>
                                                                                    </div>
                                                                                    <div class="ib-film">
                                                                                        <center><p><strong>IB Film</strong></p></center>
                                                                                        <ul>
                                                                                            <li>Name: Shane McAllister</li>
                                                                                            <li>Office Location: Global Hall 1F</li>
                                                                                            <li><a href = "mailto:mcallister.shanemichael@gmail.com?subject = Feedback&body = Message" target="_blank">
                                                                                                Send an E-Mail to Mr.McAllister
                                                                                                </a></li>
                                                                                        </ul><br>
                                                                                            </div>
                                                                                            <div class="ib-tok">
                                                                                                <center><p><strong>Theory of Knowledge (TOK)</strong></p></center>
                                                                                                <ul>
                                                                                                    <li>Name: Shane McAllister</li>
                                                                                                    <li>Office Location: Global Hall 1F</li>
                                                                                                    <li><a href = "mailto:mcallister.shanemichael@gmail.com?subject = Feedback&body = Message" target="_blank">
                                                                                                        Send an E-Mail to Mr.McAllister
                                                                                                        </a></li>
                                                                                                </ul><br>
                                                                                                    </div>
                                                                                                    <div class="ib-adv-eng-conv">
                                                                                                        <center><p><strong>Advanced English Conversation</strong></p></center>
                                                                                                        <ul>
                                                                                                            <li>Name: Edward (Ed) Pontee</li>
                                                                                                            <li>Office Location: Global Hall 1F</li>
                                                                                                            <li><a href = "mailto:pontee.english@gmail.com?subject = Feedback&body = Message" target="_blank">
                                                                                                                Send an E-Mail to Mr.Pontee
                                                                                                                </a></li>
                                                                                                        </ul><br>
                                                                                                            </div>
                                                                                                            <div class="ib-ee">
                                                                                                                <center><p><strong>Extended Essay (EE)</strong></p></center>
                                                                                                                <ul>
                                                                                                                    <li>Name: Edward (Ed) Pontee</li>
                                                                                                                    <li>Office Location: Global Hall 1F</li>
                                                                                                                    <li><a href = "mailto:pontee.english@gmail.com?subject = Feedback&body = Message" target="_blank">
                                                                                                                        Send an E-Mail to Mr.Pontee
                                                                                                                        </a></li>
                                                                                                                </ul><br>
                                                                                                                    </div></center>
                                                                                            
</div>


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