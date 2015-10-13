<?php
$link = mysql_connect('insert db connection here');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
$db = mysql_select_db('clemson');
?>