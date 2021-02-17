<?php
session_start();
if(isset($_SESSION['name'])){}
	else{
		header("location:login1.php");
		
	}
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
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 
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
			
				 
				<a href="#" target="_blank"><img src="images/help.png" alt="helpline" width="150" height="100"></a>
			
			
			
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
				<a class="brand" href="#" >FIND PRODUCTS</a>
				<a class="brand" href="reservation.php">OFFERS</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="contact.php">CONTACT</a>
				<a class="brand" href="about.php">ABOUT</a>
				</div>
			</div>
		</div>
		<div class="span12 well pass1">
			<div>
							<div style="float: left;">
							<img src="images/os.jpg">	 
							 
						   </div>
						<div style="float: right;">
							<b><p>    Operating Systems : Internals and Design Principles 7 Edition <br> (English, Paperback, William Stallings)<br>   Language: English Binding: Paperback <br>Publisher: Pearson<br>   SBN: 9789332518803, 9332518807 Edition: 7, 2013 Pages: 708 <br> <br>
								<del><i class="fa fa-inr" aria-hidden="true"></i>1200</del>&nbsp;&nbsp;8% off</p></b>
								
				                <a href="payment.php" class="btn btn-info">Buy Now</a><br/><br/>&nbsp;&nbsp;
							<!-- <p>HP Pavilion Core i7 8th Gen - (8 GB/1 TB HDD/128 GB SSD/Windows 10 Home/4 GB Graphics) 15-cx0144TX Gaming Laptop  (15.6 inch, Shadow Black, 2.17 kg)</p>
							 -->

                            

						</div> 
					</div>

						<br/>
						<br/>
				<hr  style="border-bottom:1px solid #A0A0A0; border-top:1px solid #A0A0A0; width:100%;" />	
				<br>
				<br>
					 
		</div>

		
<footer >
		<div class="f1">
			<div style="float:left;">
			<p class="text-right text-info">  &copy; 2019 Copyright PVT Ltd.</p>
			</div>
			<div style="float:right;">
			<p class="text-right text-info">
				
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




