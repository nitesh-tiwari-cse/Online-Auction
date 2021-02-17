<?php
	session_start();
	date_default_timezone_set('Asia/calcutta');
	$msg1="";
	$msg2="";
	if(isset($_SESSION['name'])){}
	else{
		header("location:login1.php");
		
	}
	if(isset($_POST['submit']))
		{
                
	require "PHPMailerAutoload.php";

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'nitashtiw3@gmail.com';//Your Username
	$mail->Password = 'NITESHt1998&&&';//Your Password
	$mail->Port = 465;
	$mail->SMTPSecure = "ssl";
	$mail->isHTML(true);
	$mail->setFrom('nitashtiw3@gmail.com',"Online Marketing");
	$mail->addAddress('nitashtiw3@gmail.com');


			          	$mail->Subject=$_POST['subject'];
			          	// $mail->Body="<html><head></head><body style='font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;'><br><br><div style='margin-bottom: 2rem;background-color: #e9ecef;border-radius: .3rem;padding: 4rem 2rem;text-align: center;margin-right: auto;margin-left: auto;width:50%;'><span style='color: #28a745;font-size: 1.65rem;margin-bottom: .5rem;font-weight: 500;line-height: 1.2;'>Your Password has been Changed Successfully! :)</span><br><br><br><br><br><br><br><br><strong style='font-weight: bolder;'>Greetings Saurabh Resort<br>+91 9987666780<br>shuklasaurabhv@gmail.com</strong></div></body></html>";

                      $mail->Body="<html><body><br/><br/><div><b>Name:</b><br/>".$_POST['name']."<br/><b>Email:</b><br/>".$_POST['email']."<br/><b>Phone:</b><br/>".$_POST['phone']."<br/><b>Message:</b><br/>".$_POST['message']."</div><body></html>";
			          	if($mail->send())
			          	{
			          		$msg1= "Your Message Successfully Sent";
			          	}
			          	else
			          	{
			          		$msg2="Oops! mail not sent ";
			          	}
			          
		
	  }
	
	
	
	?>

<!DOCTYPE html>
<html>
<head>
	<title> Contact Form</title>
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
	 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
		$(document).ready(function()
		{
			//alert($(window).width());
			var x=(($(window).width())-1024)/2;
			//alert(x);
			 $('.wrap').css("left",x+"px");
			  // $('#sub').on('click',function(e){
     //           e.preventDefault();
     //            $name = $('#name').val();
     //            $email = $('#email').val();
     //            $phone = $('#phone').val();
     //            $subject= $('#subject').val();
     //            $message = $('#message').val();
     //             if($name=='' || $email=='' || $phone=='' || $subject=='' || $message=='')
     //             {
     //             	 swal('Please,fill all the details','','error'); 
     //             }
     //             else
     //             {
     //             	 swal('Thank you for sending your message!','','success');
     //             }
     //         });


			
			
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
			
			<?php
			 if(isset($_SESSION['name']))
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 ?>
			
			</div>
			<div id="heading">
				<a href="index.html" >Online Marketing</a>
			</div>
			</div>
		</div>
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse" >
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" >HOME</a>
				<a class="brand" href="train.php">FIND PRODUCT</a>
				<a class="brand" href="reservation.php" >OFFERS</a>
				<a class="brand" href="profile.php" >PROFILE</a>
				<a class="brand" href="contact.php" >CONTACT</a>
				<a class="brand" href="about.php" >ABOUT </a>
				</div>
			</div>
		
		</div>
		
		<div class="span12 well" align="center">
	 <form  action="contact.php" method="post" >
			<h2 >CONTACT FORM</h2>
			<p><i></i></p>
	
			<div style="border-top: solid 2px;width:500px;color:aqua;"></div>
			<h3 style="color: green;"><?= $msg1 ?></h4>
				<h3 style="color: red;"><?= $msg2 ?></h4>
		
				<table  align="center">
					
		<tr>
			<td style="border-top:0px;">Name<font color=red>* </font> </td><br/>&nbsp;&nbsp;
			<td style="border-top:0px;border-radius: 50%;"><input type="text" name="name" class="input-block-level" placeholder="enter your full name" autocomplete="off" id="name"></td>
		</tr>
		
		<tr>
			<td style="border-top:0px;"> Email<font color=red>* </font> </td>&nbsp;&nbsp;
			<td style="border-top:0px;"><input type="email" class="input-block-level" name="email" placeholder="example@gmail.com" autocomplete="off" id="email"></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Phone<font color=red>* </font> </td>&nbsp;&nbsp;
			<td style="border-top:0px;width:500px;"><input type="text" maxlength="10" class="input-block-level" maxlength="10" name="phone" placeholder="enter your 10 digits number" id="phone" autocomplete="off" ></td>
		</tr>
		<tr>
			<td style="border-top:0px;">Subject<font color=red>* </font> </td>&nbsp;&nbsp;
			<td style="border-top:0px;"><input type="text" id="subject" class="input-block-level" name="subject" placeholder="enter your subject" autocomplete="off" ></td>
		</tr>
		
		
		<tr>
			<td style="border-top:0px;"> Message<font color=red>* </font> </td>&nbsp;&nbsp;
			<td style="border-top:0px;"><textarea id="message" id="message" class="input-block-level" name="message" autocomplete="off"   placeholder="write something..." style="height:150px; "></textarea></td>
		</tr>
		<!-- <tr>
			<td style="border-top:0px;" >  </font> </td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<td style="border-top:0px;" ><div class="g-recaptcha" data-sitekey="6Le8AZgUAAAAAInfGsGliBNfhyOJyz1W916NnetK"></div></td>
		</tr> -->
		</table><br/>
		<input type="submit" class="btn btn-info" id="sub" name="submit" value="Send Email ">
		</form>	
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
				<span><a href="https://twitter.com/AnupamT37695251" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>&nbsp;
				<span><a href="https://www.instagram.com/tiwarianupam1980gm/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
</p>
			</div>
		</div>
		</footer>
	</div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>