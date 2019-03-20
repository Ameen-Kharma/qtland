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
<div class="stage">
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div> 
  <div class="layer"></div> 
  <div class="layer"></div> 
  <div class="layer"></div> 
  <div class="layer"></div> 
  <div class="layer"></div> 
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
 
</div>


<div class="parallax1">
  <h1 style="color:#ff99ff;font-size:25px;margin-left:6px;font-family: Georgia, Times, "Times New Roman", serif;"></h1>
    <div class="wrapper">
        <!-- Banner -->
                <!--
<div class="banner-top" style="background-color: gray;">

                
<div class="parallax1">
  <h1>WELCOME TO</h1>
              </div>

               <img alt='top banner' src="images/bg5.jpg" width=100%>  
-->
        
<!-- Banner -->
        
        <!-- Header section -->
        <header class="header-wrapper header-wrapper--home">
            <div class="container">
                <!-- Logo link-->
              <!-- <a href='home.php' class="logo" style="color:red;">
                     <h2 style="color:#ff99ff;font-size:25px;margin-top:6px;font-family: Georgia, Times, "Times New Roman", serif;">Qtpie</h2>
                </a> -->
                
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
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Mega menu</a>
                               <ul class="mega-menu container">
                                    <li class="col-md-3 mega-menu__coloum">
                                        <h4 class="mega-menu__heading">Now in the cinema</h4>

                                         <ul class="mega-menu__list">

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
    $query = "SELECT * FROM Movie WHERE Release_Date  > '2017-01-1 00:00:00' " ;


    $result = mysql_query($query);
    


						
                 	//if(isset($movieName))


	$counter=0;
	while($row = mysql_fetch_assoc($result)){
if($counter>11)break; 
if($counter<=5){
		$counter+=1;
       		 $Moviename=$row["Movie_Name"];

       		 $Time=$row["Running_Time"];
       		 $Genre=$row["Genre"];
       		 //$RD=$row["Release_Date"];
                 $Rate=$row["Rate"];     		


		 $rdate=$row["Release_Date"];
		$im = $row["wallpaper"];
		$id=$row["movie_id"];

$pieces = explode(" ", $rdate);
		$rdate = $pieces[0];
		$date = new DateTime(''.$rdate);
		$rdate =  $date->format('F jS, Y');

		echo "    <li class='mega-menu__nav-item'><a href='movie-page-left.php?id=$id'>$Moviename</a></li>

            ";
}

if($counter>5 && $counter<10)
echo "  <ul class='mega-menu__list'>
                                            <li class='mega-menu__nav-item'><a href='movie-page-left.php?id=$id'>$Moviename</a></li>"
;

				 
	
				   }//while
	

 







echo"</ul>";








                             /*         <li class="col-md-3 mega-menu__coloum mega-menu__coloum--outheading">
                                          <ul class="mega-menu__list">
                                            <li class="mega-menu__nav-item"><a href="#">Gravity</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Captain Phillips</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Carrie</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Cloudy with a Chance of Meatballs 2</a></li>
                                          </ul>
                                      </li>*/
                                      
                                     
?>
                               </ul>
                        </li>
                    </ul>
                </nav>
                
                <!-- Additional header buttons / Auth and direct link to booking-->
                <div class="control-panel">
                    <div class="auth auth--home">
                      <div class="auth__show">
                        <span class="auth__image">
                          <img alt="33e" src="images/mybanner.jpg">
                        </span>
                      </div>
                      <a href="#" class="btn btn--sign btn--singin">
                           Me
                      </a>
                     <!--   <ul class="auth__function">
                            <li><a href="#" class="auth__function-item">Watchlist</a></li>
                            <li><a href="#" class="auth__function-item">Booked tickets</a></li>
                            <li><a href="#" class="auth__function-item">Discussion</a></li>
                            <li><a href="#" class="auth__function-item">Settings</a></li>
                        </ul>
-->

                    </div>
                    <?php
                    if(!isset($_SESSION['uid']))
                    echo "<a href='#'  class='btn btn-md btn--warning btn--book btn-control--home login-window'>Sign In</a>";
                    else
