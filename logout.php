<?php
 session_start();
session_destroy();
$_SESSION['uid']=0;
$_SESSION['Email']="";
unset($_SESSION['uid']);
   unset($_SESSION['Email']);
header('Location: home.php');
?>