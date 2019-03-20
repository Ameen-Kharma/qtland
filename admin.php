<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
if(isset($_SESSION['uid']))
{   $Email=$_SESSION['Email'];
  if($Email=="ameen@hotmail.com" || $Email=="soh@gmail.com")
   {
      }
else
{
 header("Location: home.php");
}
}
else {
 header("Location: home.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "xhtml1-transitional.dtd">

<html>
<head>


  
    <link rel="manifest" href="/manifest.json">

    <meta name='csrf_token' content='5e015713423d9be6e7eec02d9190acdb3e473829'><link rel="stylesheet" type="text/css" href="css/style1.css" />




    <link rel="shortcut icon" href="faviconv5.ico" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="css/font_awsome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>



</head>

<body onload=" " class="page-common">
<div id="myanimelist">



    <div class="_unit " style="width:1px;display: block !important;" data-height="1">
        <div id="skin_detail" class="" style="width:1px;">
            <script type='text/javascript'>
                googletag.cmd.push(function() {
                    var slot = googletag.defineOutOfPageSlot("/84947469/skin_detail", "skin_detail").addService(googletag.pubads())
                        .setTargeting("adult", "white").setTargeting("genres", ["Supernatural","Drama","Romance","School"]).setCollapseEmptyDiv(true,true);googletag.enableServices();

                    googletag.display("skin_detail");
                });</script>
        </div>
    </div>
    <script type='text/javascript'>
        window.MAL.SkinAd.prepareForSkin('skin_detail');
    </script>

    <div id="ad-skin-bg-left" class="ad-skin-side-outer ad-skin-side-bg bg-left">
        <div id="ad-skin-left" class="ad-skin-side left" style="display: none;">
            <div id="ad-skin-left-absolute-block">
                <div id="ad-skin-left-fixed-block"></div>
            </div>
        </div>
    </div>
    <div class="wrapper"><div id="headerSmall" style="height:8%;"><a href="/panel.php" class="link-mal-logo">MyAnimeList.net</a>


    </div></div>








    <div id="contentWrapper" >
        <div>
            <h1 style=" font-size: 14px;border-radius:4px;color: #4c4145; background-color: #ffd564;border: solid 1px #ffc936;" class="h1">Admin Page</h1>
<a href="logout.php"><i class="fa fa-sign-out" style="font-size:20px;" aria-hidden="true"> Logout</i> </a>
        </div>
       <!--   <div class="login-form-header-text ac mauto">
        <form action="addmovie.php" method="post">
           Movie Name: <input name="movie_Name" type="text" placeholder="movie Name">
            <br>
          Movie Type: <input  type="text" name="Movie_type" placeholder="Movie Type">
            <br>
          Number of Episodes: <input type="text" name="Episode_Number" placeholder="Number of Episodes ">
            <br>

           
                      <br>
            Director: <input type="text" name="Director" placeholder="Director">
            <br>
          
            Actors: <input type="text" name="Starring" placeholder="Starring">
            <br>
            Genre: <input type="text" name="Genre" placeholder="Genre">
            <br>
            Running_Time: <input type="text" name="RTime" placeholder="Running_Time">
            <br>
            Budget: <input type="text" name="Budget" placeholder="Budget">
            <br>
            Box_Office: <input type="text" name="Box_Office" placeholder="Box_Office">


        </form>
          </div> -->
        <div class="form-style-6">
            <h1 style=" font-size: 14px;border-radius:4px;color: #4c4145; background-color: #ffd564;border: solid 1px #ffc936;">Add movie </h1>
            <form id="addFrom" method="post" action="addmovie.php" enctype="multipart/form-data">

      <p style="font-size: 15px;">Movie Name:</p><br><br><input style="font-size: 14px;border-radius:4px; " type="text" 
                  name="movie_Name" placeholder="movie Name">
                <br><br></br>
      <p style="font-size: 15px;">Movie/TV show:</p><br><br><input style="font-size: 14px;border-radius:4px;" type="text" 
                 name="movie_Type" placeholder="movie Type">
		<br><br></br>
        <p style="font-size: 15px;">Number of Episodes:</p><br><br><input style="font-size: 14px;border-radius:4px;" type="text" 
                     name="Episode_Number" placeholder="Number of Episodes ">
                <br><br></br>
	<div class="well">

 	 <div id="datetimepicker1" class="input-append date">
     <p style="font-size: 15px;">Release Date:</p><br><input style="margin-left:30px;width:290px;" name="Rdate" data-format="yyyy-MM-dd 00:00:00" type="text"></input>
		<span style="width:10%;" class="add-on">
		<i style="position: absolute;top: 570px;" class="fa fa-calendar fa-2x" ></i></span>
 	 </div>

</div>
	<script type="text/javascript">
 	 $(function() {
  	  $('#datetimepicker1').datetimepicker({
   	   language: 'pt-BR'
	    });
  	});
	</script>

                <br><br></br>
     <p style="font-size: 15px;">Director:</p><br><br><input style="font-size: 14px;border-radius:4px;" type="text" name="Director" 
              placeholder="Director">
                <br><br></br>
    <p style="font-size: 15px;">Starring:</p><br><br><input style="font-size: 14px;border-radius:4px;" type="text" name="Starring" 
              placeholder="Starring">
                <br><br></br>
       <p style="font-size: 15px;">Genre:</p><br><br>

                <select style="font-size: 14px;border-radius:4px;" name="genre">
			<option value="Action">Action</option>
			<option value="Romance">Romance</option>
                        <option value="Drama">Drama</option>
			<option value="Comedy">Comedy</option>
			<option value="Sci Fi">Sci Fi</option>
                        <option value="Adventure">Adventure</option>
                        <option value="Fantasy">Fantasy</option>
			<option value="Thriller">Thriller</option>
			<option value="Horror">Horror</option>
                        <option value="Crime">Crime</option>
			</select>
<br></br><br></br>

                <p style="font-size: 15px;">Running Time:</p><br><br><input style="font-size: 14px;border-radius:4px;"  type="text" name="RTime" placeholder="Running_Time">
                <br><br></br>
<p style="font-size: 15px;">Age Restriction:</p><br><br><input style="font-size: 14px;border-radius:4px;"  type="text" name="Age" 
    placeholder="Age Restriction">
                <br><br></br>
<p style="font-size: 15px;">Budget:</p><br><br><input style="font-size: 14px;border-radius:4px;"  type="text" name="Budget" placeholder="Budget">
                <br><br></br>
 <p style="font-size: 15px;">Box office:</p><br><br><input style="font-size: 14px;border-radius:4px;"  type="text" name="Box_Office" 
        placeholder="Box_Office">
<br></br><br></br>
<p style="font-size: 15px;">Rate:</p><br><br><input style="font-size: 14px;border-radius:4px;"  type="text" name="Rate" 
        placeholder="IMDB">
<br></br><br></br>
<p style="font-size: 15px;">Synposis:</p><br><br>

<textarea name="Synposis" style="font-size: 14px;border-radius:7px;" class="form-control" cols="10" rows="20" placeholder="Description"></textarea>
 <!--<input type="submit" style=" margin-left:120px;width:150px;font-size: 14px;border-radius:4px;color: #4c4145; background-color: #ffd564;border: solid 1px #ffc936;" value="Send" />
</form>  -->

<!-- images--->

   

<br></br><br></br>
<p style="font-size: 15px;">Trailer:</p><br><br><input style="font-size: 14px;border-radius:4px;"  type="text" name="url" 
             placeholder="https://www.youtube.com/v=??"><br>
 </br><br>            
             
             <p style="font-size: 15px;">Wallpaper:</p><br><input name="wallpaper" class="form-control" type="file" size="25px" label="Image" 
                       placeholder="picture" required /><br></br><br>
            <p style="font-size: 15px;"> Movie Images (Up to 4 images only)</p><br>
             <input name="image1" class="form-control" type="file" size="25px" label="Image" placeholder="picture"/><br>
             <input name="image2" class="form-control" type="file" size="25px" label="Image" placeholder="picture"/><br>
             <input name="image3" class="form-control" type="file" size="25px" label="Image" placeholder="picture"/><br>
             <input name="image4" class="form-control" type="file" size="25px" label="Image" placeholder="picture"/><br></br><br>
             
                <!-- Movie wallpaper:<br></br><textarea style="font-size: 14px;max-width:100px;border-radius:7px;" name="plot" cols="2" rows="5 wrap="hard"></textarea><br></br>
                       
                       
                       
                       
                       
                   
	      
	               
              <button class="upload"  style="width:90px;"> Upload </button> 
<br><br></br><br></br>Movie additional photos:<br></br>
                
                <textarea style="margin-right:5px;font-size: 14px;max-width:85px;border-radius:4px;max-height:100px;border-radius:7px;" name="plot" cols="2" rows="5 wrap="hard"></textarea>
                <textarea style="margin-right:5px;font-size: 14px;max-width:85px;border-radius:4px;max-height:100px;border-radius:7px;" name="plot" cols="2" rows="5 wrap="hard"></textarea>
               <textarea style="margin-right:5px;font-size: 14px;max-width:85px;border-radius:4px;max-height:100px;border-radius:7px;" name="plot" cols="2" rows="5 wrap="hard"></textarea>
                <textarea style="margin-right:5px;font-size: 14px;max-width:85px;border-radius:4px;max-height:100px;border-radius:7px;" name="plot" cols="2" rows="5 wrap="hard"></textarea>
               <br>
               <button class="upload"  style="width:90px;"> Upload </button> <button class="upload"  style="width:90px;"> Upload </button> <button class="upload"  style="width:90px;"> Upload </button> <button class="upload"  style="width:90px;"> Upload </button>  <br><br></br>-->
                <input type="submit" value="Send" style=" margin-left:120px;width:150px;font-size: 14px;border-radius:4px;color: #4c4145; background-color: #ffd564;border: solid 1px #ffc936;"  />
                </div>
</div><!-- end of contentWrappe>



    <!--  control container height -->
    <div style="clear:both;"></div>

    <!-- end rightbody -->

</div><!-- wrapper -->


<div id="ad-skin-bg-right" class="ad-skin-side-outer ad-skin-side-bg bg-right">
    <div id="ad-skin-right" class="ad-skin-side right" style="display: none;">
        <div id="ad-skin-right-absolute-block">
            <div id="ad-skin-right-fixed-block"></div>
        </div>
    </div>
</div>
</div><!-- #myanimelist -->



<div id="evolve_footer"></div>



<script type="text/javascript">


			$('.Bupload').click(function(){
			
				$('#fileToUpload').click();
			});

			$('#fileToUpload').change(function(){
				Upload_Image();
			});

	        function Upload_Image() {

            var form=document.getElementById('image_form');
            var formData=new FormData(form);

            var request=new XMLHttpRequest();
            request.open('post','upload.php');
            request.addEventListener('load',function (data) {
                console.log(data)
            });
            request.send(formData);

        };



</script>


<script type="text/javascript">
    window.MAL.magia = "06410c4e6b2518e9add8f6df0ccb2da2876bb8c980aacb43a8dcaa8153c0f92c";
    window.MAL.madoka = "hZrDKm9k6FVRnqd3i%=K";

    window.MAL.SLVK = "g4OvMLVOmEI3J8u7dt8f8+mAuualsqCo";
    window.MAL.CDN_URL = "https://myanimelist.cdn-dena.com";

    window.MAL.CURRENT_TUTORIAL_STEP_ID = null;
    window.MAL.USER_NAME = "AhmedKAS"
</script>
</body>
</html>