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
                    <div class="auth auth--home">
                      <div class="auth__show">
                        <span class="auth__image">
                          <img alt="33e" src="images/mybanner.jpg">
                        </span>
                      </div>
                      <a href="#" class="btn btn--sign btn--singin">
                          me
                      </a>
                     <!--   <ul class="auth__function">
                            <li><a href="#" class="auth__function-item">Watchlist</a></li>
                            <li><a href="#" class="auth__function-item">Booked tickets</a></li>
                            <li><a href="#" class="auth__function-item">Discussion</a></li>
                            <li><a href="#" class="auth__function-item">Settings</a></li>
                        </ul>
-->

                    </div>
                    <a href="#" class="btn btn-md btn--warning btn--book btn-control--home login-window">Sign In</a>
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
                 <div class="col-sm-10 col-sm-offset-1 movie-best__rating">
                
        <?php



$Email=$_GET['Email'];
$paswd=$_GET['Password'];
if(isset($Email) && isset($paswd)){
if($Email="ameen@hotmail.com")
header('Location: admin.php');
	echo "Confirm New User?
		<br>
		Email : $Email
		<form method='post' action='finaladd.php'>
		<input type='hidden' name='Email' value='$Email'>
		<input type='hidden' name='Password' value='$paswd'><br>
                <button type='submit' class='btn btn-md btn--warning btn--wider'>Confirm</button>
		</form><br>
                <a href='home.php?Cancle' ><button class='btn btn-md btn--warning btn--wider'>Cancle</button></a>

	";
}
else {
echo "Error";
}


?>                 </div>
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

                     
        
   
        
        
        
                 </div>
            </div>


           
            
                          



                               
<br>
<br>
    <br>
<br>
<br>
                  

        <!--end slider -->

        <div style='height:100px'></div>  


       

               
                 
                   
                  
                    
                   
                       

                     
                              

    <!-- open/close -->
        <div class="overlay overlay-hugeinc">
            
            <section class="container">

                <div class="col-sm-4 col-sm-offset-4">
                    <button type="button" class="overlay-close">Close</button>

                    <form id="login-form" class="login" method='get' novalidate=''>
                        <p class="login__title">sign in <br><span class="login-edition">welcome to Qtpie</span></p>

                        

                        <br><br><br>
                        <div class="field-wrap">
                        <input type='email' placeholder='Email' name='user-email' class="login__input">
                        <input type='password' placeholder='Password' name='user-password' class="login__input">

                         </div>
                        
                        <div class="login__control">
                            <button type='submit' class="btn btn-md btn--warning btn--wider">sign in</button>
                            
                        </div>
<br>
                               
                                 <div class="login__control">
                            <button type="button" class="btn btn-md btn--warning btn--wider" onclick="window.location = 'signup.html';">sign Up</button>
                            
                        </div>
<br><br><br>


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

</body>
</html>
