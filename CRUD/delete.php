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

         
 $Tname = null;
 $Tsurname = null;
 $Tusername = null;
 $Tdate = null;
 $Ttime = null;
 $Temail = null;
 $id_termini = null;
 $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
  
    if ( null==$id ) {
       $message = "Te dhenat nuk u gjeten.";
                        echo "<script type='text/javascript'>alert('$message');</script>" ;
        
        header("refresh:0 url=../index.php?faqe=terminet");
    } else {
$selektimi = "SELECT u.user_id, u.name, u.surname, u.username,t.id_termini, t.date, t.time, u.email FROM user AS u INNER JOIN termini AS t ON u.user_id=t.id_users WHERE t.id_termini='".$id."'";
		$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
                   
                       while($row = mysql_fetch_array($result))
		{
			
			list($user_id, $name, $surname,$username, $termini_id, $date, $time, $email,  )=$row;
                        $Tname = $name;
                        $Tsurname = $surname;
                        $Tusername = $username;
                        $id_termini = $termini_id;
                        $Tdate = $date;
                        $Ttime = $time;
                        $Temail = $email;
			
			
                }
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
                                 echo "<a  class=\"btn btn-default   \" href=\"?faqe=message\">Mesazhi<span class=\"badge\">".$nr."</span></a>";
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
               
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Fshirja e Terminit</h3>
                       
                    </div>
                         <table class="table table-striped table-bordered">
         <thead>
             
        </thead>
        <tbody>
            <tr>
                <td>Emri</td>
                <td><?php echo $Tname ?></td>
              
            </tr>
            <tr>
                <td>Mbiemri</td>
                <td><?php echo $Tsurname ?></td>
               
            </tr>
            <tr>
                <td>Username</td>
                <td><?php echo $Tusername ?></td>
           
            </tr>
            <tr>
                <td>E-Mail</td>
                <td><?php echo $Temail ?></td>
           
            </tr>
            <tr>
                <td>Data</td>
                <td><?php echo $Tdate;  ?></td>
               
            </tr>
            <tr>
                <td>Ora</td>
                <td><?php echo $Ttime ?></td>

            </tr>
           
        </tbody>
    </table>
   
                    <form class="form-horizontal" action="termin_delete.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $id_termini;?>"/>
                        <div class="panel panel-danger">
      <div class="panel-heading">A jeni i sigurt qe deshiron te shlyeni Terminin ?</div>
      <div class="panel-body">
                      <div class="form-actions">
                          <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-ok">&thinsp;</span>Po</button>
                          <a class="btn btn-default" href="../index.php?faqe=terminet"><span class="glyphicon glyphicon-remove">&thinsp;</span>Jo</a>
                        </div>
                      </div>
                    </form>
                </div>
                 
</div> <!-- /container -->
 
  </body>
 <?php }