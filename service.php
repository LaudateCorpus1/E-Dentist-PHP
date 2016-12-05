<?php
	$selektimi = 'SELECT id, photo , description, price FROM services';
	$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
	echo ' <h3>SHERBIMET TONA</h3>';
	while($row = mysql_fetch_row($result))
	{
		
		list($id, $photo, $description, $price)=$row;
                echo '<div class="col-sm-4" id="services">';    
                 echo'<img id="fotot" src="'.$photo.'"/>';
                echo'  <p> '.$description.'</p>';
                echo '<p><b>Çmimi ' .$price. ' euro</b></p>';
                echo '</div>';
	}
	
	?>