echo "<a href='logout.php' id='logout' style='font-size: 20px;border-radius:4px;color: #4c4145; background-color: #ffd564;border: solid 1px #ffc936;' onclick='location.href = 'logout.php';'  '>Logout</a>";
                    ?>
                      

                </div>

            </div>
        </header>


        <!-- Slider -->
          <div class="bannercontainer">
                    <div id="revslider-68" class="banner"  >
                    <ul>

              <div id="mycarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
<ol class="carousel-indicators">
<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
<li data-target="#mycarousel" data-slide-to="1"></li>
<li data-target="#mycarousel" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="item active">
<img src="images/jo.jpg">
<div class="carousel-caption">

</div>
</div>
<div class="item">
<img src="images/jo2.jpg" >
</div>
<div class="item">
<img src="images/jo3.jpg">
</div>
</div>
<a class="left carousel-control" href="#mycarousel" data-slide="prev">
<span id="lft"class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#mycarousel" data-slide="next">
<span id="rit"class="glyphicon glyphicon-chevron-right"></span>
</a>
                        </ul>
                    </div>
                </div>

        <!--end slider -->
        
        
        <!-- Main content -->
        <section class="container">
            <div class="movie-best">
                 <div class="col-sm-10 col-sm-offset-1 movie-best__rating">Today Best choice</div>
                 <div class="col-sm-12 change--col">
                  <!-- <div class="movie-beta__item ">
                        <img alt='' src="http://amovie.gozha.net/images/movie/movie-sample1.jpg">
                         <span class="best-rate">5.0</span>

                         <ul class="movie-beta__info">
                             <li><span class="best-voted">71 people voted today</span></li>
                             <li>
                                <p class="movie__time">169 min</p>
                                <p>Adventure | Drama | Fantasy </p>
                                <p>38 comments</p>
                             </li>
                             <li class="last-block">
                                 <a href="movie-page-left.php?id=1" class="slide__link">more</a>
                             </li>
                         </ul>
                     </div> -->
<!-- 
                     <div class="movie-beta__item second--item">
                         <img alt='' src="http://amovie.gozha.net/images/movie/movie-sample2.jpg">
                         <span class="best-rate">5.0</span>

                         <ul class="movie-beta__info">
                             <li><span class="best-voted">71 people voted today</span></li>
                             <li>
                                <p class="movie__time">169 min</p>
                                <p>Adventure | Drama | Fantasy </p>
                                <p>38 comments</p>
                             </li>
                             <li class="last-block">
                                 <a href="movie-page-left.php?id=1" class="slide__link">more</a>
                             </li>
                         </ul>
                     </div>
                     <div class="movie-beta__item third--item">
                         <img alt='' src="http://amovie.gozha.net/images/movie/movie-sample3.jpg">
                         <span class="best-rate">5.0</span>

                         <ul class="movie-beta__info">
                             <li><span class="best-voted">71 people voted today</span></li>
                             <li>
                                <p class="movie__time">169 min</p>
                                <p>Adventure | Drama | Fantasy </p>
                                <p>38 comments</p>
                             </li>
                             <li class="last-block">
                                 <a href="movie-page-left.php?id=1" class="slide__link">more</a>
                             </li>
                         </ul>
                     </div>
                     <div class="movie-beta__item hidden-xs">
                         <img alt='' src="http://amovie.gozha.net/images/movie/movie-sample4.jpg">
                         <span class="best-rate">5.0</span>

                         <ul class="movie-beta__info">
                             <li><span class="best-voted">71 people voted today</span></li>
                             <li>
                                <p class="movie__time">169 min</p>
                                <p>Adventure | Drama | Fantasy </p>
                                <p>38 comments</p>
                             </li>
                             <li class="last-block">
                                 <a href="movie-page-left.php?id=1" class="slide__link">more</a>
                             </li>
                         </ul>
                     </div>
                     <div class="movie-beta__item hidden-xs hidden-sm">
                         <img alt='' src="http://amovie.gozha.net/images/movie/movie-sample5.jpg">
                         <span class="best-rate">5.0</span>

                         <ul class="movie-beta__info">
                             <li><span class="best-voted">71 people voted today</span></li>
                             <li>
                                <p class="movie__time">169 min</p>
                                <p>Adventure | Drama | Fantasy </p>
                                <p>38 comments</p>
                             </li>
                             <li class="last-block">
                                 <a href="movie-page-left.php?id=1" class="slide__link">more</a>
                             </li>
                         </ul>
                     </div>
                     <div class="movie-beta__item hidden-xs hidden-sm">
                         <img alt='' src="http://amovie.gozha.net/images/movie/movie-sample6.jpg">
                         <span class="best-rate">5.0</span>

                         <ul class="movie-beta__info">
                             <li><span class="best-voted">71 people voted today</span></li>
                             <li>
                                <p class="movie__time">169 min</p>
                                <p>Adventure | Drama | Fantasy </p>
                                <p>38 comments</p>
                             </li>
                             <li class="last-block">
                                 <a href="movie-page-left.php?id=1" class="slide__link">more</a>
                             </li>
                         </ul>
                     </div>
                     -->
                     
                     
        
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
	//$movieName=$_GET['searchinput'];

