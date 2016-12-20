<?php
$selektimi = 'SELECT * FROM keshillat';
	$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
	echo ' <h3>KESHILLAT TONA</h3>';
	while($row = mysql_fetch_row($result))
	{
		
		list($id, $title, $description, $photo)=$row;
                    echo '<ul class="list-group">';
                echo '<div class="col-sm-12 foto" >';  
                echo '<div class="col-sm-4">';
                echo'<img src="'.$photo.'" class="img-responsive" >';
                echo '</div>';
                echo'<div class="col-sm-8 text">';
                echo'<h4>'.$title.'</h4>	';
            
                echo'  <p> '.$description.'</p>';
                echo '</div>';
                echo '</div>';
                echo '</ul> ';
               
               
	}
	
	?>