<?php
include('../inc/db_con.php');
 if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['logged_in']))
 {
     $message = "Nuk keni akses.";
     echo "<script type='text/javascript'>alert('$message');</script>" ;
      header("refresh:0 url=../index.php");
 }
     
 else{ 
     
     $term= null;
    if (!empty($_GET)) 
    {
        $term = $_GET['id'];
    }
    else{
    $term = $_POST['srch-term'];
    
    }
      ?>
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
    <script src="   ../js/script.js"></script>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
    </head>
    <body>
   <div class = "navbar navbar-inverse navbar-fixed-top" id="header" >
   <div class = "container">
       <div class="navbar-header">
           <a class="navbar-brand" href= "../index.php?faqe=home" id="logo"></a> 
       </div>
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
			
                       
		   <div class="collapse navbar-collapse" id="navbar-collapse">
                       
		   <ul class ="nav navbar-nav">
			
                          <li><a href="../index.php?faqe=home" class="hvr-underline-from-left" id="links" ><span      class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="../index.php?faqe=services" class="hvr-underline-from-left" id="links" >SHERBIMET </a></li>
                        <li><a href="../index.php?faqe=keshillat" class="hvr-underline-from-left" id="links">KESHILLAT </a></li>
			<li><a href="../index.php?faqe=contact" class="hvr-underline-from-left" id="links">KONTAKTI</a></li>
                         <li><a href="../index.php?faqe=terminet" class="hvr-underline-from-left" id="active" >TERMINI</a></li>
                                            
		 </ul>
                      <ul class="nav  navbar-nav navbar-right">
                          
                           <li class="dropdown" id="menuLogin">
                               <a href="#" id="links"class="dropdown-toggle hvr-bubble-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                   
                      <?php
                        $nr = 0;
                        if(isset($_SESSION['logged_in']) )
                        {   
                           $selektimi = "SELECT * FROM message WHERE reciever='".$_SESSION['username']."' AND open=0 ";
                            $result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
                   
                                while($row = mysql_fetch_array($result))
                                {
			
                                list( $id )=$row;
                                $nr=$id;
                                }
                            echo 'LLOGARIA</a>';
                            echo '<ul class="dropdown-menu "   style="background-color: #FFFFFF;padding:20px; width:300px;" >';
                            echo '<p>Miresevini</p>';
                            echo '<p>'.$_SESSION['name'].'&nbsp;'.$_SESSION['surname'].'</p>';
                            echo "<form  method=\"post\" action=\"logout.php\">";
                            echo '<div class="btn-group" role="group" aria-label="...">';
                            if($_SESSION['mof'] == 0)
                            {
                                echo "<a class=\"btn btn-default \" href=\"?faqe=menaxho\">Menaxho</a>";
                                echo "<a  class=\"btn btn-default \" href=\"?faqe=sygjerimi\">Sygjerimet</a>";
                                 echo "<a  class=\"btn btn-default   \" href=\"?faqe=message\">Mesazhi <span class=\"badge\">".$nr."</span></a>";
                            }
                            else
                            {
                                
                                
                                echo "<a class=\"btn btn-default\" href=\"?faqe=mesatarja\">Vlersimi</a>"; 
                                 echo "<a class=\"btn btn-default \" href=\"?faqe=adminmessage\">Mesazhi <span class=\"badge\">".$nr."</span></a>";
                                   
                                }
                                echo"<button type=\"submit\" id=\"submit\" class=\"btn btn-default\">Log Out</button></form>";  
                            echo"</div>";
                        }
                        else 
                        {
                            echo 'LOG IN</a>';
                            echo '<div class="dropdown-menu"   style=" padding:20px; width:300px;">';
                            include 'login.php';  
                        }
                        ?>
                        </li>
                       </ul>
		 </div>
        
		 </div>
		 </div>
		 

			
		
<div class ="container" id="content" align="center">
     <div class="container">

            <div class="row">
                <h3>Rezultati i Terminit</h3>
                <p>Fjala per kerkim: <?php echo $term;?></p>
                
          
            </div>
               
           
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Emri</th>
                      <th>Mbiemri</th>
                      <th>Data</th>
                      <th>Ora</th>
                      <th>E-Mail</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  <?php
                  $selektimi = "SELECT u.user_id, u.name, u.surname, t.date, t.time, u.email, t.id_termini,u.username FROM user AS u INNER JOIN termini AS t ON u.user_id=t.id_users WHERE u.username LIKE '".$_SESSION['username']."' AND (t.date LIKE '%".$term."%' OR t.time LIKE '%".$term."%')  ORDER BY `t`.`date` ASC, t.time ASC";
                    		$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
         
                       if(mysql_num_rows($result)== 0 ){

            $message = "Nuk eshte gjetur asnje e dhene. Provoni perseri";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh:0;url=../index.php?faqe=terminet");
        }
                else{
                       while($row = mysql_fetch_array($result))
                        {
			
			list($user_id, $name, $surname,  $date, $time, $email, $termini_id )=$row;
			echo '  <tr>'; 
			echo '<td>'.$name.'</td>'; 
			echo '<td>'.$surname.'</td>'; 
			echo '<td>'.$date.'</td>'; 
			echo '<td>'.$time.'</td>'; 
			echo '<td>'.$email.'</td>'; 
                        echo '<td><a class="btn btn-default" href="read.php?id='.$termini_id.'" ><span class="glyphicon glyphicon-th-list">&thinsp;</span>Lexo</a>';
                        echo ' ';
                        echo '<a class="btn btn-info   " href="update.php?id='.$termini_id.'" ><span class="glyphicon glyphicon-pencil">&thinsp;</span>Ndrysho</a>';
                        echo ' ';
                        echo '<a class="btn btn-danger" href="delete.php?id='.$termini_id.'" ><span class="glyphicon glyphicon-trash">&thinsp;</span>Fshije</a></td>';
			echo '  </tr>'; 
		}
                }
                  ?>
                  </tbody>
            </table>
     </div>
        </div>
    </div> <!-- /container -->
    
 <?php }