# Check If Record Exists
    $query = "SELECT * FROM Movie WHERE Release_Date < '2017-01-01 00:00:00' ORDER BY movie_id DESC";


    $result = mysql_query($query);
    


						
	
                 	//if(isset($movieName))
       
    
	$counter=0;
	
	while($row = mysql_fetch_assoc($result) ){

		if($counter==6)break;
       		 $Moviename=$row["Movie_Name"];

       		 $Time=$row["Running_Time"];
       		 $Genre=$row["Genre"];
       		 $RD=$row["Release_Date"];
       		 $Rate=$row["Rate"];

                
		 $rdate=$row["Release_Date"];
		$im = $row["wallpaper"];
		$id=$row["movie_id"];
$pieces = explode(" ", $rdate);
		$rdate = $pieces[0];
		$date = new DateTime(''.$rdate);
		$rdate =  $date->format('F jS, Y');
		if(rand(0, 9)>2 && $counter!=6){
		echo "  <div class='movie-beta__item '>
                        <img alt='' src='$im' height='310'>
           <span class='best-rate'>   <span class='imdbRatingPlugin movie__rating' data-user='ur75707845' data-title='$Rate' data-style='p4'></span></span>
                         <ul class='movie-beta__info'>
                             <li><span class='best-voted'>$Moviename</span></li>
                             <li>
                                <p class='movie__time'>$Time min</p>
                                <p> $Genre</p>
                                <p>$rdate</p>
                             </li>
                             <li class='last-block'>
                                 <a href='movie-page-left.php?id=$id' class='slide__link'>more</a>
                             </li>
                         </ul>
                     </div> ";
                     				$counter+=1; 

                     }
	
				   }


	if(!$counter){
	echo "Not Found";
	
	}
	
	



 


?>
        
        
        
                 </div>
