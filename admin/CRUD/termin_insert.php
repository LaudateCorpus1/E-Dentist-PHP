
<?php
       include('../../inc/db_con.php');
   		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$username = $_POST['username'];
                $date = $_POST['date'];
                $time =  $_POST['time'];
                $id = NULL;
         $query= "SELECT * FROM termini WHERE date='".$date."' AND time='".$time."'";
       
        $results = mysql_query($query);

if(mysql_num_rows($results) > 0){

            $message = "Termini ne kete kohe egziston provoni ne kohe tjeter";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh:1;url=../index.php");
        }
   else{
        $selektimi ="SELECT user_id FROM user WHERE  username ='".$username."'  OR name ='".$name."' OR  surname = '".$surname ."'";
	$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
	while($row = mysql_fetch_row($result))
	{
		
		list($user_id)=$row;
                $id = $user_id;
                echo $id;
                echo $name;
                echo $surname;
                      
    
	}
        	 $sql_insert = "INSERT INTO termini (date, time, id_users)
				VALUE ('$date','$time', '$id') ";
		
		$query=mysql_query($sql_insert);
		
		if($query)
		{
			$message = "Te dhenat u ruajten me sukses. Shtyp OK per tu kthyer";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh:1;url=../index.php");
                         
                        
			
			
			
		}
		else{
			
		$message = "Te dhenat nuk u ruajten me sukses. Vertetoni nese personi ekziston";
                        echo "<script type='text/javascript'>alert('$message');</script>" or die ('invalid query:'. mysql_error());
			header(  "location:../?admin=create" );
		}
 
                            
             
		
   }
		?>