<div class="banner1">
<?php include 'menu.php';
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Comet Inn a Hotel Category Flat Bootstrap Responsive Website Template | Home :: PHP</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Comet Inn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/chocolat.css" rel="stylesheet">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/validatereset.js" type="text/javascript"></script>

<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".banner-page-head").removeClass("imagebg");
				$(".banner1").addClass("banner");

				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
</head>
<body>
		<div class="banner-bottom1">
				<h3 class="tittle"> Reset Password </h2>
				<form method="POST" action="forgotpassword.php" name="forgotpassword" class="forgotpassword">
                <div>
                <input type="text" name="email" id="email" placeholder="Enter your Email-ID" ></div><br/>
                <div>
                <input type="password" name="pwd1" id="pwd1" placeholder="Enter new password" /></div><br/>
                <div>
                <input type="password" name="pwd2" id="pwd2" placeholder="Confirm new password" /></div><br><br>
                <div class="search">
                <input type="submit" name="reset" id="reset" value="Reset Password"></input></div><br><br>
                </form>
				<div class="clearfix"></div>
		</div>
	</div>

<!-- //banner -->


<!--footer-->
	<div class="footer">
		<div class="container">				 	
			<div class="col-md-3 ftr_navi ftr">
				<h3>NAVIGATION</h3>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.html">About</a></li>				
					<li><a href="booking.html">Booking</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="col-md-3 ftr_navi ftr">
					 <h3>FACILITIES</h3>
					 <ul>
						 <li><a href="#">Double bedrooms</a></li>
						 <li><a href="#">Single bedrooms</a></li>
						 <li><a href="#">Royal facilities</a></li>						
						 <li><a href="#">Connected rooms</a></li>
					 </ul>
			</div>
			<div class="col-md-3 ftr_navi ftr">
				<h3>GET IN TOUCH</h3>
				<ul>
					<li>6314.001, WPL,</li>
					<li>University of Texas Dallas</li>
					<li></li>
				</ul>
			</div>
			<div class="col-md-3 ftr-logo">
				<a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Comet Inn</a>
				<ul>
					<li><a href="#" class="f1"> </a></li>
					<li><a href="#" class="f2"> </a></li>
					<li><a href="#" class="f3"> </a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--footer-->
<!-- copy -->
<div class="copy-right">
	<div class="container">
			<div> &copy; 2017 Comet Inn. All Rights Reserved | Design by  <a href="#"> PHP</a></div>
	</div>
</div>
<!-- //copy -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</body>
</html>

<?php
if(isset($_POST['reset']))
{
	ForgotPassword();
}
    
function ForgotPassword()
{
	$con=mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    if(mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    $email=$_POST["email"];
    $newpwd=$_POST["pwd1"];
    $confirmpwd=$_POST["pwd2"];
    
    $query = "SELECT email_id FROM `user` WHERE email_id = '$email'";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_array($result);
    
    if(mysqli_num_rows($result)>0 && $row['email_id']==$email)
    {
        if($newpwd!= $confirmpwd)
        {
            unset($_POST);
            echo "<script type='text/javascript'>alert('Passwords do not match');</script>";
        }
        else
        {
            $update = "UPDATE `user` SET password=md5('$newpwd') WHERE email_id='$email'";
            if($con->query($update)===TRUE)
            {
                unset($_POST);                
                echo "<script type='text/javascript'>alert('Password changed successfully. Login to your account.');</script>";
                header("Location:index.php");
            }
            else
            {        
                unset($_POST);
                echo "<script type='text/javascript'>alert('Password change unsuccessful. Please try again.');</script>";
            }
        }
    }
    else
    {
        unset($_POST);        
         echo "<script type='text/javascript'>alert('Invalid Email entered. Please try again !');</script>";
    }
    
}
?>