<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Thought Bubbles
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

.description {
  width:50%;
  margin-top:10px;
}


.title {
  font-size:30px;
  margin-top:15px;
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


<center><strong><p class="title">Thought Bubbles</p></strong></center>
<center><p class="description">Thought Bubble is the function for only IB Students to express random thoughts. Thoughts can be posted anonymously. Posts that repeat unhealthy content or that are judged to have inappropriate IDs and content, may be deleted without prior notice.</p></center>


<div class="thoughts">


</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "forum");

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $comment = $_POST["comment"];
  $date = date('F d Y, h:i:s A');
  $reply_id = $_POST["reply_id"];

  $query = "INSERT INTO tb_data VALUES('', '$name', '$comment', '$date', '$reply_id')";
  mysqli_query($conn, $query);
}
?>
<html>
  <head></head>
  <style>

    .container1{
      background: white;
      width: 900px;
      margin: 0 auto;
      padding-top: 1px;
      padding-bottom: 5px;
    }
    .question, .reply{
      margin-top: 5px;
      padding: 10px;
      border-bottom: 1px solid black;
      font-family:arial;
      border: 2px solid #ccc;
    }
    .reply{
      border: 2px solid #ccc;
    }
    p{
      margin-top: 5px;
      margin-bottom: 5px;
    }
    form{
      margin: 10px;
    }
    form h3{
      margin-bottom: 5px;
    }
    form input, form textarea{
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }
    .form button.submit, button{
      background: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
      padding: 10px 20px;
      width: 100%;
    }
    button.reply{
      background: black;
    }

    .answers {
      width:70%;
    }
  </style>
  <body>
    <div class="container1">
      <form action = "" method = "post">
        <h3 id ="title">Post Thoughts</h3>
        <input type="hidden" name="reply_id" id="reply_id">
        <input type="text" name="name" placeholder="Your name">
        <textarea class="question" name="comment" placeholder="Your Thoughts"></textarea>
        <button class = "submit" type="submit" name="submit">Submit</button>
      </form>
    </div>

    <center><div class="answers">
    <?php
      $datas = mysqli_query($conn, "SELECT * FROM tb_data WHERE reply_id = 0"); // only select comment and not select reply
      foreach($datas as $data) {
        require 'comment.php';
      }
      ?>
      </div></center>

    <script>
      function reply(id, name){
        title = document.getElementById('title');
        title.innerHTML = "Reply to " + name;
        document.getElementById('reply_id').value = id;
      }
    </script>
  </body>

  <footer class="footer">
        <center><p>Phone: 010-8641-3884 &#124 Email: 19s1438@gafl.hs.kr</p></center>
      <center><p class="copyright">&#169 2023 GAFL IT 13. All rights reserved.</p></center>
    </footer>
</html>




<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
