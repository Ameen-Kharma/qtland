<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
?>

<!doctype html>
<html>
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>AMovie</title>
        <meta name="description" content="A Template by Gozha.net">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Gozha.net">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <!-- Mobile Specific Metas-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
    
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="css/font_awsome.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='css/roboto.css' rel='stylesheet' type='text/css'>
        <!-- Open Sans -->
        <link href='css/italic.css' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->

        <!-- Mobile menu -->
        <link href="css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="css/jquery.selectbox.css" rel="stylesheet" />

        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
    
        <!-- Custom -->
        <link href="css/style.css?v=1" rel="stylesheet" />


        <!-- Modernizr --> 
        <script src="js/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
    <!--[if lt IE 9]> 
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script> 
		<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>		
    <![endif]-->
</head>

<body>


    <div class="wrapper">
        <!-- Banner -->

<div class="parallax1">
  <h1 style="color:#ff99ff;font-size:25px;margin-left:6px;font-family: Georgia, Times, "Times New Roman", serif;"></h1>
    
        <!-- Header section -->
        <header id="movam">

            <div class="container">
                <!-- Logo link-->
              <!--  <a href='index.html' class="logo">
                      <h2 style="color:#ff99ff;font-size:25px;margin:6px;font-family: Georgia, Times, "Times New Roman", serif;">Qtpie</h2>
                </a>  -->
                
                <!-- Main website navigation-->
                 <nav id="navigation-box">
                    <!-- Toggle for mobile menu mode -->
                    <a href="#" id="navigation-toggle">
                        <span class="menu-icon">
                            <span class="icon-toggle" role="button" aria-label="Toggle Navigation">
                              <span class="lines"></span>
                            </span>
                        </span>
                    </a>
                    
                    <!-- Link navigation -->
                    <ul id="navigation">
                        
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="home.php">Home</a>

                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="allmovie.php">Movies</a>
                            
                        </li>
                          
                                      
                                      
                                      
                               </ul>
                        </li>
                    </ul>
                </nav>

                
                <!-- Additional header buttons / Auth and direct link to booking-->
          

            </div>
 
        </header>
 </div>       
        <!-- Search bar -->
        <div class="">
           <div class="container container--add">
                <form id='search-form' method='get' class="search" action="searchleft.php">
                    <input type="text" class="search__field" placeholder="Search" name="searchinput">
                    <select name="sorting_item" id="search-sort" class="search__sort" tabindex="0">
                        <option value="1" selected='selected'>By title</option>
                        <option value="2">By year</option>
                        <option value="3">By producer</option>
                        <option value="4">By title</option>
                        <option value="5">By year</option>
                    </select>
                    <button type='submit' class="btn btn-md btn--danger search__button">search a movie</button>
                </form>
            </div>
        </div>
        
        <!-- Main content -->
        
   <div style='height:100px'></div>  


        <?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 4/19/2017
 * Time: 9:58 PM
 */



$hostname="cortexsales.com";
$username="soso2017";
$password="soso2017";
$dbname="qtland";
$usertable="Movie";
    $con = mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
    mysql_select_db($dbname);
	$movieName=$_GET['searchinput'];

# Check If Record Exists
    $query = "SELECT * FROM Movie WHERE Movie_Name LIKE '%".$movieName."%'" ;


    $result = mysql_query($query);
    


						
	echo "      <section class='container'>
            <div class='movie-best'>
                 <div class='col-sm-12 change--col'>
                 ";
                 	if(isset($movieName)){
	$counter=0;
	while($row = mysql_fetch_assoc($result)){
		$counter+=1;
       		 $Moviename=$row["Movie_Name"];

       		 $Time=$row["Running_Time"];
       		 $Genre=$row["Genre"];
       		 $RD=$row["Release_Date"];
       		
                  $rate=$row["Rate"];

		 $rdate=$row["Release_Date"];
		$im = $row["wallpaper"];
		$id=$row["movie_id"];
$pieces = explode(" ", $rdate);
		$rdate = $pieces[0];
		$date = new DateTime(''.$rdate);
		$rdate =  $date->format('F jS, Y');

		echo "  <div class='movie-beta__item ' style='margin:2px; margin-top:40px; margin-bottom:230px;position:absoulte;right:10px;'>
                        <img alt='' src='$im' style='border-radius: 2px'  height='310'>
                              <span class='best-rate'>                   <span class='imdbRatingPlugin movie__rating' data-user='ur75707845' data-title='$rate' data-style='p4'></span></span>

                         <ul class='movie-beta__info'>
                             <li><span class='best-voted'>$Moviename</span></li>
                             <li>
                                <p class='movie__time'>$Time min</p>
                                <p>$Genre</p>
                                <p>$rdate</p>
                             </li>
                             <li class='last-block'>
                                 <a href='movie-page-left.php?id=$id' class='slide__link'>More</a>
                             </li>
                         </ul>
                     </div>";

				 
	
				   }
	if(!$counter){
	echo "Not Found";
	
	}
	
	}
	else {
	
	echo "Not Found";
	
	
	}
 
   echo "  </div>
               
            </div>
            </section >
	<div style='height:250px'></div>   
	";

 


?>
       

               
                 
 <script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";stags.parentNode.insertBefore(js,stags);})(document,'script','imdb-rating-api');</script>
</body>
</html>                 
                  