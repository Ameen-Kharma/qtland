 <?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 4/19/2017
 * Time: 9:58 PM
 */

session_start();

$hostname="cortexsales.com";
$username="soso2017";
$password="soso2017";
$dbname="qtland";
$usertable="Movie";
    $con = mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
    mysql_select_db($dbname);


if(isset($_POST['login']))
{
     $user=$_POST['username'];
    $pass=$_POST['password'];
     $_SESSION['username']=$user;
      

   $query = "SELECT * FROM Login where Email=$user and password=$pass";
   $result = mysql_query($query);


   while($row = mysql_fetch_assoc($result) ){
   $id=$row['User_Id'];
echo $id;
$_SESSION['id']=$id;
$_SESSION['message']="hit ";

}


header("location: home.php");
   
     

}
	


?>


<html>

<body>

<form method="post" action="rr.php">

user Name:<input type="text" name="username"></input>
<br>
password:<input type="password" name="password"></input>

<input type="submit" value="login" name="login"></input>

</form>

</body>


</html>