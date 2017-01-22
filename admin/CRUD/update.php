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
        header("Location: ?admin=terminet");
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
<style>

    label{float:left;} 
</style>
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
                    <li><a href="../../index.php" class="hvr-underline-from-left" id="links">KRYEFAQJA</a></li>
                    <li><a href="../index.php" class="hvr-underline-from-left" id="active">TERMINET</a></li>
       <li><a href="../?admin=vizita" class="hvr-underline-from-left"id="links">VIZITA </a></li>
                    <li><a href="../?admin=userat" class="hvr-underline-from-left" id="links">PERDORUESIT</a></li>
                     <li><a href="../?admin=keshillat" class="hvr-underline-from-left"id="links">KESHILLAT </a></li>
                    <li><a href="../?admin=sherbimet" class="hvr-underline-from-left" id="links">SHERBIMET</a></li>
                 </ul>
             </div>
        </div>
    </div>
        <div class ="container" id="content" align="center">
<div class="span10 offset1">
                    <div class="row">
                        <h3>Ndrysho Termin</h3>
                    </div>
             
    <div class="col-sm-6">
        
        <form id="termin_form" method="POST" action = "termin_update.php" onsubmit="return validateForm();">
      <div class="form-group">
      <label class="required" for="username">Pacienti:</label>
      <input id="username"type="text" class="form-control" name="username" value="<?php echo $Tusername?>" readonly placeholder="Shkruaj Username">
      <span id="username_validation" class="error"></span>
     
    </div>
    <div class="form-group">
      <label class="required">Ora:</label>
        <select class="form-control" id="time" name="time">
    <option value="08:00:00">Termini ne ora 8</option>
    <option value="09:00:00">Termini ne ora 9</option>
    <option value="10:00:00">Termini ne ora 10</option>
     <option value="11:00:00">Termini ne ora 11</option>
      <option value="12:00:00">Termini ne ora 12</option>
       <option value="13:00:00">Termini ne ora 13</option>
        <option value="14:00:00">Termini ne ora 14</option>
         <option value="15:00:00">Termini ne ora 15</option>
          <option value="16:00:00">Termini ne ora 16</option>
           <option value="17:00:00">Termini ne ora 17</option>
           <option value="18:00:00">Termini ne ora 18</option></select>
   
      
    </div>
      <div class="form-group">
      <label class="required"  for="date">Data:</label>
      <input type="text"  id="datepicker" name="datepicker" value="" readonly class="form-control">
      <span id="date_validation" class="error"></span> 
     
     <input type="hidden" value="<?php echo $id_termini?>" name="termini_id" />
    </div>
    <button type="submit" value="Submit" form ="termin_form"class="btn btn-success">Ndrysho</button>
     <button type="reset" value="Cancel" form ="termin_form" class="btn btn-warning" >Fshije</button>
     <a class="btn btn-default" href="../index.php">Kthehu</a>
  </form>
                </div>
 <div class="col-sm-6">
     <span><br></span>
      
          <ul class="list-group">

  <li class="list-group-item"> <p>Username duhet zgjedhur nga lista e personave te cilet egzistojne ne databazen. Nese personi nuk gjendet ai duhet te shtohet </p></li>
  <li class="list-group-item"> <p>Per shkak se orari jone i punes eshte nga Ora 08:00-18:00 mund te caktohen vetem 10 termine qe zgjasin nga nje ore.</p> </li>
  <li class="list-group-item"> <p>Zgjedhja e dates eshte e limituar pasi qe te mos kete termine te panevojshme ne muajt e ardhshem. Po ashtu nuk mund te zgjidhet data e sotshme.</p></li>
</ul>
       
                </div>
                </div>
        </div>
 
    </body>
 <?php } 