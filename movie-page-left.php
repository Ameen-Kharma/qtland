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
  <h1 style="color:#ff99ff;font-size:25px;font-family: Georgia, Times, "Times New Roman", serif;"></h1>
    
        <!-- Header section -->
   <!--     <header id="movam">
 <a href='home.php' class="logo">
                      <h2 style="color:#ff99ff;font-size:25px;margin:6px;font-family: Georgia, Times, "Times New Roman", serif;">Qtpie</h2>
                </a> -->
            <div class="container">
                <!-- Logo link-->
               
                
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
                <div class="control-panel">
                   <!-- <a href="#" class="btn btn--sign login-window">Sign in</a> -->

<?php
                    if(!isset($_SESSION['uid']))
                    echo "<a href='#'  class='btn btn-md btn--warning btn--book btn-control--home login-window'>Sign In</a>";
                    else
echo "<a href='logout.php' id='logout' style='font-size: 20px;border-radius:4px;color: #4c4145; background-color: #ffd564;border: solid 1px #ffc936;' onclick='location.href = 'logout.php';'  '>Logout</a>";
                    ?>

                   <!-- <a href="#" class="btn btn-md btn--warning btn--book login-window">Book a ticket</a> -->
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
	$movieID=$_GET['id'];

# Check If Record Exists
    //$query = "SELECT * FROM Movie WHERE Movie_Name LIKE '%".$movieName."%'" ;
    $query = "SELECT * FROM Movie WHERE movie_id = '".$movieID."'";


    $result = mysql_query($query);
    


						

	while($row = mysql_fetch_assoc($result)){
       		 $Moviename=$row["Movie_Name"];

       		 $RT=$row["Running_Time"];

       		 $Type=$row["Movie_type"];

       		 $Epis=$row["Episodes"];

       		 $Gen=$row["Genre"];


       		 $Dir=$row["Director"];

       		 $Act=$row["Starring"];

       		 $Age=$row["Age"];

       		 $Bud=$row["Budget"];

       		 $BO=$row["Box_Office"];

       		 $rate=$row["Rate"];
       		 $symb=$row["synposis"];

		 $rdate=$row["Release_Date"];
		$im = $row["wallpaper"];
		$Running_Time= $row["Running_Time"];
		$url= $row["URL"];
$rate=$row["Rate"];
		$inum= $row["imagenum"];
		$image1= $row["image1"];
		$image2= $row["image2"];
		$image3= $row["image3"];
		$image4= $row["image4"];

		
//$rdate=date("F S ,Y",$rdate);
		$pieces = explode(" ", $rdate);
		$rdate = $pieces[0];
		$date = new DateTime(''.$rdate);
		$rdate =  $date->format('F jS, Y');
		$Actors= explode(",", $Act);	
			
		echo "          
		<section class='container'>

                                  <div class='col-sm-8 col-md-9' >
                                    <div class='movie' style='float: left;'>
				
				
                                       <h2 class='page-heading'>$Moviename</h2>
                    
                                        <div class='movie__info'>
                                          <div class='col-sm-6 col-md-4 movie-mobile'>
                            <div class='movie__images'>
                                    <span class='imdbRatingPlugin movie__rating' data-user='ur75707845' data-title='$rate' data-style='p4'>
</span>
                                <img alt='no image' width=260 height=330 src='$im'>
                            </div>
                           <!-- <div class='movie>Your vote:<div id='score' class='score'></div></div>-->
                           <div class='movie'> 
                 
</div>

                        </div>

                        <div class='col-sm-6 col-md-8'>
                                 
                            <p class='movie__time'>$Running_Time min</p>
                                 <br><br>

                            <p class='movie__option'><strong>Type:</strong>$Type </p>
                            <p class='movie__option'><strong>Episodes:  </strong>$Epis</p>
                            <p class='movie__option'><strong>Genre: </strong>$Gen</p>
                            <p class='movie__option'><strong>Release date: </strong>$rdate</p>
                                  
                            <p class='movie__option'><strong>Director: </strong><a href='https://en.wikipedia.org/wiki/$Dir' target='_blank'>$Dir</a></p>

                            <p class='movie__option'><strong>Actors: </strong>";
                         
                            for($i=0;$i<count($Actors);$i++){
                            	echo "<a href='https://en.wikipedia.org/wiki/$Actors[$i]' target='_blank'>$Actors[$i], </a>";
                            }
                             
                             echo "</p>
                            <p class='movie__option'><strong>Age restriction: </strong>$Age</p>

                            <p class='movie__option'><strong>Budget: </strong>$Bud</p>
                            <p class='movie__option'><strong>Box office: </strong>$ $BO million </p>

       		
                          
                            
                        </div>
                    </div>
                    
                    <div class='clearfix'></div>
                    
                    <h2 class='page-heading'>Synposis:</h2>

                    <p class='movie__describe'>$symb</p><br></br><br></br>
                                  <iframe style='width:100%;height:487px;border-top: 5px dotted #848484;
	border-bottom: 5px dotted #848484;
	box-shadow: inset 0 -1px 0 0 #848484, inset 0 1px 0 0 #848484, 0 1px 0 0 #848484, 0 -1px 0 0 #848484;
	margin-bottom: 1px;'  src='https://www.youtube.com/embed/$url' frameborder='0' allowfullscreen></iframe>

                    <h2 class='page-heading'>photos </h2>
<div id='container' border='1'>
    
    
    <!-- Each image is 350px by 233px -->
    <div class='photobanner'>
 	";
 	$flag_first=0;
 	$pp=0;
 	if($image1!=NULL)$pp++;
 	if($image2!=NULL)$pp++;
 	if($image3!=NULL)$pp++;
 	if($image4!=NULL)$pp++;
 	$numiric=0;
 	if($pp!=0){
 	//for($i=0;$i<(10/$pp);$i++){
 	while($numiric<6){
 	if($image1!=NULL && $numiric!=6){
  	if($flag_first==1)
 	echo "<img src='$image1' alt='' width='350' height='233' />";
 	else {
 	 echo "<img class='first' src='$image1' alt='' width='350' height='233'  />";
 	 $flag_first=1;
 	 }
 	 $numiric++;
 	}
 	
  	if($image2!=NULL && $numiric!=6){
  	if($flag_first==1)
 	echo "<img src='$image2' alt='' width='350' height='233' />";
 	else {
 	 echo "<img class='first' src='$image2' alt=''  />";
 	 $flag_first=1;
 	 }
 	  	 $numiric++;

 	}
 	if($image3!=NULL && $numiric!=6){
  	if($flag_first==1)
 	echo "<img src='$image3' alt='' width='350' height='233' />";
 	else {
 	 echo "<img class='first' src='$image3' alt='' width='350' height='233' />";
 	 $flag_first=1;
 	 }
 	  	 $numiric++;

 	}
 	if($image4!=NULL && $numiric!=6){
  	if($flag_first==1)
 	echo "<img src='$image4' alt='' width='350' height='233' />";
 	else {
 	 echo "<img class='first' src='$image4' alt=''  width='350' height='233'/>";
 	 $flag_first=1;
 	 
 	 } 
 	  	 $numiric++;
	}
 	 
 	// }
 	}
 	}
	/*echo "
	    	<img src='$image2' alt='' width='350' height='233' />
	    	<img src='$image3' alt='' width='350' height='233' />
	    	<img src='$image4' alt='' width='350' height='233' />
	
	";*/
	
echo "   </div>
</div>
";
				   }
 
   

 


