
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
 ?>
<div class="container">
            <div class="row">
                <h3 >Vizitat</h3>   
            </div>
     
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Emri</th>
                      <th>Mbiemri</th>
                      <th>E-Mail</th>
                      <th>Diagnoza</th>
                      <th>Termini</th>
                      <th>Menaxhimi</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  <?php
                  $selektimi = "SELECT u.name, u.surname, u.email, t.id_termini, v.id_historiku, v.diagnose FROM user AS u INNER JOIN termini as T INNER JOIN vizita AS v ON t.id_users=u.user_id AND t.id_termini=v.termin_id WHERE u.username='".$_SESSION['username']."'";
		$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
                   
                       while($row = mysql_fetch_array($result))
		{
			
			list( $name, $surname,  $email, $termini_id, $vizita_id, $diagnoza )=$row;
			echo '  <tr>'; 
			echo '<td>'.$name.'</td>'; 
			echo '<td>'.$surname.'</td>'; 
		       echo '<td>'.$email.'</td>'; 
			
			echo '<td>'.$diagnoza.'</td>'; 
                        echo '<td><a class="btn btn-default" href="CRUD/read.php?id='.$termini_id.'" >Termini</a></td>'; 
                        echo '<td><a class="btn btn-default" href="inc/historiku_read.php?id='.$vizita_id.'" >Lexo</a>';
                        echo ' ';
			echo '  </tr>'; 
		}
                  ?>
                  </tbody>
            </table>
        </div>
    </div> 

