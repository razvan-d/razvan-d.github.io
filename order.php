<?php
$connect = mysql_connect(“MySQL”, “root”, “”); 
if (!connect) { 
    die('Connection Failed: ' . mysql_error()); 
 } 
 mysql_select_db(“comenzi”, $connect);

?>