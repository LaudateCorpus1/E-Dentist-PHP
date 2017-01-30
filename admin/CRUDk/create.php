<?php 
   include ('../../inc/db_con.php');
    if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['logged_in']))
 {
     $message = "Nuk keni akses.";
     echo "<script type='text/javascript'>alert('$message');</script>" ;
      header("refresh:0 url=../../?faqe=home");
 }
 else if($_SESSION['mof'] == 0)
 {
      $message = "Nuk keni akses.";
     echo "<script type='text/javascript'>alert('$message');</script>" ;
      header("refresh:0 url=../../?faqe=home");
 }
     
 else{ 
?> 
<style>

    label{float:left;} 
</style>
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
                     <li><a href="../?admin=vizita" class="hvr-underline-from-left"id="links">VIZITA </a></li>
                    <li><a href="../?admin=userat" class="hvr-underline-from-left"id="links">PERDORUESIT </a></li>
                     <li><a href="../?admin=keshillat" class="hvr-underline-from-left"id="active">KESHILLAT </a></li>
                    <li><a href="../?admin=sherbimet" class="hvr-underline-from-left" id="links">SHERBIMET</a></li>
                 </ul>
             </div>
        </div>
    </div>
    <div class ="container" id="content" align="center">
<div class="span10 offset1">
                    <div class="row">
                        <h3>Krijo Keshilla</h3>
                    </div>
             
    <div class="col-sm-6">
    
    <form id="keshilla_form" method="POST" action = "keshilla_insert.php"  onsubmit="return validateKeshillaForm();" >
     
      
      <div class="form-group">
          <label class="required"  for="date">Titulli:</label>
          <input class="form-control" id="titulli" name="titulli">
       <span id="titulli_validation" class="error"></span>
      </div>
          <div class="form-group">
           <label class="required">Foto:</label>
      <?php
    $directory = "../../images/";

//get all text files with a .txt extension.
$texts = glob($directory . "*");

//print each file name
 echo "<select value='' class='form-control' id='foto' name='foto'><option>Foto</option>";
foreach($texts as $text)
{
    $name = ( explode("/", $text));
    $path = substr($text, 6);
echo "<option value=".$path ."> ".$name[3]." </option>"; 
    }
         echo "</select>";
    ?>
       <span id="foto_validation" class="error"></span>
     
     
    </div>
            
        
      <div class="form-group">
      <label class="required"  for="date">Permbajtja:</label>
      <textarea  id="permbajtja" name="permbajtja"  class="form-control"></textarea>
       <span id="permbajtja_validation" class="error"></span>
     
     
    </div>
    
    <button type="submit" value="Submit" form ="keshilla_form"class="btn btn-success"><span class="glyphicon glyphicon-ok">&thinsp;</span>Krijo</button>
     <button type="reset" value="Reset" form ="keshilla_form" class="btn btn-warning" ><span class="glyphicon glyphicon-remove">&thinsp;</span>Fshije</button>
    <a class="btn btn-default" href="../?admin=keshillat"><span class="glyphicon glyphicon-chevron-left">&thinsp;</span>Kthehu</a>
  </form>
                </div>
 <div class="col-sm-6">
      <span><br></span>
      
      
          <ul class="list-group">
  <li class="list-group-item"> <p>Shkruani titullin e keshilles te ciles deshironi qe ta shton. Keshilla duhet te kete patjeter nje titull. </p></li>
  <li class="list-group-item"> <p>Shkruani permbajtjen te cilen e ka keshilla te cilen ju ua ofroni vizituesve.</p> </li> 
</ul>
       
                </div>
                </div>
    </div>
    </body>
 <?php }
               
