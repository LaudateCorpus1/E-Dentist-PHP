 <div class="container">
            <div class="row">
                <h3>Terminet</h3>
            </div>
            <div class="row">
                  <p>
                      <a href="?admin=create" class="btn btn-success">Create</a>
                </p>
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
                  $selektimi = 'SELECT u.user_id, u.name, u.surname, t.date, t.time, u.email FROM user AS u INNER JOIN termini AS t ON u.user_id=t.id_users';
		$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
                   
                       while($row = mysql_fetch_array($result))
		{
			
			list($user_id, $name, $surname,  $date, $time, $email,  )=$row;
			echo '  <tr>'; 
			echo '<td>'.$name.'</td>'; 
			echo '<td>'.$surname.'</td>'; 
			echo '<td>'.$date.'</td>'; 
			echo '<td>'.$time.'</td>'; 
			echo '<td>'.$email.'</td>'; 
                        echo '<td><a class="btn btn-default" href="read.php?id='.$row['user_id'].'">Read</a></td>';
			echo '  </tr>'; 
		}
                  ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->