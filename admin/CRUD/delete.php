   <?php
 
         include('../../inc/db_con.php');
 $Tname = null;
 $Tsurname = null;
 $Tusername = null;
 $Tdate = null;
 $Ttime = null;
 $Temail = null;
 $id = null;
 $id_termini = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
  
    if ( null==$id ) {
       $message = "Te dhenat nuk u gjeten.";
                        echo "<script type='text/javascript'>alert('$message');</script>" ;
        
        header("refresh:0 url=../index.php");
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
                    <li><a href="../../index.php" class="hvr-underline-from-left" id="links">KRYEFAQJA</a></li>
                    <li><a href="../index.php" class="hvr-underline-from-left" id="links">TERMINET</a></li>
                    <li><a href="../user.php" class="hvr-underline-from-left" id="links">USERAT </a></li>
                 </ul>
             </div>
        </div>
    </div>
<div class ="container" id="content" align="center">
               
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Shlyerja e terminit</h3>
                    </div>
                    <table class="table table-bordered">
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
      <div class="panel-heading">A jeni i sigurt qe deshiron te shlyeni terminin ?</div>
      <div class="panel-body">
                      <div class="form-actions">
                          <button type="submit" class="btn btn-danger">Po</button>
                          <a class="btn btn-default" href="../index.php">Jo</a>
                        </div>
                      </div>
                    </form>
                </div>
                 
</div> <!-- /container -->
 
  </body>