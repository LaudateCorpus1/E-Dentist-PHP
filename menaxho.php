
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['logged_in']))
 {
     $message = "Nuk keni akses.";
     echo "<script type='text/javascript'>alert('$message');</script>" ;
      header("refresh:0 url=index.php");
 }
 else{ 
    $Tname = $_SESSION['name'];
    $Tsurname = $_SESSION['surname'];
    $Tusername = $_SESSION['username'];
    $Tpassword =null;
    $Temail =  null;
    $Tadmin = 0;
    $id = null;
  
$selektimi = "SELECT * FROM user WHERE username='".$Tusername."'";
		$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
                   
                       while($row = mysql_fetch_array($result))
		{
			
			list($user_id, $username, $password,$name, $surname, $email, $admin,   )=$row;
                        $id = $user_id;
                        $Tpassword = $password;
                        $Temail = $email;
                    }
 }
                    
  

?>

<style>
    label
    {
        float:left;
    }
    </style>
<div class="span10 offset1">
     <div class="span10 offset1">
        <div class="row">
            <h3>Ndrysho Perdoruesin</h3>
        </div>     
    <div class="col-sm-6">
        <form id="user_form" method="POST" action = "inc/user_update.php" onsubmit="return validateUserForm();" >
            <div class="form-group" >
                <label class="required" for="name">Emri:</label>
                <input id="name" type="text" class="form-control" name="name" value="<?php echo $Tname;?>" placeholder="Shkruaj Emrin">
                <span id="name_validation" class="error"></span>
            </div>
            <div class="form-group">
                <label class="required" for="surname">Mbiemri:</label>
                <input id="surname" type="text" class="form-control" name="surname" value="<?php echo $Tsurname;?>" placeholder="Shkruaj Mbiemrin">
                 <span id="surname_validation" class="error"></span>
            </div>
      <div class="form-group">
      <label class="required" for="username">Username:</label>
      <input id="username"type="text" class="form-control" name="username" value="<?php echo $Tusername;?>" readonly placeholder="Shkruaj Username">
      <span id="username_validation" class="error"></span>
     
    </div>
     <div class="form-group">
      <label class="required" for='password1'>Password:</label>
      <input id="password1"type="password" class="form-control" name="password1" value="<?php echo $Tpassword;?>" placeholder="Shkruaj Password">
      <span id="password_validation1" class="error"></span>
      
    </div>
             <div class="form-group">
      <label class="required" for='password2'>Password:</label>
      <input id="password2" type="password" class="form-control" name="password2" value="<?php echo $Tpassword;?>" placeholder="Shkruaj Password">
      <span id="password_validation2" class="error"></span>
      
    </div>
      <div class="form-group">
   <label for='e-mail'>E-Mail:</label>
      <input id="e-mail" type="text" class="form-control" name="e-mail" value="<?php echo $Temail;?>" placeholder="Shkruaj E-mail">
      <span id="email_validation" class="error"></span>
      </div>
        <input type="hidden" value="0" name="admin"  />
            <input type="hidden" value="<?php echo $id?>" name="user_id" />
      
       
     
     
   
    <button type="submit" value="Submit" form ="user_form"class="btn btn-success">Ndrysho</button>
     <button type="reset" value="Reset" form ="user_form" class="btn btn-warning" >Fshije</button>
    <a class="btn btn-default" href="?faqe=home">Kthehu</a>
  </form>
        
                </div>
 <div class="col-sm-6">
     <span><br></span>
     
          <ul class="list-group">
  <li class="list-group-item">  <p>Emri nuk duhet te permbaje numra apo elemente tjera perveq shkonjave. Emri nuk mund te lihet i zbrazet dhe te jete me i vogel se 3 shkronja</p></li>
  <li class="list-group-item"><p>Mbiemri nuk duhet te permbaje numra apo elemente tjera perveq shkonjave. Mbiemri nuk mund te lihet i zbrazet dhe te jete me i vogel se 3 shkronja</p></li>
  <li class="list-group-item"> <p>Username Username nuk mund te ndryshohet nga pacienti. Ate mund ta beje vetem dentisti</p></li>
  <li class="list-group-item"> <p>Password mund te permbaje numra apo elemente tjera. Passwordi nuk mund te jete me i vogel se 8 shkronja per shkaqe sigurie.</p> </li>
  <li class="list-group-item"> <p>E-mail duhet te jete i formes standarde dhe eshte esenciale qe te hapet llogaria. Nese nuk ka ateher duhet te hapet nga perdoruesi</p></li>  
  
</ul>
       
                </div>
                </div>
        </div>
 
    </body>

