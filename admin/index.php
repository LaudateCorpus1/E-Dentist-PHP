<?php
include ('../inc/db_con.php');  
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['logged_in']))
 {
     $message = "Nuk keni akses.";
     echo "<script type='text/javascript'>alert('$message');</script>" ;
      header("refresh:0 url=../index.php");
 }
 else if($_SESSION['mof'] == 0)
 {
      $message = "Nuk keni akses.";
     echo "<script type='text/javascript'>alert('$message');</script>" ;
      header("refresh:0 url=../index.php");
 }
     
 else{ 

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
      <script type="text/javascript" src="../js/jquery.jSlider.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $( function() {
    $( "#datepicker" ).datepicker({ minDate: +1, maxDate: +31, dateFormat: "yy-mm-dd" });
  } );
          </script>     
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
                    <li><a href="?admin=terminet" class="hvr-underline-from-left"<?php if($_GET['admin']=== "terminet" || $_GET['admin'] === "create")
echo' id="active";';else echo 'id="links"';?> >TERMINET</a></li>
                    <li><a href="?admin=userat" class="hvr-underline-from-left"<?php if($_GET['admin']=== "userat")
echo' id="active";';else echo 'id="links"';?>>PERDORUESIT </a></li>
                 </ul>
             </div>
        </div>
    </div>
    <div class ="container" id="content" align="center">
        <?php 
        if(isset($_SESSION['logged_in'])){ 
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
                    header("Location: index.php?admin=terminet");
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
       

  
</body>    
</html>
 <?php 

 
 }