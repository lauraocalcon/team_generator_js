<!DOCTYPE HTML>

<html>
<head>
    <title>Team Generator</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/jquery-ui-1.9.1.custom.css" type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/jquery-1.8.2.js"></script>
    <script src="js/jquery-ui-1.9.1.custom.js"></script>
    <script src="js/jquery.numberMask.js"></script>
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
                        <a href="indextg.html">Homepage</a>
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
                            <h2>Create Team</h2>


                            <img id="top" src="forms/top.png" alt="">
                            <div id="form_container">
                                <div id="slider-range"></div>
                                <p>
                                    <label for="amount">Size of the team:</label>
                                    <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;" />
                                </p>
                                <p>
                                    <label for="amount">Minimum</label>
                                    <input type="radio" id="min" name="check"  />
                                    <label for="amount">Maximum</label>
                                    <input type="radio" id="max" name="check" checked />
                                </p>
                                <hr />
                                <br />
                                <div>
                                    <h3>Requirements for each position:</h3>
                                    <table class="requirements">
                                       <tr>
                                           <td><h4>Forwards</h4></td>
                                           <td><h4>Backs</h4></td>
                                       </tr>
                                        <tr>
                                            <td>1) Strength and Tackling</td>
                                            <td>9) Speed and Assists</td>
                                        </tr>
                                        <tr>
                                            <td>2) Strength and Speed</td>
                                            <td>10) Kicking and Assists</td>
                                        </tr>
                                        <tr>
                                            <td>3) Strength and Line Break</td>
                                            <td>11) Speed and Tackling</td>
                                        </tr>
                                        <tr>
                                            <td>4) Line Break and Assists</td>
                                            <td>12) Tackling and Assists</td>
                                        </tr>
                                        <tr>
                                            <td>5) Strength and Assists</td>
                                            <td>13) Tackling and Scoring</td>
                                        </tr>
                                        <tr>
                                            <td>6) Speed and Line Break</td>
                                            <td>14) Speed and Scoring</td>
                                        </tr>
                                        <tr>
                                            <td>7) Tackle and Line Break</td>
                                            <td>15) Tackling and Kicking</td>
                                        </tr>
                                        <tr>
                                            <td>8) Line Break and Scoring</td>
                                        </tr>
                                    </table>
                                    <h3>Generate</h3>
                                </div>
                                <br />
                                <br />
                                <div class="labels">
                                    <h2>Player Positions</h2>
                                </div>
                                <form>
                                    <div id="form"></div>
                                    <div id="submit">
                                        <br />
                                        <input type="submit" value="Generate Team">
                                    </div>
                                </form>
                                <script language="JavaScript" type="text/javascript">
                                    $("#slider-range").slider({
                                        range: "min",
                                        min: 1,
                                        max: 15,
                                        value: 2,
                                        slide: function( event, ui ) {
                                            $("#amount").val( ui.value );
                                            render();
                                        }
                                    });
                                    $("#amount").val($("#slider-range").slider("value"));
                                    $("form").submit(function() {
                                            var matrix = considerResult();
                                            return false;
                                        }
                                    );
                                    $(window).load(render);
                                </script>

                                <div id="result"></div>
                            </div>

                    <img id="bottom" src="forms/bottom.png" alt="">

                </section>

            </div>
        </div>
    </div>
</div>
<div id="footer-wrapper">
</div>
<!-- ********************************************************* -->
</body>
</html>