<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta  http-equiv="content-Type" content="text/html" charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1,user-scalable=0"/>
    <meta name="description" content="global"/>
    <meta name="author" content="Anupam Tiwari"/>
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
			//alert($(window).width());
			var x=(($(window).width())-1024)/2;
			//alert(x);
			$('.wrap').css("left",x+"px");
		});

	</script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
	
</head>
<body>

	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/logo1.jpg"/>
			</div>		
			<div>
			<div id="heading">
				<a href="index.html">Online Marketing</a>
			</div>
			</div>
		</div>
		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" >HOME</a>
				<a class="brand" href="train.php" >FIND PRODUCTS</a>
				<a class="brand" href="reservation.php">OFFERS</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="contact.php">CONTACT</a>
				<a class="brand" href="about.php">ABOUT </a>
				</div>
			</div>
		</div>
		
		<!-- Login and signup -->
		<div align="center">
		
		<?php
			if(isset($_SESSION['error']))
			{
			 if(isset($_SESSION['name']))
			 {
				//echo "nikul";
			 }
			 else if($_SESSION['error']==15)
			 {
				//echo "hilgr";
		?>
				<div class="alert alert-error"><font size="5"> Please Login First..</font> 
				</div>
		<?php	 }
			}
			//else{ echo "hi";}
		?>
			<br />
			<br />
		<div  class=" well login">
			<form class="form-signin " method="post" action="login.php">
		
			<table class="table" style="margin-bottom:4px;">
			
			<tr>
			<td style="border-top:0px;"><label> Username</label></td>
			<td style="border-top:0px;"> <input type="text" name="user" class="input-block-level" placeholder="Firstname" autocomplete="off"></td>
			</tr>
			<tr >
			<td style="border-top:0px;"> <label>Password</label></td>
			<td style="border-top:0px;"><input type="password" name="psd" id="pass" class="input-block-level" placeholder="password" autocomplete="off"></td>
			</tr>
			<tr>
				<td colspan="2" style="border-top:0px;"> <input type="checkbox" onclick="myfunction()">&nbsp;Show Password</td>
			</tr>
			<tr>
			<td colspan=2 style="border-top:0px; visibility:hidden;" id="wrong"  class="label label-important">Username and/or Password Wrong !!!</td>
			</tr>
			<tr>
			<td style="border-top:0px;"></td>
			<td style="border-top:0px;"> <input class="btn btn-info" type="submit" value="Login"></td>
			</tr>
			<tr>
			<td colspan="2" style="border-top:0px;"> <p> Haven't registerd? Sign Up here</p></td>
			</tr>
			<tr>
			<td style="border-top:0px;"></td>
			<td style="border-top:0px;"> <a class="btn btn-info" href="signup.php?value=0">Signup</a></td>
			</tr>
			</table>
			</form>
		</div>
		</div>
		<br/>
		<br/>
		<script type="text/javascript">
			function myfunction()
			{
				var x=document.getElementById("pass");
				if(x.type==="password")
				{
					x.type="text";
				}
				else
				{
					x.type="password";
				}
			}
		</script>
		<!-- Footer -->
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
		</footer>	
	</div>
</body>
</html>
<?php
if(isset($_SESSION['error']))
{
if($_SESSION['error']==1)
echo "<script>document.getElementById(\"wrong\").style.visibility=\"\";</script>";
session_destroy();
}

?>	