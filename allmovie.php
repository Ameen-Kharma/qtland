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
                <!-- <a href='index.html' class="logo">
                      <h2 style="color:#ff99ff;font-size:25px;margin:6px;font-family: Georgia, Times, "Times New Roman", serif;">Qtpie</h2>
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
                            <a href="allmovie.php">Movie</a>
                          
                        </li>
                       
                                        
                                     
                                      
                                      
                                     
                               </ul>
                        </li>
                    </ul>
                </nav>

                
                <!-- Additional header buttons / Auth and direct link to booking-->
                <div class="control-panel">
                   <!-- <a href="#" class="btn btn--sign login-window">Sign in</a> -->


  <?php
                    if(!isset($_SESSION['uid']))
                    echo "<a href='#'  class='btn btn-md btn--warning btn--book btn-control--home login-window'>Sign In</a>";
                    else
echo "<a href='logout.php' id='logout' style='font-size: 20px;border-radius:4px;color: #4c4145; background-color: #ffd564;border: solid 1px #ffc936;' onclick='location.href = 'logout.php';'  '>Logout</a>";
                    ?>


                  <!--  <a href="#" class="btn btn-md btn--warning btn--book login-window">Book a ticket</a> -->
                </div>

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


<img style="margin-left:600px;width:400px;height:80px;" src="images/Movies_logo.png"><br><br><br>



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
    $query = "SELECT * FROM Movie  " ;


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

                     <div style='margin-left:350px;'>       <div class='movie movie--test movie--test--light movie--test--left' style=' max-width:500px;left:200px;right:200px; '>
                                <div class='movie__images' style='min-height:300px; max-width:270px;'>
                                    <a href='movie-page-left.php?id=$id' class='movie-beta__link'>
                                    <img alt='' src='$im' width='500' height='300'>
                                    </a>
                                </div>

                                <div class='movie__info'>
                                    <a href='movie-page-left.php?id=$id' class='movie__title'>$Moviename </a>

                                    <p class='movie__time'>$Time min</p>

                                    <p class='movie__option'>$Genre</p>
                                     <p class='movie__option'>$rdate</p>
                                    
                                    <div class='movie__rate'>
                                        <div class='score'></div>
                                                       <span class='best-rate'>                   <span class='imdbRatingPlugin movie__rating' data-user='ur75707845' data-title='$Rate' data-style='p4'></span></span>
                                    </div>               
                                </div>
                            </div></div> 

            ";

				 
	
				   }//while
	

 


?>


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
                   
                  