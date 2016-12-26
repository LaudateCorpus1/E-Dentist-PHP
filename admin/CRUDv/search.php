<?php
include('../../inc/db_con.php');
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
     
     $term= null;
    if (!empty($_GET)) 
    {
        $term = $_GET['id'];
    }
    else{
    $term = $_POST['srch-term'];
    
    }
      ?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../edentist.ico">
	<link rel="stylesheet" type="text/css" href="../../css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="../../css/hover.css">  
 

    <title>E-Dentist</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
      <script type="text/javascript" src="../../js/jquery.jSlider.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/script.js"></script>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>   
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
                    <li><a href="../?admin=terminet" class="hvr-underline-from-left"id="links"> TERMINET</a></li>
                     <li><a href="../?admin=vizita" class="hvr-underline-from-left"id="active">VIZITA </a></li>
                    <li><a href="../?admin=userat" class="hvr-underline-from-left"id="links">PERDORUESIT </a></li>
                 </ul>
             </div>
        </div>
    </div>
    <div class ="container" id="content" align="center">
     <div class="container">

            <div class="row">
                <h3>Rezultati i kerkimit</h3>
                <p>Fjala per kerkim: <?php echo $term;?></p>
                
          
            </div>
               
           
                 <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Emri</th>
                      <th>Mbiemri</th>
                      <th>E-Mail</th>
                      <th>Diagnoza</th>
                      <th>Termini</th>
                      <th>Menaxhimi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $selektimi = "SELECT u.name, u.surname, u.email, t.id_termini, v.id_historiku, v.diagnose, t.date, t.time FROM user AS u INNER JOIN termini as T INNER JOIN vizita AS v ON t.id_users=u.user_id AND t.id_termini=v.termin_id WHERE u.name LIKE '%".$term."%' OR u.surname LIKE '%".$term."%' OR u.email LIKE '%".$term."%' OR t.time LIKE '%".$term."%' OR t.date LIKE '%".$term."%' OR v.diagnose LIKE '%".$term."%' ORDER BY `t`.`date` ASC, t.time ASC";
                    		$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
                                
                       if(mysql_num_rows($result)== 0){

            $message = "Nuk eshte gjetur asnje e dhene. Provoni perseri";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh:0;url=../?admin=vizita");
        }
                else{
                  while($row = mysql_fetch_array($result))
		{
			
			list( $name, $surname,  $email, $termini_id, $vizita_id, $diagnoza )=$row;
			echo '  <tr>'; 
			echo '<td>'.$name.'</td>'; 
			echo '<td>'.$surname.'</td>'; 
		       echo '<td>'.$email.'</td>'; 
			
			echo '<td>'.$diagnoza.'</td>'; 
                        echo '<td><a class="btn btn-default" href="CRUD/read.php?id='.$termini_id.'" >Termini</a></td>'; 
                        echo '<td><a class="btn btn-default" href="CRUDv/read.php?id='.$vizita_id.'" >Lexo</a>';
                        echo ' ';
                        echo '<a class="btn btn-info   " href="CRUDv/update.php?id='.$vizita_id.'" >Ndrysho</a>';
                        echo ' ';
                        echo '<a class="btn btn-danger" href="CRUDv/delete.php?id='.$vizita_id.'" >Fshije</a></td>';
			echo '  </tr>'; 
		}
                }
                  ?>
                  </tbody>
            </table>
     </div>
        </div>

    </body>
 <?php 
 
                }