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
          <label class="required" for="username">Pacienti:</label>
     <select value='' class='form-control' id='username' name='username'>
   
        <option value="<?php echo $_SESSION['username'] ?>"> <?php echo $_SESSION['name']; ?> <?php echo $_SESSION['surname'];?> (<?php echo $_SESSION['username']; ?>)</option>"; 
   </select>
      <span id="username_validation" class="error"></span>
     
    </div>
       <div class="form-group">
      <label class="required"  for="date">Sygjerimi:</label>
      <textarea  id="sygjerimi" name="sygjerimi"  class="form-control"></textarea>
       <span id="sygjerimi_validation" class="error"></span>
     
     
    </div>
    <button type="submit" value="Submit" form ="sygjerim_form"class="btn btn-success"><span class="glyphicon glyphicon-ok">&thinsp;</span>Shto</button>
     <button type="reset" value="Cancel" form ="sygjerim_form" class="btn btn-warning" ><span class="glyphicon glyphicon-remove">&thinsp;</span>Fshije</button>
    <a class="btn btn-default" href="?faqe=home"><span class="glyphicon glyphicon-chevron-left">&thinsp;</span>Kthehu</a>
  </form>
        
                </div>
 <div class="col-sm-6">
     <span><br></span>
     <span><br></span>
    
          <ul class="list-group">
             
  <li class="list-group-item"> <p>Pacienti eshte i zgjedhur nga llogaria juaj dhe nuk mund te ndryshohet.</p> </li>
  <li class="list-group-item"> <p>Shkruani sygjerimin qe do ti ofroni dentistit ne menyre qe dentisti te mund te e permisoje sherbimin e tij ndaj te gjithe pacienteve.</p></li>  
</ul>
       
                </div>
                </div>
</div>

 <?php }
               