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
 $date = date("Y-m-d");

    
?> 

<div class="container">
            <div class="row">
                <h3 >Terminet</h3>
                <a href="?admin=create" class="btn btn-success "><span class="glyphicon glyphicon-plus">&thinsp;</span>Krijo</a>
            </div>
     <div class="row">
         <div class="col-sm-2">
                                <a class="btn btn-default" href="CRUD/search.php?id=<?php echo $date?>" > <span class=" 	glyphicon glyphicon-list-alt">&thinsp;</span>Terminet per sot</a>
                            </div>
                   <div class="col-sm-3 col-md-3 pull-right ">
                       
                       <form class="navbar-form" role="search" action="CRUD/search.php" method="POST">
                            
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Kerko" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
                   
        </div>
               
            </div>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Emri</th>
                      <th>Mbiemri</th>
                      <th>Data</th>
                      <th>Ora</th>
                      <th>E-Mail</th>
                      <th>Menaxhimi</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  <?php
                  $selektimi = "SELECT u.user_id, u.name, u.surname, t.date, t.time, u.email, t.id_termini FROM user AS u INNER JOIN termini AS t ON u.user_id=t.id_users WHERE t.date >='".$date."'  ORDER BY `t`.`date` ASC, t.time ASC";
		$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
                   
                       while($row = mysql_fetch_array($result))
		{
			
			list($user_id, $name, $surname,  $date, $time, $email, $termini_id )=$row;
			echo '  <tr>'; 
			echo '<td>'.$name.'</td>'; 
			echo '<td>'.$surname.'</td>'; 
		
                        echo '<td>'.$date.'</td>'; 
			echo '<td>'.$time.'</td>'; 
			echo '<td>'.$email.'</td>'; 
                        echo '<td><a class="btn btn-default" href="CRUD/read.php?id='.$termini_id.'" ><span class=" 	glyphicon glyphicon-th-list">&thinsp;</span>Lexo</a>';
                        echo ' ';
                        echo '<a class="btn btn-info   " href="CRUD/update.php?id='.$termini_id.'" ><span class="glyphicon glyphicon-pencil">&thinsp;</span>Ndrysho</a>';
                        echo ' ';
                        echo '<a class="btn btn-danger" href="CRUD/delete.php?id='.$termini_id.'" ><span class=" 	glyphicon glyphicon-trash">&thinsp;</span>Fshije</a></td>';
			echo '  </tr>'; 
		}
                  ?>
                  </tbody>
            </table>
        </div>
    </div> 
 <?php
 }