<!-- check all movies now playing -->
               <div class="col-sm-10 col-sm-offset-1 movie-best__check"></div> 
            </div>

            <div class="col-sm-12" style="word-wrap: break-word">
                <div class="mega-select-present mega-select-top mega-select--full">
                    <div class="mega-select-marker">
                        <div class="marker-indecator location">
                            <p class="select-marker"><span>movie to watch now</span> <br>in your city</p>
                        </div>

                        <div class="marker-indecator cinema">
                            <p class="select-marker"><span>find your </span> <br>cinema</p>
                        </div>

                        <div class="marker-indecator film-category">
                            <p class="select-marker"><span>find movie due to </span> <br> your mood</p>
                        </div>

                        <div class="marker-indecator actors">
                            <p class="select-marker"><span> like particular stars</span> <br>find them</p>
                        </div>

                        <div class="marker-indecator director">
                            <p class="select-marker"><span>admire personalities - find </span> <br>by director</p>
                        </div>

                        <div class="marker-indecator country">
                            <p class="select-marker"><span>search for movie from certain </span> <br>country?</p>
                        </div>
                    </div>

                      <div class="mega-select pull-left" style="margin-left:270px;">
                          <span style="color:#ff3333;font-size: 18px;"class="mega-select__point">Search</span>
                          <!--<ul class="mega-select__sort">
                              <li class="filter-wrap"><a href="#" class="mega-select__filter filter--active" data-filter='location'>Location</a></li>
                              <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='cinema'>Cinema</a></li>
                              <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='film-category'>Category</a></li>
                              <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='actors'>Actors</a></li>
                              <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='director'>Director</a></li>
                              <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='country'>Country</a></li>
                          </ul>-->
                          



                               <form method="get" action="search.php">

                          <input name="searchinput" type='text' class="select__field"> 
                                 </form>
                          
                          <div class="select__btn">
                            <a href="#" class="btn btn-md btn--danger location">find <span class="hidden-exrtasm">your city</span></a>
                            <a href="#" class="btn btn-md btn--danger cinema">find <span class="hidden-exrtasm">suitable cimema</span></a>
                            <a href="#" class="btn btn-md btn--danger film-category">find <span class="hidden-exrtasm">best category</span></a>
                            <a href="#" class="btn btn-md btn--danger actors">find <span class="hidden-exrtasm">talented actors</span></a>
                            <a href="#" class="btn btn-md btn--danger director">find <span class="hidden-exrtasm">favorite director</span></a>
                            <a href="#" class="btn btn-md btn--danger country">find <span class="hidden-exrtasm">produced country</span></a>
                          </div>

                          <div class="select__dropdowns">
                              <ul class="select__group location">
                                <li class="select__variant" data-value='London'>London</li>
                                <li class="select__variant" data-value='New York'>New York</li>
                                <li class="select__variant" data-value='Paris'>Paris</li>
                                <li class="select__variant" data-value='Berlin'>Berlin</li>
                                <li class="select__variant" data-value='Moscow'>Moscow</li>
                                <li class="select__variant" data-value='Minsk'>Minsk</li>
                                <li class="select__variant" data-value='Warsawa'>Warsawa</li>
                              </ul>

                              <ul class="select__group cinema">
                                <li class="select__variant" data-value='Cineworld'>Cineworld</li>
                                <li class="select__variant" data-value='Empire'>Empire</li>
                                <li class="select__variant" data-value='Everyman'>Everyman</li>
                                <li class="select__variant" data-value='Odeon'>Odeon</li>
                                <li class="select__variant" data-value='Picturehouse'>Picturehouse</li>
                              </ul>

                              <ul class="select__group film-category">
                                <li class="select__variant" data-value="Children's">Children's</li>
                                <li class="select__variant" data-value='Comedy'>Comedy</li>
                                <li class="select__variant" data-value='Drama'>Drama</li>
                                <li class="select__variant" data-value='Fantasy'>Fantasy</li>
                                <li class="select__variant" data-value='Horror'>Horror</li>
                                <li class="select__variant" data-value='Thriller'>Thriller</li>
                              </ul>

                              <ul class="select__group actors">
                                <li class="select__variant" data-value='Leonardo DiCaprio'>Leonardo DiCaprio</li>
                                <li class="select__variant" data-value='Johnny Depp'>Johnny Depp</li>
                                <li class="select__variant" data-value='Jack Nicholson'>Jack Nicholson</li>
                                <li class="select__variant" data-value='Robert De Niro'>Robert De Niro</li>
                                <li class="select__variant" data-value='Morgan Freeman'>Morgan Freeman</li>
                                <li class="select__variant" data-value='Jim Carrey'>Jim Carrey</li>
                                <li class="select__variant" data-value='Adam Sandler'>Adam Sandler</li>
                                <li class="select__variant" data-value='Ben Stiller'>Ben Stiller</li>
                              </ul>

                              <ul class="select__group director">
                                <li class="select__variant" data-value='Steven Spielberg'>Steven Spielberg</li>
                                <li class="select__variant" data-value='Martin Scorsese'>Martin Scorsese</li>
                                <li class="select__variant" data-value='Guy Ritchie'>Guy Ritchie</li>
                                <li class="select__variant" data-value='Christopher Nolan'>Christopher Nolan</li>
                                <li class="select__variant" data-value='Tim Burton'>Tim Burton</li>
                              </ul>

                              <ul class="select__group country">
                                <li class="select__variant" data-value='USA'>USA</li>
                                <li class="select__variant" data-value='Germany'>Germany</li>
                                <li class="select__variant" data-value='Australia'>Australia</li>
                                <li class="select__variant" data-value='UK'>UK</li>
                                <li class="select__variant" data-value='Japan'>Japan</li>
                                <li class="select__variant" data-value='Serbia'>Serbia</li>
                              </ul>
                          </div>
                      </div>
                  </div>
            </div>
            
            <div class="clearfix"></div>

            <h2 id='target'style="color:#ff3333;" class="page-heading heading--outcontainer">Now in the cinema</h2>

            <div class="col-sm-12" style="margin-left:130px;">
                <div class="row">
                    <div class="col-sm-8 col-md-9">





