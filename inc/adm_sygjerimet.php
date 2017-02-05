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
 else if($_SESSION['mof'] == 0)
 {
      $message = "Nuk keni akses.";
     echo "<script type='text/javascript'>alert('$message');</script>" ;
      header("refresh:0 url=index.php");
 }
 else{
      
    ?>
 <div class="container">
            <div class="row">
                <h3 >Sygjerimet</h3>
             
<span><br></span>   
            </div>
    
    <span><br></span>
    <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Emri</th>
                      <th>Mbiemri</th>
                      <th>Email</th>
                       <th>Sygjerimit</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    
                  <?php
                  $selektimi = "SELECT u.name, u.surname, u.email, s.sygjerimi FROM `sygjerimet` AS s INNER JOIN user AS u ON s.user_id=u.user_id ";
		$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
                   
                       while($row = mysql_fetch_array($result))
		{
			
			list( $name, $surname,  $email, $sugjerimi )=$row;
			echo '  <tr>'; 
			echo '<td>'.$name.'</td>';
        
                        echo '<td>'.$surname.'</td>';
                        echo '<td>'.$email.'</td>'; 
                          echo '<td>'.$sugjerimi.'</td>'; 
	               	echo '  </tr>'; 
		}
                  ?>
                  </tbody>
            </table>
    </div>
        </div>
    </div> 

 <?php
 }