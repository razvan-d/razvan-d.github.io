<?php

$fname = $_POST['fname'];
$lname = $_POST['lname']; 
$subject = $_POST['subject']
$status = $_POST['status']
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comenzi";

$conn = new mysqli($servername, $username, $password, $dbname); 

if (!$conn){
die('The connection is not possible: ' . mysql_error());
}

mysql_select_db("comenzi", $conn);

$sql="INSERT INTO comenzi(Status,FName,FName2,Subject) VALUES('".$status."','".$fname."','".$lname."''".$subject."')";

echo 'Database selected';

if (!mysql_db_query($conn, $sql))
      {
      die('Error: ' . mysql_error());
      }
    echo ('<b>Successful insertion!!!</b>');

    mysql_close($conn);


?>