<?php




$hostname="cortexsales.com";
$username="soso2017";
$password="soso2017";
$dbname="qtland";
$usertable="Login";

$con = mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
mysql_select_db($dbname);


$moveName=$_POST['movie_Name'];
$moveType=$_POST['movie_Type'];

$Episode_Number=$_POST['Episode_Number'];

$Rdate=$_POST['Rdate'];

$Director=$_POST['Director'];

$Age=$_POST['Age'];

$Starring=$_POST['Starring'];

$Rate=$_POST['Rate'];

$RTime=$_POST['RTime'];

$BudPOST=$_POST['Budget'];

$Box_Office=$_POST['Box_Office'];
$favoritesport = $_POST['favoritesport'];
$synposis=$_POST['Synposis'];
$URL=$_POST['url'];

$Genre=$_POST['genre'];



    $t1_flag=0;
    $t2_flag=0;
    $t3_flag=0;
    $t4_flag=0;

$target_dir = "images/movie_images/";
$target_file = $target_dir . basename($_FILES["image1"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$t1 = "$target_dir"."$URL"."1.$imageFileType";


    if (move_uploaded_file($_FILES["image1"]["tmp_name"], $t1)) {
    $t1_flag=1;
    } 
$target_dir = "images/movie_images/";
$target_file = $target_dir . basename($_FILES["image2"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$t2 = "$target_dir"."$URL"."2.$imageFileType";


    if (move_uploaded_file($_FILES["image2"]["tmp_name"], $t2)) {
        $t2_flag=1;

    } 

$target_dir = "images/movie_images/";
$target_file = $target_dir . basename($_FILES["image3"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$t3 = "$target_dir"."$URL"."3.$imageFileType";


    if (move_uploaded_file($_FILES["image3"]["tmp_name"], $t3)) {
        $t3_flag=1;

    } 
$target_dir = "images/movie_images/";
$target_file = $target_dir . basename($_FILES["image4"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$t4 = "$target_dir"."$URL"."4.$imageFileType";


    if (move_uploaded_file($_FILES["image4"]["tmp_name"], $t4)) {
        $t4_flag=1;

    } 




$target_dir = "images/movie_wallpaper/";
$target_file = $target_dir . basename($_FILES["wallpaper"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$t = "$target_dir"."$URL".".$imageFileType";


    if (move_uploaded_file($_FILES["wallpaper"]["tmp_name"], $t)) {
    	


	$sql = "INSERT INTO Movie (Movie_type, Episodes,Release_Date,Director,Age,Starring,Genre,Running_Time,Budget,Box_Office,Movie_Name,synposis, image, Rate, URL, wallpaper";
	$sql2=") VALUES ('$moveType','$Episode_Number','$Rdate','$Director','$Age','$Starring','$Genre','$RTime','$BudPOST','$Box_Office','$moveName','$synposis',1,'$Rate','$URL','$t'";
	if($t1_flag==1){
		$sql=$sql.", image1";
		$sql2=$sql2.",'$t1'";
	}
	if($t2_flag==1){
		$sql=$sql.", image2";
		$sql2=$sql2.",'$t2'";
	}
	if($t3_flag==1){
		$sql=$sql.", image3";
		$sql2=$sql2.",'$t3'";
	}
	if($t4_flag==1){
		$sql=$sql.", image4";
		$sql2=$sql2.",'$t4'";
	}
	$sql2=$sql2.")";
	$sql=$sql.$sql2;
	$result = mysql_query($sql);
	
	echo "<html><script>alert('Added successfully.'),history.go(-1)</script></html>); ";
		
    } 








?>


