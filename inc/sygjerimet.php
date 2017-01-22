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

     
 else{ 
?> 
<style>

    label{float:left;} 
</style>

<div class="span10 offset1">
                    <div class="row">
                        <h3>Jep Sygjerim</h3>
                    </div>
             
    <div class="col-sm-6">
        
    <form id="sygjerim_form" method="POST" action = "inc/sygjerimet_insert.php" onsubmit="return validateSygjerimForm();" >
         
      <div class="form-group">
      <label class="required" for="username">Username:</label>
      <input id="username"type="text" class="form-control" name="username" value="<?php echo $_SESSION['username'];?>" readonly placeholder= Username">
      <span id="username_validation" class="error"></span>
     
    </div>
       <div class="form-group">
      <label class="required"  for="date">Sygjerimi:</label>
      <textarea  id="sygjerimi" name="sygjerimi"  class="form-control"></textarea>
       <span id="sygjerimi_validation" class="error"></span>
     
     
    </div>
    <button type="submit" value="Submit" form ="sygjerim_form"class="btn btn-success">Shto</button>
     <button type="reset" value="Cancel" form ="sygjerim_form" class="btn btn-warning" >Shlyej</button>
    <a class="btn btn-default" href="?faqe=home">Kthehu</a>
  </form>
        
                </div>
 <div class="col-sm-6">
     <span><br></span>
     <span><br></span>
    
          <ul class="list-group">
             
  <li class="list-group-item"> <p>Username eshte i zgjedhur nga llogaria juaj dhe nuk mund te ndryshohet.</p> </li>
  <li class="list-group-item"> <p>Shkruani sygjerimin qe do ti ofroni dentistit ne menyre qe dentisti te mund te e permisoje sherbimin e tij ndaj te gjithe pacienteve.</p></li>  
</ul>
       
                </div>
                </div>
</div>

 <?php }
               