<?php
include('db_con.php');
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
 $Temail = null;
 $Tdiagnoza = null;
 $Ttermini = null;
 $id= null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
  
    if ( null==$id ) {
       $message = "Te dhenat nuk u gjeten.";
                        echo "<script type='text/javascript'>alert('$message');</script>" ;
        
        header("refresh:0 url=../index.php");
    } else {
$selektimi = "SELECT u.name, u.surname, u.email, v.id_historiku, d.diagnoza FROM vizita AS v INNER JOIN termini as t ON t.id_termini=v.termin_id INNER JOIN user AS u ON t.id_users=u.user_id INNER JOIN diagnoza as d ON d.vizita_id=v.id_historiku  WHERE d.id_diagnoza='".$id."'";
		$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
                   
                       while($row = mysql_fetch_array($result))
		{
			
			list( $name, $surname,  $email, $vizita_id, $diagnoza )=$row;
                        $Tname = $name;
                        $Tsurname = $surname;
                        $Tvizita = $vizita_id;
                        $Tdiagnoza = $diagnoza;
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
                        if(isset($_SESSION['logged_in']) )
                        {
                            echo 'LLOGARIA</a>';
                            echo '<ul class="dropdown-menu "   style="background-color: #FFFFFF;padding:20px; width:300px;" >';
                            echo '<p>Miresevini</p>';
                            echo '<p>'.$_SESSION['name'].'&nbsp;'.$_SESSION['surname'].'</p>';
                            echo "<form  method=\"post\" action=\"../logout.php\">";
                            echo "<a class=\"btn btn-default pull-right\" href=\"../index.php?faqe=menaxho\">Menaxho</a>";
                                echo "<a class=\"btn btn-default pull-right\" href=\"../index.php?faqe=sygjerimi\">Sygjerimet</a>";
                         
                            echo"<button type=\"submit\" id=\"submit\" class=\"btn btn-default\">Log Out</button></form>";  
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
                        <h3>Leximi i Diagnozes</h3>
                       
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
                <td>E-mail</td>
                <td><?php echo $Temail ?></td>
           
            </tr>
            <tr>
                <td>Diagnoza</td>
                <td><?php echo $Tdiagnoza ?></td>
           
            </tr>
            <tr>
                <td>Vizita</td>
                <td><a class="btn btn-default" href="historiku_read.php?id=<?php echo $Tvizita; ?>" ><span class="glyphicon glyphicon-folder-close">&thinsp;</span>Vizita</a></td>
               
            </tr>
            
           
        </tbody>
    </table>
                     <div class='row'>
                            <a href="../?faqe=diagnoza" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left">&thinsp;</span>Kthehu</a>
                </div>
                   
                    </div>
                </div>
                 
</div> <!-- /container -->
 
  </body>
 <?php }