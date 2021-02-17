<?php
	$val=$_GET['value'];
	if($val==1){
	?>
	<h3>User already exists</h3
	<?php
	}
	

?>
<!DOCTYPE html>
<html>
<head>
	<title> Registration </title>
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
			<div id="heading">
				<a href="index.php">Online Marketing</a>
			</div>
		</div>
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse" >
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" >HOME</a>
				<a class="brand" href="train.php" >FIND PRODUCT</a>
				<a class="brand" href="reservation.php">OFFERS</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="contact.php">CONTACT</a>
				<a class="brand" href="about.php">ABOUT </a>
				</div>
			</div>
		</div>
		
		<!-- registration form -->
		<div align="center">
		<div class="span12 well">
		<div style="font-size:30px;"> Signup</div>
		<br/>
		
		
		<div class="table">
		
		<form name="signup"  method="post" action="register.php" onsubmit="return valid12()">
		<table>
		<tr>
			<td style="border-top:0px;"> First Name <font color=red>* </font></td>
			<td style="border-top:0px;"><input type="text" name="fname" class="input-block-level" placeholder="Enter the First name" autocomplete="off" onblur="return name1()"" ><span id="fn"></span></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Last Name <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" name="lname" class="input-block-level" placeholder="Enter the Last name" autocomplete="off" onblur="return name12()"><span id="ln"></span></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Email ID <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="email" class="input-block-level" name="eid" placeholder="Enter the valid email id" autocomplete="off"></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Password <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="password" class="input-block-level" name="psd" placeholder="Enter the password"autocomplete="off" onblur="return check1()"> <span id="ps" ></span></td>
		</tr>
		
		<tr>
			<td style="border-top:0px;"> Confirm Password <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="password" class="input-block-level" name="cpsd" autocomplete="off" placeholder="Re-type the password" onblur="return confirm1()"> <span id="cps" ></span></td>
		</tr>
		
		<tr>
			<td style="border-top:0px;"> Gender <font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="gnd">
				<option value="male">MALE</option>
				<option value="female">FEMALE</option>
				<option value="transgender">TRANSGENDER</option>
			    </select>
			</td>
		</tr>
		
		<tr>
			<td style="border-top:0px;">Marital Status <font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="mrt">
				
				<option value="married">Married</option>
				<option value="unmarried">Unmarried</option>
			    </select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Date of Birth <font color=red>* </font></td>
			<td style="border-top:0px;"><input type="date" class="input-block-level input-medium"  name="dob" max="<?php echo date('Y-m-d',time()-60*60*24*365*18);?>" value="<?php echo date('Y-m-d',time()-60*60*24*365*18);?>"> </td>
		</tr>
		
		<tr>
			<td style="border-top:0px;"> Mobile No. <font color=red>*</font> </td>
			<td style="border-top:0px;"> +91 <input type="text" class="input-block-level" autocomplete="off" name="mobile" placeholder=" Enter your mobile number" onblur="return mobile1()"> <span id="mn"></span></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Security Question <font color=red>* </font></td>
			<td style="border-top:0px;">
				<select name="ques">
				<option value="What is your pets name ?">What is your pet name ?</option>				
				<option value="What was the name of your first school?">What was the name of your first school?</option>				
				<option value="What is your favorite hero?">What is your favorite hero?</option>
				<option value="What is your favorite movie?">What is your favorite movie?</option>
				</select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Your Answer <font color=red>* </font></td>
			<td style="border-top:0px;"> <input type="text" name="ans" class="input-block-level" autocomplete="off" placeholder="Enter the your answer" onblur="return ans1()"><span id="an"></span></td>
		</tr>
		<tr>
			<td style="border-top:0px;></td>
			<td style="border-top:0px;">Already have an account?&nbsp;<a href="login1.php"><b style="color:green;"><u>Sign in</u></b></a></td>
			
		</tr>
		<tr>
			<td style="border-top:0px;"><input class="btn btn-info" type="submit" value="submit" id="subb" ></td>
			<td style="border-top:0px;"><input class="btn btn-info" type="reset" value="Reset"></td>
		</tr>
		
		</table>
		</form>
		</div>
		</div>
		</div>
		
		
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
				<span><a href="https://twitter.com/AnupamT37695251" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>&nbsp;
				<span><a href="https://www.instagram.com/tiwarianupam1980gm/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
</p>
			</div>
		</div>
		</footer>
	</div>

</body>
</html>