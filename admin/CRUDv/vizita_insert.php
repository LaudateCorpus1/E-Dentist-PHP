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
		$verejtje = $_POST['verejtje'];
                $termini_id = $_POST['termin_id'];
                
        $selektimi ="SELECT * FROM vizita WHERE  termin_id ='".$termini_id."'";
	$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
        if(mysql_num_rows($result) > 0){

            $message = "Vizita per kete termin egziston.";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh:0;url=create.php");
        }
        else{
           
          $sql_insert = "INSERT INTO vizita (verejtje, termin_id)
				VALUE ('$verejtje','$termini_id') ";
		
		$query=mysql_query($sql_insert);
		
		if($query)
		{
			$message = "Te dhenat u ruajten me sukses. Shtyp OK per tu kthyer";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("refresh: 0; url=../?admin=vizita");
                         
                        
			
			
			
		}
		else{
			
		$message = "Te dhenat nuk u ruajten me sukses. Vertetoni nese personi ekziston";
                        echo "<script type='text/javascript'>alert('$message');</script>" or die ('invalid query:'. mysql_error());
			header( "refresh: 0; url=create.php" );
		}
 
        }         
             
		
   }


	