<?php
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title>';
echo 'Theory of Knowledge';
echo '</title>';
echo '<style>';
echo '.tok,';
echo '.ee,';
echo '.cas {';
echo 'margin-top:50px;';
echo 'font-family:Arial, Helvetica, sans-serif;';
echo '}';
echo '.ib-logo {';
echo 'width:50px;';
echo '';
echo '}';
echo '.times {';
echo 'width:50px;';
echo '}';
echo '';
echo '.gafl-logo {';
echo 'width:60px;';
echo '}';
echo '/* Navbar container */';
echo '.navbar {';
echo 'overflow: hidden;';
echo 'background-color: #333;';
echo 'font-family: Arial;';
echo '}';
echo '';
echo '/* Links inside the navbar */';
echo '.navbar a {';
echo 'float: left;';
echo 'font-size: 16px;';
echo 'color: white;';
echo 'text-align: center;';
echo 'padding: 14px 16px;';
echo 'text-decoration: none;';
echo '}';
echo '';
echo '/* The dropdown container */';
echo '.dropdown {';
echo 'float: left;';
echo 'overflow: hidden;';
echo '}';
echo '';
echo '/* Dropdown button */';
echo '.dropdown .dropbtn {';
echo 'font-size: 16px;';
echo 'border: none;';
echo 'outline: none;';
echo 'color: white;';
echo 'padding: 14px 16px;';
echo 'background-color: inherit;';
echo 'font-family: inherit; /* Important for vertical align on mobile phones */';
echo 'margin: 0; /* Important for vertical align on mobile phones */';
echo '}';
echo '';
echo '/* Add a red background color to navbar links on hover */';
echo '.navbar a:hover, .dropdown:hover .dropbtn {';
echo 'background-color: red;';
echo '}';
echo '';
echo '/* Dropdown content (hidden by default) */';
echo '.dropdown-content {';
echo 'display: none;';
echo 'position: absolute;';
echo 'background-color: #f9f9f9;';
echo 'min-width: 160px;';
echo 'box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);';
echo 'z-index: 1;';
echo '}';
echo '';
echo '/* Links inside the dropdown */';
echo '.dropdown-content a {';
echo 'float: none;';
echo 'color: black;';
echo 'padding: 12px 16px;';
echo 'text-decoration: none;';
echo 'display: block;';
echo 'text-align: left;';
echo '}';
echo '';
echo '/* Add a grey background color to dropdown links on hover */';
echo '.dropdown-content a:hover {';
echo 'background-color: #ddd;';
echo '}';
echo '';
echo '/* Show the dropdown menu on hover */';
echo '.dropdown:hover .dropdown-content {';
echo 'display: block;';
echo '}';
echo '.tok-photo {';
echo 'margin-top:50px;';
echo 'width:80%;';
echo '}';
echo '';
echo '.tok {';
echo 'line-height:2;';
echo 'width:80%;';
echo 'margin-left:auto;';
echo 'margin-right:auto;';
echo '}';
echo '.footer {';
echo 'font-family: sans-serif;';
echo '}';
echo '';
echo '.copyright {';
echo 'font-size:10px;';
echo 'font-style:italic;';
echo '}';
echo '.login-button {';
    echo 'margin-bottom:10px;';
    echo 'margin-left:20px;';
echo 'input[type=submit] {';
        echo 'background-color: #0000FF;';
        echo 'color: white;';
        echo 'padding: 12px 20px;';
        echo 'border: none;';
        echo 'border-radius: 4px;';
        echo 'cursor: pointer;';
        echo '}';
        echo 'input[type=submit]:hover {';
        echo 'background-color: #6754c7;';
        echo '}';
        echo 'form {';
            echo 'display:inline-block;';
            echo '}';
echo '</style>';
echo '</head>';
echo '';
echo '<body>';
echo '<center>';
echo '<div class="logos">';
echo '<img class="ib-logo" src="ib-logo.png">';
echo '<img class="times" src="times.png">';
echo '<img class="gafl-logo" src="gafl-logo.jpeg">';
echo '</div>';
echo '</center>';
echo '<form class="login-button" action="login-index.php">';
echo '<input type="submit" value="Login">';
echo '</form>';
echo '<div class="navbar">';
echo '<a href="index.php">Home</a>';
echo '';
echo '<div class="dropdown">';
echo '<button class="dropbtn">About GAFL IB';
echo '<i class="fa fa-caret-down"></i>';
echo '</button>';
echo '<div class="dropdown-content">';
echo '<a href="what-is-ibdp.php">What is IBDP</a>';
echo '<a href="university-result.php">University Results</a>';
echo '</div>';
echo '</div>';
echo '';
echo '';
echo '<a href="announcement.php">Announcements</a>';
echo '';
echo '<div class="dropdown">';
echo '<button class="dropbtn">IB Subjects Bulletin Board';
echo '<i class="fa fa-caret-down"></i>';
echo '</button>';
echo '<div class="dropdown-content">';
echo '<a href="math.php">IB Mathematics SL/HL</a>';
echo '<a href="chem.php">IB Chemistry SL/HL</a>';
echo '<a href="english-a.php">IB English A HL</a>';
echo '<a href="english-b.php">IB English B HL</a>';
echo '<a href="chinese.php">IB Chinese B SL</a>';
echo '<a href="japanese.php">IB Japanese B SL</a>';
echo '<a href="korean.php">IB Korean A SL/HL</a>';
echo '<a href="econ.php">IB Economics SL/HL</a>';
echo '<a href="history.php">IB History SL/HL</a>';
echo '<a href="tok.php">TOK</a>';
echo '<a href="ee.php">EE</a>';
echo '<a href="cas.php">CAS</a>';
echo '</div>';
echo '</div>';
echo '<a href="cas-recruit-board.php">CAS Recruit Board</a>';
echo '<a href="past-papers-library.php">Past Papers Library</a>';
echo '<a href="ib-graduates.php">IB Graduates</a>';
echo '<a href="calendar.php">Calendar</a>';
echo '<a href="teacher-info.html">Teacher Information</a>';
echo '<a href="book-meeting.php">Book Meeting</a>';
echo '<a href="resources.php">Resources</a>';
echo '<a href="thought-bubbles.php">Thought Bubbles</a>';
echo '<a href="self-study.php">Self Study Check-In</a>';
echo '';
echo '</div>';
echo '';
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
echo '';
echo '<footer class="footer">';
echo '';
echo '<center><p>Phone: 010-8641-3884 &#124 Email: 19s1438@gafl.hs.kr</p></center>';
echo '<center><p class="copyright">&#169 2023 GAFL IT 13. All rights reserved.</p></center>';
echo '</footer>';
echo '</body>';
echo '';
echo '';
echo '</html>';
?>