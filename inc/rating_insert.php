<?php
		include('db_con.php');
		
		
		$rating = $_POST['optradio'];
		
		//Query per INSERT ne tabelen kontakti si dhe atributet te cilat do te insertohen
		$sql_insert ="INSERT INTO rating (rating)
				VALUE ('$rating')";
		
		$query=mysql_query($sql_insert);
		
		if($query)
		{
			$message = "Te dhenat u ruajten me sukses. Shtyp OK per tu kthyer";
                        echo "<script type='text/javascript'>alert('$message');</script>";
			header( "refresh:0;url=../index.php" );
			
			
		}
		else{
			
				$message = "Te dhenat nuk u ruajten me sukses. Shtyp OK per tu kthyer";
                        echo "<script type='text/javascript'>alert('$message');</script>" or die ('invalid query:'. mysql_error());
			header( "refresh:0;url=../index.php" );   
		}
		?>
	