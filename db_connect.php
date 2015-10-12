<?php
$link = mysql_connect(insert connection here);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
$db = mysql_select_db('clemson');
?>