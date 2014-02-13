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
                    <h2>View and Edit Player</h2>
                    <p><body id="main_body" >

                <img id="top" src="forms/top.png" alt="">
                <div id="display_table">
                    <h2>Please Select a Player</h2>

                    <?php

                        mysql_connect("localhost", "root") or die (mysql_error());

                        mysql_select_db("players_db") or die(mysql_error());

                        $data = "SELECT * FROM `player_details`";

                        $result = mysql_query($data);

                        //echo '<table cellpadding = "5" cellspacing = "2" class="db_table" >';
                        //echo "<tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Position 1</th><th>Position 2</th><th>Position 3</th><th>Position 4</th><th>Points Scored</th><th>Tackling</th><th>Assists</th><th>Speed</th><th>Fitness</th>";
                        //echo "<select full_name='name'>";

                        $data2 = mysql_fetch_array($result);


                        //echo"</table>";

                        mysql_close();
                    ?>

                    <form id="form_781162" class="appnitro"  method="post">
                        <div class="form_description">
                            <h2>Player Details</h2>
                            <p>Please complete all fields to create a new player</p>
                        </div>
                        <ul>
                            <li id="li_1" >
                                <label class="description" for="name_label">Name </label>
                                <div>
                                    <input id="first_name_input" name= "first_name_input" class="element text" maxlength="255" size="8" value="<?php echo $data2['first_name']?>"/>
                                    <label>First</label>


                                    <input id="last_name_input" name= "last_name_input" class="element text" maxlength="255" size="14" value="<?php echo $data2['last_name']?>"/>
                                    <label>Last</label>
                                </div>
                            </li>
                            <li id="li_2" >
                                <label class="description" for="age_input">Age </label>
                                <div>
                                    <input id="age_input" name="age_input" class="element text medium" type="text" maxlength="255" value=""/>
                                </div>
                            </li>
                            <li id="li_3" >
                                <label class="description" for="pos_1_input">Position 1 </label>
                                <div>
                                    <input id="pos_1_input" name="pos_1_input" class="element text medium" type="text" maxlength="255" value=""/>
                                </div>
                            </li>
                            <li id="li_4" >
                                <label class="description" for="pos_2_input">Position 2 </label>
                                <div>
                                    <input id="pos_2_input" name="pos_2_input" class="element text medium" type="text" maxlength="255" value=""/>
                                </div>
                            </li>
                            <li id="li_6" >
                                <label class="description" for="pos_3_input">Position 3 </label>
                                <div>
                                    <input id="pos_3_input" name="pos_3_input" class="element text medium" type="text" maxlength="255" value=""/>
                                </div>
                            </li>
                            <li id="li_5" >
                                <label class="description" for="pos_4_input">Position 4 </label>
                                <div>
                                    <input id="pos_4_input" name="pos_4_input" class="element text medium" type="text" maxlength="255" value=""/>
                                </div>
                            </li>
                            <li id="li_7" >
                                <label class="description" for="points_scored_input">Points Scored </label>
                                <div>
                                    <input id="points_scored_input" name="points_scored_input" class="element text medium" type="text" maxlength="255" value=""/>
                                </div>
                            </li>
                            <li id="li_8" >
                                <label class="description" for="tackles_input">Tackling </label>
                                <div>
                                    <select class="element select medium" id="tackles_input" name="tackles_input">
                                        <option value="" selected="selected"></option>
                                        <option value="1" >1</option>
                                        <option value="2" >2</option>
                                        <option value="3" >3</option>
                                        <option value="4" >4</option>
                                        <option value="5" >5</option>

                                    </select>
                                </div>
                            </li>
                            <li id="li_9" >
                                <label class="description" for="assists_input">Assists </label>
                                <div>
                                    <select class="element select medium" id="assists_input" name="assists_input">
                                        <option value="" selected="selected"></option>
                                        <option value="1" >1</option>
                                        <option value="2" >2</option>
                                        <option value="3" >3</option>
                                        <option value="4" >4</option>
                                        <option value="5" >5</option>

                                    </select>
                                </div>
                            </li>
                            <li id="li_11" >
                                <label class="description" for="speed_input">Speed </label>
                                <div>
                                    <select class="element select medium" id="speed_input" name="speed_input">
                                        <option value="" selected="selected"></option>
                                        <option value="1" >1</option>
                                        <option value="2" >2</option>
                                        <option value="3" >3</option>
                                        <option value="4" >4</option>
                                        <option value="5" >5</option>

                                    </select>
                                </div>
                            </li>
                            <li id="li_10" >
                                <label class="description" for="fitness_input">Fitness </label>
                                <div>
                                    <select class="element select medium" id="fitness_input" name="fitness_input">
                                        <option value="" selected="selected"></option>
                                        <option value="1" >1</option>
                                        <option value="2" >2</option>
                                        <option value="3" >3</option>
                                        <option value="4" >4</option>
                                        <option value="5" >5</option>

                                    </select>
                                </div>
                            </li>
                            <li id="li_12" >
                                <label class="description" for="available_select">Available </label>
												<span>
													<input id="available_select_1" name="available_select_1" class="element checkbox" type="checkbox" value="1" />
													<label class="choice" for="available_select_1">Yes</label>
<!--													<input id="available_select_2" name="available_select_2" class="element checkbox" type="checkbox" value="1" />-->
<!--													<label class="choice" for="available_select_2">No</label>-->

												</span>
                            </li>
                            <li class="buttons">
                                <input type="hidden" name="form_id" value="781162" />

                                <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
                            </li>
                        </ul>
                    </form>

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