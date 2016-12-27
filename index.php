<?php include ('inc/db_con.php'); 


$inTwoMonths = 60 * 60 * 24 * 60 + time(); 
setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths); 
?>
<!DOCTYPE html>

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
    <script type="text/javascript" src="js/jquery.jSlider.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
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
			  <li><a href= "?faqe=home" id="logo"></a></li>
                          <li><a href="?faqe=home" class="hvr-underline-from-left" <?php if($_GET['faqe']=== "home")
                                 echo' id="active"';
                          else echo 'id="links"';?>
                     
                              >KRYEFAQJA</a></li>
			<li><a href="?faqe=services" class="hvr-underline-from-left" <?php if($_GET['faqe']=== "services")
echo' id="active"';else echo 'id="links"';?>>SHERBIMET </a></li>
                        <li><a href="?faqe=keshillat" class="hvr-underline-from-left" <?php if($_GET['faqe']=== "keshillat")
echo' id="active"';else echo 'id="links"';?>>KESHILLAT </a></li>
			<li><a href="?faqe=contact" class="hvr-underline-from-left" <?php if($_GET['faqe']=== "contact")
echo' id="active"';else echo 'id="links"';?>>KONTAKTI</a></li>
                        <?php
                            if(isset($_SESSION['logged_in']) && $_SESSION['mof'] == 1   )
                            {
                                echo '<li><a href="admin/?admin=terminet" class="hvr-underline-from-left" id="links">MENAXHIMI</a></li>';
                            }
                             if(isset($_SESSION['logged_in']) && $_SESSION['mof'] == 0)
                             {
                                 ?> <li><a href="?faqe=terminet" class="hvr-underline-from-left" <?php if($_GET['faqe']=== "terminet" || $_GET['faqe'] === "create" || $_GET['faqe'] === "historiku") echo' id="active"';else echo 'id="links"';?>
                               
                               >TERMINET</a></li>
<?php
                             }
                            ?>
                        
		 </ul>
                      <ul class="nav  pull-right" id="navbar-collapse" style="margin-top:5px;">
                           <li class="dropdown" id="menuLogin">
                               <a class="dropdown-toggle hvr-bubble-bottom " href="#" data-toggle="dropdown" id="links">
                                   
                      
                        <?php
                        if(isset($_SESSION['logged_in']) ){
                            echo 'LLOGARIA</a>';
                            echo '<div class="dropdown-menu " style="margin-left: -150px; padding:20px; width:250px;">';
                            echo '<p>Miresevini</p>';
                            echo '<p>'.$_SESSION['name'].'&nbsp;'.$_SESSION['surname'].'</p>';
                            echo "<form  method=\"post\" action=\"logout.php\">";
                                  if($_SESSION['mof'] == 0){
                            echo "<a class=\"btn btn-default pull-right\" href=\"?faqe=menaxho\">Menaxho</a>";
                                  }
                             echo"<button type=\"submit\" id=\"submit\" class=\"btn btn-default\">Log Out</button></form>";   
                            
                        }
                        else 
                        {
                            echo 'LOG IN</a>';
                            echo '<div class="dropdown-menu" style="margin-left: -150px; padding:20px; width:250px;">';
                            include 'login.php';  
                        }
                        ?>
                                 
                           </li>
                       </ul>
		 </div>
        
		 </div>
		 </div>
		 

			
		</div>
		
			
				 <div class ="container" id="content" align="center">
					<?php
					switch (@$_GET['faqe'])
					{  
                                            case "historiku":
                                            include ('historiku.php');
                                            break;
                                        case "menaxho":
                                            include ('menaxho.php');
                                            break;
                                        case "create":
                                            include ('CRUD/create.php');
                                            break;
                                        case "terminet":
                                            include('terminet.php');
                                            break;
                                        case "keshillat":
                                             include('keshillat.php');
                                            break;
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
                                           header("Location:index.php?faqe=home");
                                            break;
					}
					?>
                                    
				</div>
					<div class=" navbar navbar-inner  navbar-bottom-fixed" id="footer">

    <p align="center"><strong>E-Dentist 2016 | All Rights Reserved</strong> </p>
</div>
   
	</body>
</html>