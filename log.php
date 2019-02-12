<?php
extract($_POST);
include 'connect.php';//this function includes the database connection
$password=sha1($password);
$sql="select * from members where email='$email' and password='$password'";
$results=mysql_query($sql) or die(mysql_error());
$num_rows=mysql_num_rows($results);
if ($num_rows>0) {
	echo "Successful Loogin";
}else
{
	echo "Username or Password iiis Incorrect";
}



?>