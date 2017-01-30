
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
 ?>
<div class="container">
            <div class="row">
                <h3 >Diagnozat</h3>
                <a href="CRUDd/create.php" class="btn btn-success "><span class="glyphicon glyphicon-plus">&thinsp;</span>Krijo</a>
                  <span><br></span>
                  <span><br></span>
            </div>
 
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Emri</th>
                      <th>Mbiemri</th>
                      <th>E-Mail</th>
                      <th>Diagnoza</th>
                      <th>Vizita</th>
                      <th>Menaxhimi</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  <?php
                  $selektimi = "SELECT u.name, u.surname, u.email, v.id_historiku, d.diagnoza FROM vizita AS v INNER JOIN termini as t ON t.id_termini=v.termin_id INNER JOIN user AS u ON t.id_users=u.user_id INNER JOIN diagnoza as d ON d.vizita_id=v.id_historiku  ";
		$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
                   
                       while($row = mysql_fetch_array($result))
		{
			
			list( $name, $surname,  $email,  $vizita_id, $diagnose )=$row;
			echo '  <tr>'; 
			echo '<td>'.$name.'</td>'; 
			echo '<td>'.$surname.'</td>'; 
		       echo '<td>'.$email.'</td>'; 
			echo '<td>'.$diagnose.'</td>';
			echo '<td><a class="btn btn-default" href="CRUDv/read.php?id='.$vizita_id.'" ><span class="glyphicon glyphicon-calendar">&thinsp;</span>Vizita  </a></td>'; 
                        echo '<td><a class="btn btn-default" href="CRUDd/read.php?id='.$vizita_id.'" ><span class="glyphicon glyphicon-th-list">&thinsp;</span>Lexo</a>';
                        echo ' ';
                        echo '<a class="btn btn-info   " href="CRUDd/update.php?id='.$vizita_id.'" ><span class="glyphicon glyphicon-pencil">&thinsp;</span>Ndrysho</a>';
                        echo ' ';
                        echo '<a class="btn btn-danger" href="CRUDd/delete.php?id='.$vizita_id.'" ><span class="glyphicon glyphicon-trash">&thinsp;</span>Fshije</a></td>';
			echo '  </tr>'; 
		}
                  ?>
                  </tbody>
            </table>
            </div>
        </div>
    </div> 

