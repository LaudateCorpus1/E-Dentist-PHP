<?php include ('../inc/db_con.php'); 


$inTwoMonths = 60 * 60 * 24 * 60 + time(); 
setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths); 


?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="edentist.ico">
	<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="../css/hover.css">     
    <title>E-Dentist</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class = "navbar navbar-inverse navbar-fixed-top" id="header" >
        <div class = "container">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>		
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class ="nav navbar-nav">
                    <li><a href="../index.php" id="logo"></a></li>
                    <li><a href="../index.php" class="hvr-underline-from-left" id="links">KRYEFAQJA</a></li>
                    <li><a href="?admin=terminet" class="hvr-underline-from-left" id="links">TERMINET</a></li>
                    <li><a href="?admin=userat" class="hvr-underline-from-left" id="links">USERAT </a></li>
                 </ul>
             </div>
        </div>
    </div>
    <div class ="container" id="content" align="center">
        <?php 
        if(isset($_SESSION['logged_in']) ){ 
            switch (@$_GET['admin'])
            {
                case "terminet":
                    include('terminet.php');
                    break;
                 case "create":
                    include('CRUD/create.php');
                    break;
		case "userat":
                    include('userat.php');
                    break;
		default:
                    include('terminet.php');
                    break;
            }
        }
        else
        {
           $message = "Ju nuk keni privilegje qe te vizitoni kete faqe";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        
                        header("refresh: 0;url=../index.php");
                        
        }
	?>		
    </div>
    <div class=" navbar navbar-inner  navbar-bottom-fixed" id="footer">
        <p align="center"><strong>E-Dentist 2016 | All Rights Reserved</strong> </p>
    </div>
    <script src="../js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../js/jquery.jSlider.js"></script>
    <script src="../js/ism-2.2.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
</body>    
</html>
