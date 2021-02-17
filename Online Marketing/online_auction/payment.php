<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	</link>
	<link href="css/Default.css" rel="stylesheet">
	</link>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"></link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
			<div style="float:right; font-size:20px;margin-top:20px;">
			
			</div>
			<div id="heading">
				<a href="index.php" >Online Marketing</a>
			</div>
			</div>
		</div>
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse" >
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" ><i class="fa fa-home" aria-hidden="true"></i>&nbsp;HOME</a>
				<a class="brand" href="train.php" >FIND PRODUCT</a>
				<a class="brand" href="reservation.php" >OFFERS</a>
				<a class="brand" href="profile.php" >PROFILE</a>
				<a class="brand" href="contact.php" >CONTACT</a>
				<a class="brand" href="about.php" >ABOUT</a>
				

				</div>
			</div>
		</div>
		
		<div class="span12 well" align="center">
			<form action="" method="post">
				<div align="center">
		
			<h1  style="font-size:2vw;color:#2196f3">Payment</h1>
			<h4>Accepted <b style="color:#ff3333">Debit/Credit</b> Card</h4>
				<img src="images/card.png" alt="card image"/><br/>
				<label for="name">Name of Card<font color="red">*</font></label><br/>
				<input type="text" name="cardname" id="cname" style="width:25%;" class="input-block-level" placeholder="Enter Name of card" autocomplete="off" />
								<label for="number">Debit/Credit Card Number<font color="red">*</font></label><br/>
				<input type="text" name="number" id="cno" style="width:25%;" maxlength="16" class="input-block-level" placeholder="xxxx-xxxx-xxxx-xxxx" autocomplete="off"/><br/>
			
				         
						<label for="edate"> Expiry date <font color=red>* </font></label>
						<input type="month" name="cdate" id="cdate" style="width:25%;" class="input-block-level" min="2019-04" max="2029-04" autocomplete="off"/>
					
					
						<label for="edate"> CVV <font color=red>* </font></label>
						<input type="text" name="number" id="cv" style="width:25%;" class="input-block-level" maxlength="3" autocomplete="off" placeholder="Enter 3-digit CVV number"/>
						<br/>
						<div   class="g-recaptcha" data-sitekey="6Le8AZgUAAAAAInfGsGliBNfhyOJyz1W916NnetK"></div>
					
					   <br/>
						<a class="btn btn-info" name="payment"  id="pbtn" title="check email after payment" title="Your booking amount will be auto updated  into e-ticket">Pay<!-- <i class="fa fa-rupee" aria-hidden="true"></i>&nbsp;<?php 
						echo $_SESSION['total']; ?> --></a>
					</div>
			</form>
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
	<script type="text/javascript">
		$(document).ready(function(){
			$('#pbtn').on('click',function(e){
				e.preventDefault();
				$name = $('#cname').val();
                $no = $('#cno').val();
                $date = $('#cdate').val();
                $cvv= $('#cv').val();
                $capcode = $('#captcha').val();
                $code = $('#ccode').val();
                 if($name=='' || $no=='' || $date=='' || $date=='' || $cvv=='' || $code == '')
                 {
                 	 swal('Check your Input!','','error'); 
                 }
                 else
                 {
                 	setInterval(function(){
                 		window.location = "paysuccess.php";
                 	},4000);
                 	 swal('Thank you for sending your message!','','success');
                 }
			});
		});
	</script>
	 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