<?php
/*

                        <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--dark movie--test--left">
                                <div class="movie__images">
                                    <a href="movie-page-left.php?id=1" class="movie-beta__link">
                                        <img alt='' src="http://amovie.gozha.net/images/movie/movie-time8.jpg">
                                    </a>
                                </div>

                                <div class="movie__info">
                                    <a href='movie-page-left.php?id=1' class="movie__title">Gravity (2013)  </a>

                                    <p class="movie__time">91 min</p>

                                    <p class="movie__option"><a href="#">Sci-Fi</a> | <a href="#">Thriller</a> | <a href="#">Drama</a></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score"></div>
                                        <span class="movie__rating">4.1</span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->

                         <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--light movie--test--left">
                                <div class="movie__images">
                                    <a href="movie-page-left.php?id=1" class="movie-beta__link">
                                    <img alt='' src="http://amovie.gozha.net/images/movie/movie-time1.jpg">
                                    </a>
                                </div>

                                <div class="movie__info">
                                    <a href='movie-page-left.php?id=1' class="movie__title">The Hobbit: The Desolation of Smaug (2013)  </a>

                                    <p class="movie__time">169 min</p>

                                    <p class="movie__option"><a href="#">Adventure</a> | <a href="#">Fantasy</a> | <a href="#">Drama</a></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score"></div>
                                        <span class="movie__rating">5.0</span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->

                         <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--light movie--test--right">
                                <div class="movie__images">
                                    <a href="movie-page-left.php?id=1" class="movie-beta__link">
                                    <img alt='' src="http://amovie.gozha.net/images/movie/movie-time9.jpg">
                                    </a>
                                </div>

                                <div class="movie__info">
                                    <a href='movie-page-left.php?id=1' class="movie__title">The Hunger Games: Catching Fire (2013)   </a>

                                    <p class="movie__time">146 min</p>

                                    <p class="movie__option"><a href="#">Action</a> | <a href="#">Adventure</a> | <a href="#">Sci-Fi</a></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score"></div>
                                        <span class="movie__rating">4.9</span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->

                         <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--dark movie--test--right">
                                <div class="movie__images">
                                    <a href="movie-page-left.php?id=1" class="movie-beta__link">
                                    <img alt='' src="http://amovie.gozha.net/images/movie/movie-time10.jpg">
                                    </a>
                                </div>

                                <div class="movie__info">
                                    <a href='movie-page-left.php?id=1' class="movie__title">Thor: The Dark World (2013) </a>

                                    <p class="movie__time">112 min</p>

                                    <p class="movie__option"><a href="#">Action</a> | <a href="#">Adventure</a> | <a href="#">Fantasy</a></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score"></div>
                                        <span class="movie__rating">5.0</span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->

                         <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--dark movie--test--left">
                                <div class="movie__images">
                                    <a href="movie-page-left.php?id=1" class="movie-beta__link">
                                    <img alt='' src="http://amovie.gozha.net/images/movie/movie-time11.jpg">
                                    </a>
                                </div>

                                <div class="movie__info">
                                    <a href='movie-page-left.php?id=1' class="movie__title">World War Z (2013)  </a>

                                    <p class="movie__time">116 min</p>

                                    <p class="movie__option"><a href="#">Action</a> | <a href="#">Adventure</a> | <a href="#">Horror</a></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score"></div>
                                        <span class="movie__rating">4.1</span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->

                         <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--light movie--test--left">
                                <div class="movie__images">
                                    <a href="movie-page-left.php?id=1" class="movie-beta__link">
                                    <img alt='' src="http://amovie.gozha.net/images/movie/movie-time12.jpg">
                                    </a>
                                </div>

                                <div class="movie__info">
                                    <a href='movie-page-left.php?id=1' class="movie__title">Prisoners (2013) </a>

                                    <p class="movie__time">153 min</p>

                                    <p class="movie__option"><a href="#">Crime</a> | <a href="#">Thriller</a> | <a href="#">Drama</a></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score"></div>
                                        <span class="movie__rating">5.0</span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->

                         <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--light movie--test--right">
                                <div class="movie__images">
                                    <a href="movie-page-left.php?id=1" class="movie-beta__link">
                                    <img alt='' src="http://amovie.gozha.net/images/movie/movie-time13.jpg">
                                    </a>
                                </div>

                                <div class="movie__info">
                                    <a href='movie-page-left.php?id=1' class="movie__title">This Is the End (2013)   </a>

                                    <p class="movie__time">107 min</p>

                                    <p class="movie__option"><a href="#">Comedy</a> | <a href="#">Fantasy</a></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score"></div>
                                        <span class="movie__rating">4.9</span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->

                         <!-- Movie variant with time -->
                            <div class="movie movie--test movie--test--dark movie--test--right">
                                <div class="movie__images">
                                    <a href="movie-page-left.php?id=1" class="movie-beta__link">
                                    <img alt='' src="http://amovie.gozha.net/images/movie/movie-time14.jpg">
                                    </a>
                                </div>

                                <div class="movie__info">
                                    <a href='movie-page-left.php?id=1' class="movie__title">The Internship (2013)  </a>

                                    <p class="movie__time">112 min</p>

                                    <p class="movie__option"><a href="#">Comedy</a></p>
                                    
                                    <div class="movie__rate">
                                        <div class="score"></div>
                                        <span class="movie__rating">5.0</span>
                                    </div>               
                                </div>
                            </div>
                         <!-- Movie variant with time -->


                               








--> 

*/
?> 




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
    $query = "SELECT * FROM Movie WHERE Release_Date  > '2017-01-1 00:00:00' " ;


    $result = mysql_query($query);
    


						
                 	//if(isset($movieName))


	$counter=0;
	while($row = mysql_fetch_assoc($result)){
		$counter+=1;
       		 $Moviename=$row["Movie_Name"];

       		 $Time=$row["Running_Time"];
       		 $Genre=$row["Genre"];
       		 //$RD=$row["Release_Date"];
                 $Rate=$row["Rate"];     		


		 $rdate=$row["Release_Date"];
		$im = $row["wallpaper"];
		$id=$row["movie_id"];

$pieces = explode(" ", $rdate);
		$rdate = $pieces[0];
		$date = new DateTime(''.$rdate);
		$rdate =  $date->format('F jS, Y');

		echo "   <!-- Movie variant with time -->
                            <div class='movie movie--test movie--test--light movie--test--left'>
                                <div class='movie__images'>
                                    <a href='movie-page-left.php?id=$id' class='movie-beta__link'>
                                    <img alt='' src='$im' width='768' height='220'>
                                    </a>
                                </div>

                                <div class='movie__info'>
                                    <a href='movie-page-left.php?id=$id' class='movie__title'>$Moviename </a>

                                    <p class='movie__time'>$Time min</p>

                                    <p class='movie__option'>$Genre</p>
                                     <p class='movie__option'>$rdate</p>
                                    
                                    <div class='movie__rate'>
                                        <div class='score'></div>
                                        <span class='imdbRatingPlugin movie__rating' data-user='ur75707845' data-title='$Rate' data-style='p4'></span>
                                    </div>               
                                </div>
                            </div>

            ";

				 
	
				   }//while
	

 


