<?php
		include('db_con.php');
		
		
		$rating = $_POST['optradio'];
		
		//Query per INSERT ne tabelen kontakti si dhe atributet te cilat do te insertohen
		$sql_insert ="INSERT INTO rating (rating)
				VALUE ('$rating')";
		
		$query=mysql_query($sql_insert);
		
		if($query)
		{
			//Shfaq nje mesazh qe te dhenat u rujten me sukses dhe ridrejto ne index.php pas 2 sekondave
			echo"<h1>Te dhenat u ruajten me sukses</h1>";
			header( "refresh:1;url=../index.php" );
			
			
		}
		else{
			
				echo"<h1>Te dhenat nuk ruajten</h1>" or die ('invalid query:'. mysql_error());
			
		}
		?>
	