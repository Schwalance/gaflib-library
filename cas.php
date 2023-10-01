<?php
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title>';
echo 'CAS';
echo '</title>';
echo '<style>';
echo '.tok,';
echo '.ee,';
echo '.cas {';
echo 'margin-top:50px;';
echo 'font-family:Arial, Helvetica, sans-serif;';
echo '}';
echo '';
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
echo '';
echo '.cas {';
echo 'line-height:2;';
echo 'margin-right:auto;';
echo 'margin-left:auto;';
echo 'width:80%;';
echo '}';
echo '';
echo '.footer {';
echo 'font-family: sans-serif;';
echo '}';
echo '';
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
echo '.copyright {';
echo 'font-size:10px;';
echo 'font-style:italic;';
echo '}';
echo '.login-button {';
    echo 'margin-bottom:10px;';
    echo 'margin-left:20px;';
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
echo '<a href="teacher-info.php">Teacher Information</a>';
echo '<a href="book-meeting.php">Book Meeting</a>';
echo '<a href="resources.php">Resources</a>';
echo '<a href="thought-bubbles.php">Thought Bubbles</a>';
echo '<a href="self-study.php">Self Study Check-In</a>';
echo '</div>';
echo '';
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