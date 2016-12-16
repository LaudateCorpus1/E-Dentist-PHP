 <div class="container">
            <div class="row">
                <h3>Perdoruesit</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Emri</th>
                      <th>Mbiemri</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>E-Mail</th>
                      <th>Privilegji</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  <?php
                  $selektimi = 'SELECT name, surname, username, password, email, admin FROM user';
		$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
                   
                       while($row = mysql_fetch_array($result))
		{
			
			list(  $name, $surname, $username, $password, $email, $admin  )=$row;
			echo '  <tr>'; 
			echo '<td>'.$name.'</td>'; 
			echo '<td>'.$surname.'</td>'; 
			echo '<td>'.$username.'</td>'; 
			echo '<td>'.$password.'</td>'; 
			echo '<td>'.$email.'</td>'; 
                        if($admin == 1)
                        echo '<td>Admin</td>';
                    else {
                          echo '<td>User</td>';
                    }   
			echo '  </tr>'; 
		}
                  ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->