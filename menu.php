<?php
require_once('config.php');
/* if(!isset($_SESSION[USERINFO][USERNAME_COLUMN])){
    header("Location:login.php");
} */
if(isset($_SESSION[USERINFO][USERNAME_COLUMN])){
    $user = true;
}else{
    $user = false;
}
if($user){
    ?><title>Classic Hotel a Hotel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title><?php
}else{
    ?><title>Welcome admin</title><?php
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/chocolat.css" rel="stylesheet">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<div class="banner-page-head">
	<div class="container">
        <div class="header-nav">
            <div class="logo">
                <h1><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Comet Inn</a></h1>
            </div>
            <div class="navigation">
                <span class="menu"><img src="images/menu.png" alt=""/></span>
                <nav class="cl-effect-11" id="cl-effect-11">
                    <ul class="nav1">
                        <li><a href="home.php" data-hover="HOME">HOME</a></li>
                        <li><a href="about.php" data-hover="ABOUT">ABOUT</a></li>
                        <li><a href="typography.php" data-hover="SERVICES">SERVICES</a></li>
                        <li><a href="booking.php" data-hover="BOOKING">BOOKING</a></li>
                        <li><a href="contact.php" data-hover="CONTACT">CONTACT</a></li>
                        <?php
                        if(!$user){?>
                        <li>
                            <div class="dropdown1">
                                <div class="dropbtn" onclick="myFunction()">ADMIN
                                <i class="fa fa-caret-down"></i>
                                </div>
                                <div class="dropdown-content" id="myDropdown">
                                    <a href="usersList.php">USERS LIST</a>
                                    <a href="roomInfo.php">Rooms List</a>
                                    <a href="manageHotel.php">Manage Hotel</a>
                                </div>
                            </div> 
                        </li>
                            <?php
                        }
                        ?>
                    </ul>
                </nav>
                <!-- script for menu -->
                    <script> 
                        $( "span.menu" ).click(function() {
                        $( "ul.nav1" ).slideToggle( 300, function() {
                            // Animation complete.
                        });
                        });
                    </script>
                <!-- //script for menu -->
                
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $(".banner-page-head").addClass("imagebg");
});
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
</script>