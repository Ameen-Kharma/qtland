<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 4/18/2017
 * Time: 8:04 PM
 */


$hostname="cortexsales.com";
$username="soso2017";
$password="soso2017";
$dbname="qtland";
$usertable="Login";

$con = mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
mysql_select_db($dbname);



$Email=$_GET['Email'];
$paswd=$_GET['Password'];

# Check If Record Exists
    $query = "SELECT * FROM Login WHERE Email='$Email'" ;
    $result = mysql_query($query);
    $times=0;
	if(mysql_num_rows($result)!=0)$times++;

	
	if($times!=0){

		$query = "SELECT * FROM Login WHERE Email='$Email' and Password='$paswd'" ;
	   	$result = mysql_query($query);
	   	if(mysql_num_rows($result)!=0){
	   		$row = mysql_fetch_assoc($result);
	   		$userid=$row["User_Id"];
			if(session_status()!=PHP_SESSION_ACTIVE) session_start();
			$_SESSION['uid'] = $userid;
			$potato = $_SESSION['uid'];
                            if($Email=="ameen@hotmail.com" || $Email=="soh@gmail.com"){
                           			$_SESSION['Email'] = $Email;
                           header("Location: admin.php");
                           
                           }
			else header("Location: home.php?success");
		}
		else{
echo"error";
			header('Location: home.php?error');
		}
		   	
	}
	else{
	/*
	$sql = "INSERT INTO Login(Password,Email) VALUES ('$paswd','$Email')";
	$result = mysql_query($sql);
				echo "User Added"; 
				
				*/ 
			header("Location: signup.php?Email=$Email&Password=$paswd");
	
				
	}








 
?>


