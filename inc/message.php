      <div class="row">
                <h3 >Mesazhi</h3>
                <a href="inc/message_create.php" class="btn btn-success "><span class="glyphicon glyphicon-plus">&thinsp;</span>Dergo</a>
<span><br></span>   
            </div>
 
    <span><br></span>
    <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Derguesi</th>
                      <th>Pranuesi</th>
                      <th>Mesazhi</th>
                       <th>Menaxhimi</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    
                  <?php
                  $selektimi = "SELECT * FROM message WHERE reciever='".$_SESSION['username']."' ";
		$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
                   
                       while($row = mysql_fetch_array($result))
		{
			
			list( $id, $sender,  $receive, $message )=$row;
			echo '  <tr>'; 
			echo '<td>'.$sender.'</td>';
                        echo '<td>'.$receive.'</td>';
                        echo '<td>'.$message.'</td>'; 
	                echo '<td style="width: 280px;"><a class="btn btn-default" href="inc/messageread.php?id='.$id.'" ><span class="glyphicon glyphicon-th-list">&thinsp;</span>Lexo</a>';
                    			echo '  </tr>'; 
		}
                  ?>
                  </tbody>
            </table>
    </div>
        </div>
    </div> 

