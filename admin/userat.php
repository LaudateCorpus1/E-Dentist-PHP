<?php
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
?>  
<div class="container">
            <div class="row">
               <h3>Perdoruesit</h3>
               <a href="CRUDu/create.php" class="btn btn-success "><span class="glyphicon glyphicon-plus">&thinsp;</span>Krijo</a>
            </div>
            <div class="col-sm-3 col-md-3 pull-right ">
           <form class="navbar-form" role="search" action="CRUDu/search.php" method="POST">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Kerko" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
                   
        </div>
    </div>

                <div class="table-responsive">
                <table class="table  table-bordered">
                  <thead>
                    <tr>
                      <th>Emri</th>
                      <th>Mbiemri</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>E-Mail</th>
                      <th>Privilegji</th>
                      <th>Menaxhimi</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  <?php
                  $selektimi = 'SELECT user_id, name, surname, username, password, email, admin FROM user';
		$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
                   
                       while($row = mysql_fetch_array($result))
		{
			
			list( $user_id, $name, $surname, $username, $password, $email, $admin  )=$row;
			echo '  <tr>'; 
			echo '<td>'.$name.'</td>'; 
			echo '<td>'.$surname.'</td>'; 
			echo '<td>'.$username.'</td>'; 
			echo '<td>**********</td>'; 
			echo '<td>'.$email.'</td>'; 
                        
                        if($admin == 1)
                        echo '<td>Admin</td>';
                    else {
                          echo '<td>Perdorues</td>';
                    }   
                         echo '<td><a class="btn btn-default" href="CRUDu/read.php?id='.$user_id.'" ><span class="glyphicon glyphicon-th-list">&thinsp;</span>Lexo</a>';
                        echo ' ';
                        echo '<a class="btn btn-info   " href="CRUDu/update.php?id='.$user_id.'" ><span class="glyphicon glyphicon-pencil">&thinsp;</span>Ndrysho</a>';
                        echo ' ';
                        echo '<a class="btn btn-danger" href="CRUDu/delete.php?id='.$user_id.'" ><span class="glyphicon glyphicon-trash">&thinsp;</span>Fshije</a></td>';
			
			echo '  </tr>'; 
		}
                  ?>
                  </tbody>
            </table>
                </div>
 
    </div> <!-- /container -->
 <?php 
 }