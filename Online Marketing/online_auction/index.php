

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online Marketing </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta  http-equiv="content-Type" content="text/html" charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1,user-scalable=0"/>
    <meta name="description" content="global"/>
    <meta name="author" content="Nitesh Tiwari"/>
    <meta name="distribution" content="global"/>
    <meta http-equiv="X-UA-compatible" content="IE=edge,chrome=1"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	<link href="css/Default.css" rel="stylesheet" >	</link>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"></link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});
	</script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
       <style type="text/css">
       	.r1:hover ,.r2:hover ,.r3:hover ,.r4:hover ,.r5:hover ,.r6:hover 
       	{
           opacity:0.8;
       	}
       </style>
	
	
	
</head>
<body>

	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/logo1.jpg"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			
				<?php
			 if(isset($_SESSION['name']))	
			 {
			 echo "<b>Welcome,</b>".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
			 ?>
				<a href="login1.php" class="btn btn-info" target="_blank">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="signup.php?value=0" class="btn btn-info" target="_blank">Signup</a><br/><br/>&nbsp;&nbsp;
				<a href="helpline.php" target="_blank"><img src="images/help.png" alt="helpline" width="150" height="100"></a>
			<?php } ?>
			
			
			</div>
			<div id="heading">
				<a href="#">Online Marketing</a>
			</div>
			</div>
		</div>
		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" ><i class="fa fa-home" aria-hidden="true"></i>&nbsp;HOME</a>
				<a class="brand" href="#" >FIND PRODUCT</a>
				<a class="brand" href="reservation.php">OFFERS</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="contact.php">CONTACT</a>
				<a class="brand" href="about.php">ABOUT</a>
				</div>
			</div>
		</div>
		<div class="span12 well">
			<!-- Photos slider -->
			<div id="myCarousel" class="carousel slide" style="width:600px; float:left;margin-bottom:3px;width: 100%;height:50%" >		
				<div class="carousel-inner">
				<div class="active item"><img alt="Railway1" src="images/ecom1.jpg" style="width:100%;height:350px;"/></div>
				<div class="item"><img alt="Railway2" src="images/ele2.jpg" style="width:100%;height:350px;"/> </div>
				<div class="item"><img alt="Railway3" src="images/cl1.jpg" style="width:100%;height:350px;"/></div>
				<div class="item"><img alt="Railway4" src="images/bk1.jpg" style="width:100%;height:350px;"/></div>
				<div class="item"><img alt="Railway5" src="images/sh1.jpg" style="width:100%;height:350px;"/> </div>
				<div class="item"><img alt="Railway6" src="images/toy1.jpg" style="width:100%;height:350px;"/></div>
				<div class="item"><img alt="Railway7" src="images/tool1.jpg" style="width:100%;height:350px;"/></div>
				<div class="item"><img alt="Railway7" src="images/lap2.jpg" style="width:100%;height:350px;"/></div>
				
				</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
			
		</div>
		<br/><br/>
		<!-- first image -->
		<div>
			<h4 align="center" style="font-size:1.5vw;color: white;text-shadow: 1px 1px 2px black,0 0 10px black,0 0 5px darkblue;"><strong>Here Is Your Choice</strong></h4><br/>
			<span >
				
				&nbsp;&nbsp;&nbsp;&nbsp;<img class="r1" src="images/lap2.jpg" alt="Laptops" style="width:30%;height:40%;border:3px solid grey;border-radius: 10px;
                          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.5);"/>

			    
			</span>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<span >
				<img src="images/hard.jpg" class="r2" alt="Hardwares" style="width:30%;height:40%;border:3px solid grey;border-radius: 10px;
                    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.5);"/>
				
			</span>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<span>
				
				<img src="images/cloth1.jpg" class="r3" alt="Wears" style="width:30%;height:40%;border:3px solid grey;border-radius: 10px;
                    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.5);"/>
			</span>
		</div>
		<br/><br/><br/><br/>
          <!--  second image -->
			<div>

			
			<span >
				
				&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/mob1.jpg"  class="r4" alt="Smartphones" style="width:30%;height:40%;border:3px solid grey;border-radius: 10px;
                   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.5);"/>  
			</span>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<span >
				<img src="images/book2.jpg"  class="r5" alt="Books" style="width:30%;height:40%;border:3px solid grey;border-radius: 10px;
                       box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.5);"/>
				
			</span>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<span >
				
				<img src="images/tool2.jpg" class="r6" alt="Tools" style="width:30%;height:40%;border:3px solid grey;border-radius: 10px;
                       box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.5);"/>
			</span>
			

		</div>
		<span style="position:relative;top:-330px;left:90px;font-size:1.8vw;color:white;text-shadow: 1px 1px 2px blue,0 0 10px black,0 0 5px darkblue;"><b><a href="laptops.php" target="_blank" style="color: white;"title="click here">Laptops</a></b></span>&nbsp;&nbsp;

		<span style="position:relative;top:-310px;left:320px;font-size:1.8vw;color:white;text-shadow: 1px 1px 2px blue,0 0 10px black,0 0 5px darkblue;"><b><a href="hardware.php" target="_blank" style="color: white;" title="click here"> Hardware</a></b></span>

		<span style="position:relative;top:-320px;left:540px;font-size:1.8vw;color:white;text-shadow: 1px 1px 2px blue,0 0 10px black,0 0 5px darkblue;"><b><a href="cloths.php" target="_blank" style="color: white;" title="click here"> Cloths</a></b></span>

		<span style="position:relative;top:-5px;left:-240px;font-size:1.8vw;color:white;text-shadow: 1px 1px 2px blue,0 0 10px black,0 0 5px darkblue;"><b><a href="smartphones.php" target="_blank" style="color: white;"title="click here">Smarts Phone</a></b></span>&nbsp;&nbsp;

		<span style="position:relative;top:20px;left:-100px;font-size:1.8vw;color:white;text-shadow: 1px 1px 2px blue,0 0 10px black,0 0 5px darkblue;"><b><a href="books.php" target="_blank" style="color: white;"title="click here">Books</a></b></span>&nbsp;&nbsp;

		<span style="position:relative;top:20px;left:190px;font-size:1.8vw;color:white;text-shadow: 1px 1px 2px blue,0 0 10px black,0 0 5px darkblue;"><b><a href="tools.php" target="_blank" style="color: white;"title="click here">Tools</a></b></span>&nbsp;&nbsp;



		
	<br/><br/>
		<!-- Copyright -->
<footer >
		<div class="f1">
			<div style="float:left;">
			<p class="text-right text-info">  &copy; 2020  RNG CLINIC</p>
			</div>
			<div style="float:right;">
			<p class="text-right text-info">
				<span><a style="border-right: 2px solid " href="Admin/adminlogin.php" target="_blank"><b>Admin</b>&nbsp;&nbsp;</a></span>
			 Follow On:
				<span><a href="https://www.facebook.com/profile.php?id=100023297228976" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>&nbsp;
				<span><a href="https://twitter.com/AnupamT37695251" target="_blank"><i class="fa fa-twitter " aria-hidden="true"></i></a></span>&nbsp;
				<span><a href="https://www.instagram.com/tiwarianupam1980gm/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
</p>
			</div>
		</div>
		</footer>	</div>
</body>
</html>



<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>