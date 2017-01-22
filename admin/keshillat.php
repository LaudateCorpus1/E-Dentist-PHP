
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
                <h3 >Keshillat</h3>
                <a href="CRUDk/create.php" class="btn btn-success ">Krijo</a>
                   <span><br></span>
                  <span><br></span>
            </div>
    
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Titulli</th>
                      <th>Permbajtja</th>
                      <th>Imazhi</th>
                       <th>Menaxhimi</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    
                  <?php
                  $selektimi = "SELECT * FROM keshillat ";
		$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
                   
                       while($row = mysql_fetch_array($result))
		{
			
			list( $id, $titulli,  $permbajtja, $imazhi )=$row;
			echo '  <tr>'; 
			echo '<td>'.$titulli.'</td>';
              

                          if (strlen($permbajtja) > 100) {

                        // truncate string
                             $stringCut = substr($permbajtja, 0,100);

                            // make sure it ends in a word so assassinate doesn't become ass...
                            $permbajtja = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href="CRUDk/read.php?id='.$id.'"  >Lexo Me shume</a>'; 
                        }
                        echo '<td>'.$permbajtja.'</td>';
                        echo '<td><a target="_blank" class="btn btn-default" href="../'.$imazhi.'" >Shiko</a></td>'; 
	                echo '<td style="width: 230px;"><a class="btn btn-default" href="CRUDk/read.php?id='.$id.'" >Lexo</a>';
                        echo ' ';
                        echo '<a class="btn btn-info   " href="CRUDk/update.php?id='.$id.'" >Ndrysho</a>';
                        echo ' ';
                        echo '<a class="btn btn-danger" href="CRUDk/delete.php?id='.$id.'" >Fshije</a></td>';
			echo '  </tr>'; 
		}
                  ?>
                  </tbody>
            </table>
        </div>
    </div> 