?>





                    
                   

                    <h2 class="page-heading">comments (15)</h2>

<div class='movie_choice'>
    Rate: Raiders of the Lost Ark
    <div id="r1" class="rate_widget">
        <div class="star_1 ratings_stars"></div>
        <div class="star_2 ratings_stars"></div>
        <div class="star_3 ratings_stars"></div>
        <div class="star_4 ratings_stars"></div>
        <div class="star_5 ratings_stars"></div>
        <div class="total_votes">vote data</div>
    </div>
</div>

                    <div class="comment-wrapper">
                        <form id="comment-form" class="comment-form" method='post'>
                            <textarea class="comment-form__text" placeholder='Add you comment here'></textarea>
                            <label class="comment-form__info">250 characters left</label>
                            <button type='submit' class="btn btn-md btn--danger comment-form__btn">add comment</button>
                        </form>

                        <div class="comment-sets">

                        <div class="comment">
                            <div class="comment__images">
                                <img alt='' src="http://amovie.gozha.net/images/comment/avatar.jpg">
                            </div>

                            <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Roberta Inetti</a>
                            <p class="comment__date">today | 03:04</p>
                            <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                            <a href='#' class="comment__reply">Reply</a>
                        </div>

                        <div class="comment">
                            <div class="comment__images">
                                <img alt='' src="http://amovie.gozha.net/images/comment/avatar-olia.jpg">
                            </div>

                            <a href='#' class="comment__author"><span class="social-used fa fa-vk"></span>Olia Gozha</a>
                            <p class="comment__date">22.10.2013 | 14:40</p>
                            <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                            <a href='#' class="comment__reply">Reply</a>
                        </div>

                        <div class="comment comment--answer">
                            <div class="comment__images">
                                <img alt='' src="http://amovie.gozha.net/images/comment/avatar-dmitriy.jpg">
                            </div>

                            <a href='#' class="comment__author"><span class="social-used fa fa-vk"></span>Dmitriy Pustovalov</a>
                            <p class="comment__date">today | 10:19</p>
                            <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                            <a href='#' class="comment__reply">Reply</a>
                        </div>

                        <div class="comment comment--last">
                            <div class="comment__images">
                                <img alt='' src="http://amovie.gozha.net/images/comment/avatar-sia.jpg">
                            </div>

                            <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Sia Andrews</a>
                            <p class="comment__date"> 22.10.2013 | 12:31 </p>
                            <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                            <a href='#' class="comment__reply">Reply</a>
                        </div>

                        <div id='hide-comments' class="hide-comments">
                            <div class="comment">
                                <div class="comment__images">
                                    <img alt='' src="http://amovie.gozha.net/images/comment/avatar.jpg">
                                </div>

                                <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Roberta Inetti</a>
                                <p class="comment__date">today | 03:04</p>
                                <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                                <a href='#' class="comment__reply">Reply</a>
                            </div>

                            <div class="comment">
                                <div class="comment__images">
                                    <img alt='' src="http://amovie.gozha.net/images/comment/avatar-olia.jpg">
                                </div>

                                <a href='#' class="comment__author"><span class="social-used fa fa-vk"></span>Olia Gozha</a>
                                <p class="comment__date">22.10.2013 | 14:40</p>
                                <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                                <a href='#' class="comment__reply">Reply</a>
                            </div>
                        </div>

                        <div class="comment-more">
                            <a href="#" class="watchlist">Show more comments</a>
                        </div>

                    </div>
                    </div>
                </div>
            </div>

            <aside class="col-sm-4 col-md-3">
                <div class="sitebar">
                   

                     

                     

               

                    <div class="category category--cooming category--count marginb-sm mobile-category rs-cat">
                        <h3 class="category__title">Highest grossing<br><span class="title-edition">movies</span></h3>


                        <ol>

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
    $query = "SELECT * FROM Movie order by Box_Office desc";


    $result = mysql_query($query);
       
    {
	$counter=0;
	while($row = mysql_fetch_assoc($result) ){
		$counter+=1;
if($counter==11)break;
       		 $Moviename=$row["Movie_Name"];

       		 $Time=$row["Running_Time"];
       		 $Genre=$row["Genre"];
       		 $RD=$row["Release_Date"];
       		 $Rate=$row["Rate"];


		 $rdate=$row["Release_Date"];
		$im = $row["wallpaper"];
		$id=$row["movie_id"];
		echo "  <li><a href='movie-page-left.php?id=$id' class='category__item'>$Moviename</a></li>  ";

				 
	
				   }


	if(!$counter){
	echo "Not Found";
	
	}
	
	}



 


?>








                        </ol>
                    </div>
                    
                   

                </div>
            </aside>

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
    <!--*** Google map  ***-->
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script> 
        <!--*** Google map infobox  ***-->
        <script src="js/infobox.js"></script> 

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
