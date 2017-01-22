
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
                <h3 >Sherbimet</h3>
                <a href="CRUDsh/create.php" class="btn btn-success ">Krijo</a>
                 <span><br></span>
                  <span><br></span>
      
      
            </div>
    
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Pershkrimi</th>
                      <th>Qmimi</th>
                      <th>Imazhi</th>
                       <th>Menaxhimi</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    
                  <?php
                  $selektimi = "SELECT * FROM services ";
		$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
                   
                       while($row = mysql_fetch_array($result))
		{
			
			list( $id, $imazhi,  $pershkrimi, $qmimi )=$row;
			echo '  <tr>'; 
			echo '<td>'.$pershkrimi.'</td>'; 
			echo '<td>'.$qmimi.'</td>'; 
                        echo '<td><a target="_blank" class="btn btn-default" href="../'.$imazhi.'" >Shiko</a></td>'; 
	                echo '<td style="width: 230px;"><a class="btn btn-default" href="CRUDsh/read.php?id='.$id.'" >Lexo</a>';
                        echo ' ';
                        echo '<a class="btn btn-info   " href="CRUDsh/update.php?id='.$id.'" >Ndrysho</a>';
                        echo ' ';
                        echo '<a class="btn btn-danger" href="CRUDsh/delete.php?id='.$id.'" >Fshije</a></td>';
			echo '  </tr>'; 
		}
                  ?>
                  </tbody>
            </table>
        </div>
    </div> 

