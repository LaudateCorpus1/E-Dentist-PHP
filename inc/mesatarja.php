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
       $selektimi1 = "SELECT AVG(rating) as total_sum FROM `rating`  ";
		$result1 = mysql_query($selektimi1) or die ('invalid query:'. mysql_error());
                   
                       while($row = mysql_fetch_array($result1))
		{
			
			list( $totalsum )=$row;
                        {
                            $Tmes=$totalsum;
                       }
                        }
                        
        $selektimi2 = "SELECT `rating`, COUNT(`rating`) AS `value_occurrence` FROM `rating` GROUP BY `rating` ORDER BY `value_occurrence` DESC LIMIT 1 ";
		$result2 = mysql_query($selektimi2) or die ('invalid query:'. mysql_error());
                   
                       while($row = mysql_fetch_array($result2))
		{
			
			list( $number, $total )=$row;
                        {
                            $Tnrmv=$number;
                       }
                        }
$selektimi3 = "SELECT COUNT(ID) FROM rating ";
		$result3 = mysql_query($selektimi3) or die ('invalid query:'. mysql_error());
                   
                       while($row = mysql_fetch_array($result3))
		{
			
			list( $number )=$row;
                        {
                            $Tnrv=$number;
                       }
                        }
                      
                        
                        
?> 


 <div class ="container" >
               
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Vleresimi Mesatar</h3>
                       
                    </div>
                         <table class="table table-striped table-bordered">
         <thead>
             
        </thead>
        <tbody>
            <tr>
                <td>Numri i vleresuesve</td>
                <td><?php echo $Tnrv ?></td>
              
            </tr>
            <tr>     
                <td>Nota me se shumti e vleresuar</td>
                <td><?php echo $Tnrmv?></td>
               
            </tr>
            <tr>
                <td>Mesatarja</td>
                <td><?php echo $Tmes ?></td>
           
            </tr>
            
        </tbody>
    </table>
                </div>
     </div>
 <?php
 }