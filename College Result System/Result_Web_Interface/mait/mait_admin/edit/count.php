<?php
$con = mysql_connect('localhost', 'db_user', 'db_passwd');
    if (!$con) {
        die('Could not connect to mysql');
    }
    $db_selected = mysql_select_db('app_db', $con);
    if (!$db_selected) {
        die('Could not connect to database');
    }
    $user = mysql_real_escape_string(stripslashes($user));
    $pass = mysql_real_escape_string(md5(stripslashes($pass)));
    $query = "SELECT * FROM admin_login WHERE username='" . $user . "' AND password='" . $pass .
        "'";
    $result = mysql_query($query, $con);
    if (!$result) {
        die('Invalid Query');
    }
?>
