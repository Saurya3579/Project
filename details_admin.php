<!-- Developed by Saurav Bajracharya and Pramesh Bajracharya -->

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<title>Student Details Information.</title>
		<link rel="shortcut icon" href="bvc.png" type="image/x-icon" />
		<link rel="stylesheet" href="style_detailadmin.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <script type="text/javascript" src="date_time.js"></script>
	</head>
	<body>


	<div class="topDiv">
        <div class="imageLeft">
            <img src="round.png" />
        </div>
        <div id="asideCont">
            <h2>BVC Engineering College, Odalarevu</h2>
            <h3>Affiliated To  JNTUK, Kakinada</h3> Accredited By NBA New Delhi and NAAC With 'A' Grade<br> Approved By AICTE, New Delhi<br> Established in 1997<br><br>
        </div>
        <div class="imageRight">
            <span id="date_time"></span>
            <script type="text/javascript">
                window.onload = date_time('date_time');

            </script>
            <img src="group.png" />
        </div>
    </div>
    <div class="clear"></div>
    <ul class="menu">
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="About.php">About Us</a></li>
        <li><a href="vision.php">Vision &amp; Mission</a></li>
        <li><a href="asd.php">Management</a>

            <ul class="submenu">
                <li><a href="founderchairman.php">Founder-Chairman</a></li>
                <li><a href="secretary.php">Secretary</a></li>
                <li><a href="chairman.php">Chairman</a></li>
                <li><a href="vicechairman.php">Vice-Chairman</a></li>

            </ul>
        </li>
        <li><a href="#">Principal</a></li>
        <li><a href="faculty.php">Faculty</a>
            <ul class="submenu1">
                <li><a href="#">CSE</a></li>
                <li><a href="#">CE</a></li>
                <li><a href="#">ME</a></li>
                <li><a href="#">EEE</a></li>
                <li><a href="#">ECE</a></li>
            </ul>
        </li>
        <li><a href="index.php">Students</a></li>
        <li><a href="#"> Departments</a>
            <ul class="submenu1">
                <li><a href="Department.php">CSE</a></li>
              
                            <li><a href="civil.php">CE</a></li>
                            <li><a href="mech.php">ME</a></li>
                            <li><a href="eee.php">EEE</a></li>
                            <li><a href="ece.php">ECE</a></li>
            </ul>
        </li>
        <li><a href="#">Accredition</a>
            <ul class="submenu1">
                <li><a href="naac.php">NAAC</a></li>
                <li><a href="nba.php">NBA</a></li>
                <li><a href="pio.php">PIO</a></li>
            </ul>
        </li>
        <li><a href="#">Help</a></li>

    </ul>

    </br>
    </br>
    <div class="bodyDiv">
        <div class="forAside" style="margin-top:-3px;">
            <aside id="buttonsAside">
                <nav id="navigationBar">
                    <ul class="sideBar">
                        <li><a href="acadamic.php">Academics</a></li>
                        <li><a href="#">Administration</a></li>
                        <li><a href="#">BVC News</a></li>
                        <li><a href="#">Forthcoming Event</a></li>
                                <li><a href="emailnew.php">E-mail to students</a></li>
                        <li><a href="#">SMS to Parents/Students</a></li>
                        <li><a href="#">Professional Body</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Department Library</a></li>
                        <li><a href="#">Training</a></li>
                        <li><a href="#">Recruitment</a></li>
                        <li><a href="#">Placement</a></li>
                        <li><a href="#">Games And Sports</a></li>
                                <li><a href="feedback.php">Feedback to College</a></li>
                        <li><a href="alumini.php">Alumini</a></li>
                        <li><a href="#">Notices &amp; Circulars</a></li>
                    </ul>
                </nav>
            </aside>
        </div>
		<div id="bodyMain">
			<?php
				include "functions.php";       // add more field...... it is remaining
				details_admin();
			?>

		</div>
	</body>
</html>