?>






 









                     

            <div class="col-sm-12">
                <h2 class="page-heading">Latest news</h2>

                <div class="col-sm-4 similar-wrap col--remove">
                    <div class="post post--preview post--preview--wide">
                        <div class="post__image">
                            <img alt='' src="http://amovie.gozha.net/images/client-photo/post-thor.jpg">
                           
                        </div>
                        <p class="post__date">22 October 2013 </p>
                        <a href="single-page-left.html" class="post__title">"Thor: The Dark World" - World Premiere</a>
                        <a href="single-page-left.html" class="btn read-more post--btn">read more</a>
                    </div>
                </div>
                <div class="col-sm-4 similar-wrap col--remove">
                    <div class="post post--preview post--preview--wide">
                        <div class="post__image">
                            <img alt='' src="http://amovie.gozha.net/images/client-photo/post-annual.jpg">
                           
                        </div>
                        <p class="post__date">22 October 2013 </p>
                        <a href="single-page-left.html" class="post__title">30th Annual Night Of Stars Presented By The Fashion Group International</a>
                        <a href="single-page-left.html" class="btn read-more post--btn">read more</a>
                    </div>
                </div>
                <div class="col-sm-4 similar-wrap col--remove">
                    <div class="post post--preview post--preview--wide">
                        <div class="post__image">
                            <img alt='' src="http://amovie.gozha.net/images/client-photo/post-awards.jpg">
                           
                        </div>
                        <p class="post__date">22 October 2013 </p>
                        <a href="single-page-left.html" class="post__title">Hollywood Film Awards 2013</a>
                        <a href="single-page-left.html" class="btn read-more post--btn">read more</a>
                    </div>
                </div>
            </div>
                
        </section>
        
        <div class="clearfix"></div>
  <footer class="footer-wrapper">
            <section class="container">
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="home.php" class="nav-link__item">Home</a></li>
                        
                    </ul>
                </div>
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="allmovie.php" class="nav-link__item">Movies</a></li>
                        
                    </ul>
                </div>
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="terms.html" class="nav-link__item">Terms of use</a></li>
                        
                    </ul>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="footer-info">
                        <p class="heading-special--small">QTpie<br><span class="title-edition">in the social media</span></p>

                        <div class="social">              <a href='https://www.facebook.com/QTpie-1303989096382937/' class="social__variant fa fa-facebook"></a>
                            <a href='https://twitter.com/AmeenKharma' class="social__variant fa fa-twitter"></a>
                            
                            <a href='https://www.instagram.com/ameenkharma/' class="social__variant fa fa-instagram"></a>
                          
                        </div>
                        
                        <div class="clearfix"></div>
                        <p class="copy">&copy; QTpie, 2017. All rights reserved. Done by Ameen & Sohayb </p>
                    </div>
                </div>
            </section>
        </footer>
    </div>

    <!-- open/close -->
       <!-- <div class="overlay overlay-hugeinc">
            
            <section class="container">

                <div class="col-sm-4 col-sm-offset-4">
                    <button type="button" class="overlay-close">Close</button>

                    <form id="login-form" class="login" action="adduser.php" method="get" novalidate=''> 

                        <p class="login__title">sign in <br><span class="login-edition">welcome to Qtpie</span></p>

                        

                        
                        <div class="field-wrap">
                        <input type='email' placeholder='Email' name='user-email'>
                        <input type='password' placeholder='Password' name='user-password'>

                         </div>
                        <br>

                        <div class="login__control">
                            <button type='submit' class="btn btn-md btn--warning btn--wider">sign in</button>
                            
                        </div>
			<br>
                               



                    </form>
                </div>

            </section>
        </div>-->
 <div class="overlay overlay-hugeinc">
            
            <section class="container">

                <div class="col-sm-4 col-sm-offset-4">
                    <button type="button" class="overlay-close">Close</button>
                    <form id="login-form" class="login" action="adduser.php" method="get" novalidate=''> 
                        <p class="login__title">sign in <br><span class="login-edition">welcome to QTPie</span></p>

                      
                        
                        <div class="field-wrap">
                        <input type='email' placeholder='Email' name='Email' class="login__input">
                        <input type='password' placeholder='Password' name='Password' class="login__input">

                         </div>

                        <div class="login__control">
                                                                            <button type='submit' class="btn btn-md btn--warning btn--wider">sign in</button>

                        </div>
                    </form>
                </div>

            </section>
        </div>
	<!-- JavaScript-->
        <!-- jQuery 1.9.1--> 
        <script src="js/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="js/jquery-migrate-1.2.1.min.js"></script>
        <!-- jQuery UI -->
        <script src="js/jquery-ui.js"></script>
        <!-- Bootstrap 3--> 
        <script src="js/bootstrap.min.js"></script>

        <!-- Mobile menu -->
        <script src="js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="js/jquery.selectbox-0.2.min.js"></script>

        <!-- Stars rate -->
        <script src="js/jquery.raty.js"></script>
        <!-- Swiper slider -->
        <script src="js/idangerous.swiper.min.js"></script>
        <!-- Magnific-popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>  


        <!-- Share buttons -->
        <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-525fd5e9061e7ef0"></script>

        <!-- Form element -->
        <script src="js/form-element.js"></script>
        <!-- Form validation -->
        <script src="js/form.js"></script>

        <!-- Custom -->
        <script src="js/custom.js"></script>
		
		<script type="text/javascript">
            $(document).ready(function() {
                init_MoviePage();
            });
</script>
<script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";stags.parentNode.insertBefore(js,stags);})(document,'script','imdb-rating-api');</script>
</body>
</html>