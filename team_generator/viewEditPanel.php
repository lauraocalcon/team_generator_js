<!DOCTYPE HTML>

<html>
<head>
    <title>Team Generator</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel-noscript.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-desktop.css" />
    </noscript>
</head>
<body>
<!-- ********************************************************* -->
<div id="header-wrapper">
    <div class="container">
        <div class="row">
            <div class="12u">

                <header id="header">
                    <h1><a href="#" id="logo">Team Generator</a></h1>
                    <nav id="nav">
                        <a href="index.html">Homepage</a>
                        <a href="playerMenu.html" class="current-page-item">Player Menu</a>
                        <a href="panelMenu.html">Panel Menu</a>
                        <a href="teamMenu.html">Team Menu</a>
                    </nav>
                </header>

            </div>
        </div>
    </div>
</div>
<div id="main">
    <div class="container">
        <div class="row main-row">
            <div class="4u">

                <section>
                    <h2>User Profile</h2>
                    <ul class="small-image-list">
                        <li>
                            <a href="#"><img src="images/img1.jpg" alt="" class="left" /></a>
                            <h3>Laura O'Callaghan</h3>
                        </li>
                        <li>
                            <h4>Player Menu</h4>
                            <ul>
                                <li><a href="createPlayer.php">Create Player</a></li>
                                <li><a href="viewEditPlayer.php">View and Edit Player</a></li>
                                <li><a href="deletePlayer.html">Delete Player</a></li>
                            </ul>
                        </li>
                        <li>
                            <h4>Panel Menu</h4>
                            <ul>
                                <li><a href="createPanel.html">Create Panel</a></li>
                                <li><a href="viewEditPanel.php">View and Edit Panel</a></li>
                                <li><a href="deletePanel.html">Delete Panel</a></li>
                            </ul>
                        </li>
                        <li>
                            <h4>Team Menu</h4>
                            <ul>
                                <li><a href="createTeam.php">Create Team</a></li>
                                <li><a href="viewEditTeam.html">View and Edit Team</a></li>
                                <li><a href="deleteTeam.html">Delete Team</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </section>
            </div>
            <div class="8u skel-cell-important">

                <section class="right-content">
                    <h2>View Panel</h2>
                    <p><body id="main_body" >

                <img id="top" src="forms/top.png" alt="">
                <div id="display_table">
                    <?php

                        mysql_connect("localhost", "root") or die (mysql_error());

                        mysql_select_db("players_db") or die(mysql_error());

                        $display = "SELECT * FROM `player_details`";

                        $result = mysql_query($display);

                        echo '<table cellpadding = "5" cellspacing = "10" class="db_table" >';
                        echo "<tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Pos 1</th><th>Points</th><th>Tackling</th><th>Assists</th><th>Speed</th><th>Kicking</th><th>Scoring</th><th>Strength</th><th>Line Breaks</th>";

                        while($row = mysql_fetch_array($result)){
                            echo "<tr><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td><td>" . $row['age'] . "</td><td>" . $row['pos_1'] . "</td><td>" . $row['points_scored'] . "</td><td>" . $row['tackling'] . "</td><td>" . $row['assists'] . "</td><td>" . $row['speed'] . "</td><td>" . $row['kick'] .  "</td><td>" . $row['score'] .  "</td><td>" . $row['strength'] .  "</td><td>" . $row['line_break'] .  "</td></tr>";
                        }

                        echo"</table>";

                        mysql_close();
                    ?>
                </div>
                <img id="bottom" src="forms/bottom.png" alt="">
                </body></p>
                </section>

            </div>
        </div>
    </div>
</div>
<div id="footer-wrapper">
    <div class="container">

        <div class="row">
            <div class="12u">

                <div id="copyright">
                    &copy; Untitled. All rights reserved. | Design: <a href="http://html5up.net">HTML5 UP</a> | Images: <a href="http://fotogrph.com">fotogrph</a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- ********************************************************* -->
</body>
</html>