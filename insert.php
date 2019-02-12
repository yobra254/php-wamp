<?php
if (!isset($_POST))
{
 header("location:register.php");
}else
{
extract($_POST);
include 'connect.php';//this function includes the database connection
$password=sha1($password);//encrypts the passwords
$sql="insert into members values ('','$name','$email','$password',CURDATE())";
$result=mysql_query($sql) or die(mysql_error());
if ($result==true) {
	header("location:login.php");//redirecting
}else
{
	echo "Failed";
}
}
?>