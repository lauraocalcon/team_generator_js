
<?php

    mysql_connect("localhost", "root") or die (mysql_error());

    mysql_select_db("players_db") or die(mysql_error());

    $display = "SELECT * FROM `player_details`";

    $result = mysql_query($display);

    //echo '<table cellpadding = "5" cellspacing = "2" class="db_table" >';
    //echo "<tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Position 1</th><th>Position 2</th><th>Position 3</th><th>Position 4</th><th>Points Scored</th><th>Tackling</th><th>Assists</th><th>Speed</th><th>Fitness</th>";
    echo "<select full_name='name'>";

    while($row = mysql_fetch_array($result)){
        echo "<option value=\"name1\">" . $row['first_name'] . "&nbsp" . $row['last_name'] . "</option>";
    }

    //echo"</table>";

    mysql_close();