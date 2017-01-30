<?php
       include('../../inc/db_con.php');
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
     
 else{ 
		$diagnoza = $_POST['diagnose'];
                $vizita_id = $_POST['vizita_id'];
                
        $selektimi ="SELECT * FROM diagnoza WHERE  vizita_id ='".$vizita_id."'";
	$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
        if(mysql_num_rows($result) > 0){

            $message = "Diagnoza per kete vizite egziston.";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh:0;url=create.php");
        }
        else{
           
          $sql_insert = "INSERT INTO diagnoza (diagnoza, vizita_id)
				VALUE ('$diagnoza','$vizita_id') ";
		
		$query=mysql_query($sql_insert);
		
		if($query)
		{
			$message = "Te dhenat u ruajten me sukses. Shtyp OK per tu kthyer";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh: 0; url=../?admin=diagnoza");
                         
                        
			
			
			
		}
		else{
			
		$message = "Te dhenat nuk u ruajten me sukses. Vertetoni nese personi ekziston";
                        echo "<script type='text/javascript'>alert('$message');</script>" or die ('invalid query:'. mysql_error());
			header( "refresh: 0; url=create.php" );
		}
 
        }         
             
		
   }


	