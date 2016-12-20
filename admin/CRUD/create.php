<?php 
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
<div class="span10 offset1">
                    <div class="row">
                        <h3>Krijo Termin</h3>
                    </div>
             
    <div class="col-sm-6">
        
    <form id="termin_form" method="POST" action = "CRUD/termin_insert.php" onsubmit="return validateForm();" >
    <div class="form-group" >
      <label for="name">Emri:</label>
      <input id="name" type="text" class="form-control" name="name" value="" placeholder="Shkruaj Emrin">
      <span id="name_validation" class="error"></span>
    </div>
    <div class="form-group">
      <label for="surname">Mbiemri:</label>
      <input id="surname" type="text" class="form-control" name="surname" value="" placeholder="Shkruaj Mbiemrin">
      <span id="surname_validation" class="error"></span>
      
    </div>
      <div class="form-group">
      <label class="required" for="username">Username:</label>
      <input id="username"type="text" class="form-control" name="username" value="" placeholder="Shkruaj Username">
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
           </select>
     
      
    </div>
      <div class="form-group">
      <label class="required"  for="date">Data:</label>
       <input type="text"  id="datepicker" name="datepicker" readonly class="form-control">
       <span id="date_validation" class="error"></span>
     
     
    </div>
    <button type="submit" value="Submit" form ="termin_form"class="btn btn-success">Krijo</button>
     <button type="reset" value="Cancel" form ="termin_form" class="btn btn-warning" >Fshije</button>
    <a class="btn btn-default" href="?admin=terminet">Kthehu</a>
  </form>
                </div>
 <div class="col-sm-6">
      <span><br></span>
       <span><br></span>
      
          <ul class="list-group">
  <li class="list-group-item">  <p>Emri nuk duhet te permbaje numra apo elemente tjera perveq shkonjave. Emri mund te lihet i zbrazet</p></li>
  <li class="list-group-item"><p>Mbiemri nuk duhet te permbaje numra apo elemente tjera perveq shkonjave. Mbiemri mund te lihet i zbrazet</p></li>
  <li class="list-group-item"> <p>Username duhet te jete i mbushur patjeter pasi nuk mund te shtohet termini nese personi nuk egziston se pari. </p></li>
  <li class="list-group-item"> <p>Per shkak se orari jone i punes eshte nga Ora 08:00-18:00 mund te caktohen vetem 10 termine qe zgjasin nga nje ore.</p> </li>
  <li class="list-group-item"> <p>Zgjedhja e dates eshte e limituar pasi qe te mos kete termine te panevojshme ne muajt e ardhshem. Po ashtu nuk mund te zgjidhet data e sotshme.</p></li>  
</ul>
       
                </div>
                </div>

 <?php }
               
