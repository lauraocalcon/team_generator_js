<?php

    mysql_connect("localhost", "root") or die (mysql_error());

    mysql_select_db("players_db") or die(mysql_error());

    $sql = "SELECT *
            FROM `player_details`
            WHERE `pos_1` = 13";



    $result = mysql_query($sql) or die(mysql_error());

    $value = mysql_fetch_array($result);

    return $value;

    mysql_close();