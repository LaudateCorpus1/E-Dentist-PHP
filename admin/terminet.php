<?php
 $date = date("Y-m-d");
?> 
<div class="container">
            <div class="row">
                <h3 >Terminet</h3>
                
                    <a href="?admin=create" class="btn btn-success ">Krijo</a>
                
        
            </div>
     <div class="row">
         <div class="col-sm-2">
                                <a class="btn btn-default" href="CRUD/search.php?id=<?php echo $date?>" >Terminet per sot</a>
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
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  <?php
                  $selektimi = "SELECT u.user_id, u.name, u.surname, t.date, t.time, u.email, t.id_termini FROM user AS u INNER JOIN termini AS t ON u.user_id=t.id_users WHERE t.date >='".$date."'";
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
                        echo '<td><a class="btn btn-default" href="CRUD/read.php?id='.$termini_id.'" >Lexo</a>';
                        echo ' ';
                        echo '<a class="btn btn-info   " href="CRUD/update.php?id='.$termini_id.'" >Ndrysho</a>';
                        echo ' ';
                        echo '<a class="btn btn-danger" href="CRUD/delete.php?id='.$termini_id.'" >Shlyej</a></td>';
			echo '  </tr>'; 
		}
                  ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->