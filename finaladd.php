<?php
$Email=$_GET['Email'];
$paswd=$_GET['Password'];

$hostname="cortexsales.com";
$username="soso2017";
$password="soso2017";
$dbname="qtland";
$usertable="Login";

$con = mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
mysql_select_db($dbname);

$sql = "INSERT INTO Login(Password,Email) VALUES ('$paswd','$Email')";
if(mysql_query($sql)){
				header('Location: home.php?addsuccess');

}
else {
				header('Location: home.php?addfailed');

}
