<?php include ('inc/db_con.php'); 


$inTwoMonths = 60 * 60 * 24 * 60 + time(); 
setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths); 


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="edentist.ico">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="css/jSlider.css">
	<link rel="stylesheet" type="text/css" href="css/hover.css">
    <title>E-Dentist</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

	<body>
		<div class = "navbar navbar-inverse navbar-fixed-top " id="header" >
   <div class = "container">
  
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
			
              
		   <div class="collapse navbar-collapse" id="navbar-collapse">
                       
		   <ul class ="nav navbar-nav">
			   <li><a href= "?faqe=home" id="logo"></a></li>
			<li><a href="?faqe=home" class="hvr-underline-from-left" id="links">KRYEFAQJA</a></li>
			<li><a href="?faqe=services" class="hvr-underline-from-left" id="links">SHERBIMET </a></li>
			<li><a href="?faqe=contact" class="hvr-underline-from-left" id="links">KONTAKTI</a></li>
		 </ul>
		 </div>
		 </div>
		 </div>
		 

			
		</div>
		
			
				 <div class ="container" id="content"align="center">
					<?php
					switch (@$_GET['faqe'])
					{
					case "home":
						include('home.php');
						break;
					case "services":
						include('service.php');
						break;
					case "contact":
						include('contact.php');
                                                break;
					default:
						include('home.php');
						break;
					}
					?>
				</div>
					<div class=" navbar navbar-inner  navbar-bottom-fixed" id="footer">
    <a href="#" onclick="goToByScroll('top'); return false;" ></a>
    <p align="center"><strong>E-Dentist 2016 | All Rights Reserved</strong> </p>
</div>
                   <script src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.jSlider.js"></script>
    <script src="js/ism-2.2.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>