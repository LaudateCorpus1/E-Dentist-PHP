<?php if (session_status() == PHP_SESSION_NONE) {
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
     
 else{ ?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/script.js"></script>
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
			
                       <li><a href="../index.php" class="hvr-underline-from-left" id="links"                 
                                 ><span      class="glyphicon glyphicon-home"></span></a></li>
                    <li><a href="../?admin=terminet" class="hvr-underline-from-left" id="links">TERMINET</a></li>
                           <li><a href="../?admin=vizita" class="hvr-underline-from-left"id="links">VIZITA </a></li>
                    <li><a href="../?admin=userat" class="hvr-underline-from-left" id="active">PERDORUESIT </a></li>
                    <li><a href="../?admin=keshillat" class="hvr-underline-from-left"id="links">KESHILLAT </a></li>
                    <li><a href="../?admin=sherbimet" class="hvr-underline-from-left" id="links">SHERBIMET</a></li>
                 </ul>
             </div>
        </div>
    </div>
<div class ="container" id="content" align="center">           
    <div class="span10 offset1">
        <div class="row">
            <h3>Krijo Perdorues</h3>
        </div>     
    <div class="col-sm-6">
        <form id="user_form" method="POST" action = "user_insert.php" onsubmit="return validateUserForm()" >
            <div class="form-group" >
                <label class="required" for="name" title="Emri">Emri:</label>
                    <input id="name" type="text" class="form-control" name="name" value="" placeholder="Shkruaj Emrin" >
               <span id="name_validation" class="error"></span>
             
            </div>
            <div class="form-group">
                <label class="required" for="surname">Mbiemri:</label>
                <input id="surname" type="text" class="form-control" name="surname" value="" placeholder="Shkruaj Mbiemrin"   >
                 <span id="surname_validation" class="error"></span>
            </div>
      <div class="form-group">
      <label class="required" for="username">Username:</label>
      <input id="username"type="text" class="form-control" name="username" value="" placeholder="Shkruaj Username" >
      <span id="username_validation" class="error"></span>
     
    </div>
    <div class="form-group">
      <label class="required" for='password1'>Password:</label>
      <input id="password1"type="password" class="form-control" name="password1" value="" placeholder="Shkruaj Password"  >
<span id="password1_validation" class="error"></span>
      
    </div>
             <div class="form-group">
      <label class="required" for='password2'>Password:</label>
      <input id="password2" type="password" class="form-control" name="password2" value="" placeholder="Shkruaj Password">
    <span id="password2_validation" class="error"></span>
      
    </div>
      <div class="form-group">
   <label for='e-mail'>E-Mail:</label>
      <input id="e-mail" type="text" class="form-control" name="e-mail" value="" placeholder="Shkruaj E-mail" >
      <span id="email_validation" class="error"></span>
      </div>
       <div class="form-group">
   <label for='e-mail'>Privilegji:</label>
     <select class="form-control" id="privilegji" name="privilegji">
    <option value="0">Perdorues</option>
    <option value="1">Administrator</option>
     </select>
       </div>
      
       
     
     
   
    <button type="submit" value="Submit" form ="user_form"class="btn btn-success"><span class="glyphicon glyphicon-ok">&thinsp;</span>Krijo</button>
     <button type="reset" value="Cancel" form ="user_form" class="btn btn-warning" ><span class="glyphicon glyphicon-remove">&thinsp;</span>Fshije</button>
    <a class="btn btn-default" href="../?admin=userat"><span class="glyphicon glyphicon-chevron-left">&thinsp;</span>Kthehu</a>
  </form>
        
                </div>
 <div class="col-sm-6">
     <span><br></span>
      
          <ul class="list-group">
  <li class="list-group-item">  <p>Emri nuk duhet te permbaje numra apo elemente tjera perveq shkonjave. Emri nuk mund te lihet i zbrazet dhe te jete me i vogel se 3 shkronja</p></li>
  <li class="list-group-item"><p>Mbiemri nuk duhet te permbaje numra apo elemente tjera perveq shkonjave. Mbiemri nuk mund te lihet i zbrazet dhe te jete me i vogel se 3 shkronja</p></li>
  <li class="list-group-item"> <p>Username mund  te permbaje numra apo elemente tjera perveq shkonjave. Username nuk mund te lihet i zbrazet dhe te jete me i vogel se 3 shkronja</p></li>
  <li class="list-group-item"> <p>Password mund te permbaje numra apo elemente tjera. Passwordi nuk mund te jete me i vogel se 8 shkronja per shkaqe sigurie.</p> </li>
  <li class="list-group-item"> <p>E-mail duhet te jete i formes standarde dhe eshte esenciale qe te hapet llogaria. Nese nuk ka ateher duhet te hapet nga perdoruesi</p></li>  
  <li class="list-group-item"> <p>Privilegji nenkupton se qfar lloji te deshiron te krijon. Perdorues i thjeshte apo Administrator i cili mund te menagjon programin </p></li>  
</ul>
       
                </div>
                </div>


 <?php               
 }