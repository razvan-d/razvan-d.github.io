<?php

$fname = $_POST['fname'];
$lname = $_POST['lname']; 
$subject = $_POST['subject']
$status = $_POST['status']
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "comenzi";

$conn = mysqli_connect($servername, $username, $password)or die("cannot connect"); 
mysqli_select_db($conn, $dbname)or die("cannot select DB"); 

if (!$conn){
die('The connection is not possible: ' . mysql_error());
}

mysql_select_db($dbname, $conn);

$sql="INSERT INTO 'comenzi'('Status','FName','FName2','Subject') VALUES ('$status','$fname','$lname','$subject')";

echo 'Database selected';

if (!mysql_db_query($conn, $sql))
      {
      die('Error: ' . mysql_error());
      }
    echo ('<b>Successful insertion!!!</b>');

    mysql_close($conn);


?>